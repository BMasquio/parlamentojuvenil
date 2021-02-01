<?php

namespace App\Console\Commands;

use App\Jobs\SyncNews;
use App\Jobs\SyncGallery;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;

class SyncAll extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync news';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->dispatch(new SyncNews());
        $this->dispatch(new SyncGallery());
    }
}
