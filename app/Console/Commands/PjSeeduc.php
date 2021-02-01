<?php

namespace App\Console\Commands;

use League\Csv\Statement;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Services\SeeducImporter\Service as SeeducImporter;

class PjSeeduc extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:seeduc {file?} {--dont-truncate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed seeduc table';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        (new SeeducImporter($this))->import(
            $this->argument('file'),
            $this->option('dont-truncate')
        );
    }
}
