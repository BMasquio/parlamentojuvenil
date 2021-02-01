<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Services\News\Service;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncGallery extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Execute the job.
     *
     * @param Service $newsService
     */
    public function handle(Service $newsService)
    {
        $newsService->sync(env('PHOTO_SERVICE_URL'), Service::GALLERY, 9);
        $newsService->sync(env('PHOTO_SERVICE_URL_OLD'), Service::GALLERY, 8);
    }
}
