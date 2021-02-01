<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Services\News\Service;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SyncNews extends Job implements SelfHandling, ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Execute the job.
     *
     * @param Service $newsService
     */
    public function handle(Service $newsService)
    {
        $newsService->sync(env('NEWS_SERVICE_URL'), Service::NEWS);
    }
}
