<?php

namespace App\Http\Controllers;

use \DB;
use App\Jobs\SyncNews;
use App\Jobs\SyncGallery;
use Carbon\Carbon;
use App\Data\Models\State;
use App\Data\Models\Article;
use App\Data\Repositories\Data;
use App\Services\News\Service as SyncNewsService;
use App\Services\Filesystem\Service as Filesystem;
use App\Http\Controllers\Controller as BaseController;

class Pages extends BaseController
{
    protected $spreadsheet = 'https://docs.google.com/a/antoniocarlosribeiro.com/spreadsheets/d/1wrR7y4qk2ofj4kPgkhyPVBjwSohh8k1J6drsZ3bGzic/edit?usp=sharing';

    /**
     * @var \App\Services\Filesystem\Service
     */
    protected $filesystem;

    /**
     * @var SyncNewsService
     */
    protected $syncNewsService;

    /**
     * @var Data
     */
    protected $dataRepository;

    public function __construct(
        Filesystem $filesystem,
        SyncNewsService $syncNewsService,
        Data $dataRepository
    ) {
        $this->filesystem = $filesystem;
        $this->syncNewsService = $syncNewsService;
        $this->dataRepository = $dataRepository;

        parent::__construct($dataRepository);
    }

    public function force()
    {
        return $this->index(true);
    }

    public function index($force = false)
    {
        return $this->buildView('home', null, $force);
    }

    public function page($page)
    {
        return $this->buildView('pages.' . $page);
    }

    protected function getCongressmenLinks()
    {
        $from7 = $this->filesystem->congressmenLinks(
            env('PHOTOS_DIR') . DIRECTORY_SEPARATOR . '7a edicao (2013)'
        );

        $from8 = $this->filesystem->congressmenLinks(
            env('PHOTOS_DIR') . DIRECTORY_SEPARATOR . '8a edicao (2014)'
        );

        /// will be sorted
        //		shuffle($from7);
        //		shuffle($from8);

        return [
            7 => $from7,
            8 => $from8,
        ];
    }

    protected function getCities()
    {
        return State::where('code', 'RJ')
            ->first()
            ->cities()
            ->orderBy('name')
            ->get();
    }

    protected function getNewspapersLinks()
    {
        $files = $this->filesystem->allLinks(env('NEWSPAPERS_DIR'));
        $links = $files['links'];
        $files = $files['files'];
        $result = [];

        foreach ($links as $key => $file) {
            $parts = pathinfo($file);

            if ($parts['extension'] == 'pdf' || $parts['extension'] == 'json') {
                $name = explode('_', $parts['filename']);

                $link = $this->makeLinkAttributes($files[$key], $name, $parts);

                $result[$key] = $link;
            }
        }

        return $result;
    }

    protected function getArticles($operand, $year)
    {
        return $this->getArticlesForType($operand, $year, 'Notícias');
    }

    protected function getGalleryLinks($edition)
    {
        return $this->getArticlesForType(null, null, 'Fotos', $edition);
    }

    protected function getTestimonials()
    {
        $file = file(
            public_path(
                'files/apps/parlamentojuvenil/parlamentares/testemunhos-parlamentares-juvenis.txt'
            )
        );

        shuffle($file);

        $result = [];

        foreach ($file as $person) {
            $person = explode(';', $person);

            $city = pathinfo($person[1]);

            $city = explode('-', $city['filename']);

            $result[] = [
                'name' => $person[0],
                'photo' => url(
                    env('LOCAL_BASE_DIR') .
                        DIRECTORY_SEPARATOR .
                        env('BASE_DIR') .
                        DIRECTORY_SEPARATOR .
                        env('PHOTOS_DIR') .
                        DIRECTORY_SEPARATOR .
                        $person[1]
                ),
                'editions' => $person[2],
                'city' => trim($city[1]),
                'testimonial' => $person[3],
            ];
        }

        return $result;
    }

    /**
     * @param $operand
     * @param $year
     * @return mixed
     */
    protected function getArticlesForType(
        $operand,
        $year,
        $type,
        $edition = null
    ) {
        $articles = Article::orderBy('published_at', 'descending')->where(
            'type',
            $type
        );

        if ($year) {
            $articles->where(
                DB::raw('extract(year from published_at)'),
                $operand,
                $year
            );
        }

        if ($edition) {
            $articles->where('edition', $edition);
        }

        foreach ($articles = $articles->get() as $article) {
            if ($article->image) {
                $article->image =
                    env('ARTICLE_IMAGE_URL_BASE') .
                    DIRECTORY_SEPARATOR .
                    $article->image;
                $article->date = Carbon::createFromFormat(
                    'Y-m-d',
                    $article->date
                )->format('d m Y');
            }
        }

        return $articles;
    }

    protected function makeLinkAttributes($file, $name, $parts)
    {
        $url = null;
        $pdf = null;

        if ($parts['extension'] == 'json') {
            $json = file_get_contents($file);

            $json = json_decode($json);

            $url = $json->url;
        } else {
            $pdf = $parts['dirname'] . '/' . $parts['filename'] . '.pdf';
        }

        $name = isset($name[2]) ? $name[1] . ' ' . $name[2] : $name[0];

        return [
            'year' => $name[0],
            'name' => $name,
            'pdf' => $pdf,
            'jpg' => $parts['dirname'] . '/' . $parts['filename'] . '.jpg',
            'url' => $url,
        ];
    }

    public function edition($year)
    {
        return $this->buildView('edition', $year);
    }

    public function gallery($year)
    {
        return $this->buildView('gallery', $year);
    }

    public function news($year)
    {
        return $this->buildView('news', $year);
    }

    public function clipping($year)
    {
        return $this->buildView('clipping', $year);
    }

    public function members($year)
    {
        return $this->buildView('members', $year);
    }
}
