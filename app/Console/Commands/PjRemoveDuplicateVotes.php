<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Data\Repositories\Subscriptions;
use Illuminate\Foundation\Bus\DispatchesJobs;

class PjRemoveDuplicateVotes extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:remove-duplicate-votes {year}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove all duplicate votes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Removing...');

        app(Subscriptions::class)->removeDuplicateVotes(
            $this->argument('year'),
            $this
        );

        $this->info('Done.');
    }
}
