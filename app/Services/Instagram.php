<?php

namespace App\Services;

use Cache;
use Instagram\Api as InstagramApi;
use Exception;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\CacheItem;

class Instagram
{
    public $token;
    public $instagram;

    public function __construct()
    {
        $this->token = config('app.instagram.token');
    }

    public function getImagesUrl($count = 0)
    {
        try {
            return Cache::remember('instagramImagesUrl', 1200, function () use (
                $count
            ) {
                $cachePool = new FilesystemAdapter('instagram-feed', 0);

                $api = new InstagramApi($cachePool);

                $api->login(
                    config('app.instagram.username'),
                    config('app.instagram.secret')
                );

                $profile = $api->getProfile(config('app.instagram.username'));

                return collect($profile->getMedias())
                    ->map(function ($item) {
                        return $item->getDisplaySrc();
                    })
                    ->slice(0, $count);
            });
        } catch (Exception $e) {
            info($e->getMessage());
            return collect([]);
        }
    }
}
