<?php

namespace App\Services\Views;

use App\Data\Models\Student;
use \DB;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Data\Models\State;
use App\Data\Models\School;
use App\Data\Models\Article;
use App\Data\Repositories\Data;
use Illuminate\Support\Facades\Session;
use App\Data\Repositories\Subscriptions;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Services\Filesystem\Service as Filesystem;
use Illuminate\Support\Collection as IlluminateCollection;

class Builder
{
    use DispatchesJobs;

    /**
     * @var \App\Services\Filesystem\Service
     */
    protected $filesystem;

    public $spreadsheet = 'https://docs.google.com/a/antoniocarlosribeiro.com/spreadsheets/d/1wrR7y4qk2ofj4kPgkhyPVBjwSohh8k1J6drsZ3bGzic/edit?usp=sharing';

    /**
     * @var Data
     */
    protected $dataRepository;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function buildViewData(
        $view,
        $force = false,
        $isHome = false,
        $year = null
    ) {
        header('X-Frame-Options: GOFORIT');

        $fourteenDate = (new Carbon())->subYears(14);

        $seventeenDate = (new Carbon())->subYears(18)->addDays(1);

        $banner = $this->execute(function () {
            return $this->selectBanner();
        }, 'selectBanner');

        $citiesInCurrentRound = $this->execute(function () {
            return $this->getCitiesInCurrentRound();
        }, 'getCitiesInCurrentRound');

        $congressmenLinks = $this->execute(function () {
            return $this->getCongressmenLinks();
        }, 'getCongressmenLinks');

        $testimonials = $this->execute(function () {
            return $this->getTestimonials();
        }, 'getTestimonials');

        $cities = $this->execute(function () {
            return $this->getCities();
        }, 'getCities');

        $newspapersLinks = $this->execute(function () {
            return $this->getNewspapersLinks();
        }, 'getNewspapersLinks');

        $galleryLinks9 = $this->execute(function () {
            return $this->getGalleryLinks(9);
        }, 'getGalleryLinks');

        $galleryLinks8 = $this->execute(function () {
            return $this->getGalleryLinks(8);
        }, 'getGalleryLinks');

        $fourteenDateString = $this->execute(function () use ($fourteenDate) {
            return $fourteenDate->format('d/m/Y');
        }, 'fourteenDate');

        $seventeenDateString = $this->execute(function () use ($seventeenDate) {
            return $seventeenDate->format('d/m/Y');
        }, 'seventeenDate');

        $clipping = !$year
            ? null
            : $this->execute(function () use ($year) {
                return $this->getClipping($year);
            }, 'getClipping');

        $now = $this->execute(function () {
            return (string) Carbon::now()->subHours(3);
        }, 'now');

        $year = $year ?: Carbon::now()->year;

        $articles = $this->execute(function () use ($year) {
            return $this->getArticles('>=', $year);
        }, 'getArticles');

        $articlesOld = $this->execute(function () use ($year) {
            return $this->getArticles('<=', $year - 1);
        }, 'getArticles');

        return $view
            ->with('banner_file', $banner)
            ->with('spreadsheet', $this->spreadsheet)
            ->with('congressmen', $congressmenLinks)
            ->with('carrousel', $testimonials)
            ->with('cities', $cities)
            ->with('citiesInCurrentRound', $citiesInCurrentRound)
            ->with(
                'flags',
                $this->dataRepository->flagContest
                    ->allFlagsWithVotes()
                    ->shuffle()
            )
            ->with(
                'finalistFlags',
                $this->dataRepository->flagContest
                    ->allFlagsWithVotes()
                    ->where('finalist', true)
                    ->shuffle()
            )
            ->with('winnerFlags', $this->getWinnerFlags())
            ->with('student', loggedUser()->student ?: new Student())
            ->with('isSubscribeForm', loggedUser()->must_be_student)
            ->with('newspapers', $newspapersLinks)
            ->with('gallery', $galleryLinks9)
            ->with('oldGallery', $galleryLinks8)
            ->with('oldArticles', $articlesOld)
            ->with('newArticles', $articles)
            ->with('articles', $articles)
            ->with('fourteenDate', $fourteenDateString)
            ->with('seventeenDate', $seventeenDateString)
            ->with('now', $now)
            ->with('year', $year)
            ->with('clipping', $clipping)
            ->with('isHome', $isHome)
            ->with('force', $force);
    }

    protected function execute($function, $name)
    {
        // we could create some caching here

        if ($result = Cache::get($key = 'execute-' . $name)) {
            return $result;
        }

        $result = $function();

        Cache::put($key, $result, 2);

        return $result;
    }

    protected function getClipping($year)
    {
        return $this->dataRepository->getClipping($year);
    }

    public function getCongressmenLinks()
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

    public function getCitiesInCurrentRound()
    {
        return app(Subscriptions::class)->getCitiesInCurrentRound();
    }

    public function getCities()
    {
        return State::where('code', 'RJ')
            ->first()
            ->cities()
            ->orderBy('name')
            ->get();
    }

    public function getNewspapersLinks()
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

    public function getArticles($operand, $year)
    {
        return $this->getArticlesForType($operand, $year, 'Notícias');
    }

    public function getGalleryLinks($edition)
    {
        return $this->getArticlesForType(null, null, 'Fotos', $edition);
    }

    public function getTestimonials()
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

    private function getWinnerFlags()
    {
        $flags = $this->dataRepository->flagContest
            ->allFlagsWithVotes()
            ->reject(function ($flag) {
                return !$flag->winner_position;
            });

        return [
            1 => $flags->where('winner_position', 1)->first(),
            2 => $flags->where('winner_position', 2)->first(),
            3 => $flags->where('winner_position', 3)->first(),
        ];
    }

    public function makeLinkAttributes($file, $name, $parts)
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

    /**
     * @param $operand
     * @param $year
     * @return mixed
     */
    public function getArticlesForType($operand, $year, $type, $edition = null)
    {
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
                $article->short_body = Str::limit(
                    $this->stripTags($article->body),
                    300
                );
            }
        }

        return $articles;
    }

    public function selectBanner()
    {
        $banners = new IlluminateCollection([
            'banners/parlamentares/bg_fotos01.jpg',
            'banners/parlamentares/bg_fotos02.jpg',
            'banners/parlamentares/bg_fotos03.jpg',
            'banners/parlamentares/bg_fotos04.jpg',
            'banners/parlamentares/bg_fotos05.jpg',
            'banners/parlamentares/bg_fotos06.jpg',
            'banners/parlamentares/bg_fotos07.jpg',
            'banners/parlamentares/bg_fotos08.jpg',
            'banners/parlamentares/bg_fotos09.jpg',
            'banners/parlamentares/bg_fotos10.jpg',
        ]);

        $usedBanners = Session::get('used_banners') ?: [];

        if (count($usedBanners) >= $banners->count()) {
            $usedBanners = [];
        }

        $usedBanners = new IlluminateCollection($usedBanners);

        while (true) {
            $banner = $banners->random();

            if (!$usedBanners->contains($banner)) {
                break;
            }
        }

        $usedBanners->put(null, $banner);

        Session::put('used_banners', $usedBanners->toArray());

        return $banner;
    }

    public function getSchoolsForCity($city)
    {
        return School::where(
            'city',
            'like',
            DB::raw("UPPER('" . $city . "')")
        )->get();
    }

    /**
     * @param Data $dataRepository
     */
    public function setDataRepository($dataRepository)
    {
        $this->dataRepository = $dataRepository;
    }

    protected function stripTags($body)
    {
        $body = strip_tags($body);

        $body = str_replace("\n", '', $body);
        $body = str_replace("\r", '', $body);
        $body = str_replace("\t", ' ', $body);
        $body = str_replace('  ', ' ', $body);

        return $body;
    }
}
