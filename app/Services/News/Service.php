<?php

namespace App\Services\News;

use DB;
use Carbon\Carbon;
use App\Base\Sync;
use App\Data\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class Service extends Sync
{
    const GALLERY = 'Fotos';
    const NEWS = 'Notícias';

    protected $serviceUrl;

    public function sync($serviceUrl, $type, $edition = null, $console = null)
    {
        $this->log('Data syncing...', $console);

        $this->serviceUrl = $serviceUrl;
        $this->type = $type;

        $this->storeData($this->readData($console), $type, $edition);

        $this->log('Data synced.', $console);
    }

    protected function storeData($articles, $type, $edition = null)
    {
        if ($this->isCached($articles)) {
            return false;
        }

        DB::transaction(function () use ($articles, $type, $edition) {
            $deletable = Article::where('type', $type);

            if ($edition) {
                $deletable->where('edition', $edition);
            }

            $this->deleteArticles($deletable->get());

            $this->createArticles($articles);
        });

        return $articles;
    }

    protected function readData($console = null)
    {
        $articles = json_decode($this->retrieveServiceData(), true);

        if ($articles['erro']) {
            $this->log(
                'Data syncing aborted: error ' .
                    $articles['erro'] .
                    ' - ' .
                    $articles['status'],
                $console
            );

            return false;
        }

        if ($articles = $articles['conteudo']) {
            foreach ($articles as $key => $article) {
                $articles[$key]['texto'] = base64_decode(
                    $articles[$key]['texto']
                );
                $articles[$key]['titulo'] = htmlentities(
                    $articles[$key]['titulo']
                );
                $articles[$key]['chamada'] = htmlentities(
                    $articles[$key]['chamada']
                );
            }

            return $articles;
        }

        return [];
    }

    protected function convertToCarbon($date)
    {
        $format = strlen($date) > 10 ? 'd/m/Y H:i:s' : 'd/m/Y';

        if (!$date) {
            return Carbon::now();
        }

        return Carbon::createFromFormat($format, $date);
    }

    protected function generateArticle($article)
    {
        return [
            'code' => $article['idConteudo'],
            'type' => $article['tipo'],
            'heading' => utf8_encode($article['titulo']),
            'subheading' => utf8_encode($article['chamada']),
            'body' => utf8_encode($article['texto']),
            'edition' => $article['edicao'],
            'image' => $article['img_destaque'],
            'date' => $this->convertToCarbon($article['data'])->toDateString(),
            'published_at' => $this->convertToCarbon(
                $article['data_pub']
            )->toDateTimeString(),
            'featured' => $article['destaque'] == 'S',
            'youtube_url' => $article['url_youtube'],
        ];
    }

    protected function createArticles($articles)
    {
        foreach ($articles as $article) {
            Article::create($this->generateArticle($article));
        }
    }

    public function getAll()
    {
        $collection = new Collection();

        foreach ($this->readData() as $article) {
            $collection->add(new Article($article));
        }

        return $collection;
    }

    protected function isCached($articles)
    {
        $articles = serialize($articles);

        $contents = '';

        if (file_exists($file = $this->getCachedPath())) {
            $contents = file_get_contents($file);
        }

        if ($contents !== $articles) {
            file_put_contents($file, $articles);

            return false;
        }

        return true;
    }

    public function getCachedPath()
    {
        return storage_path('app/cache') . 'news.json';
    }

    protected function retrieveServiceData()
    {
        return file_get_contents($this->serviceUrl);
    }

    protected function deleteArticles($articles)
    {
        foreach ($articles as $article) {
            $article->delete();
        }
    }
}
