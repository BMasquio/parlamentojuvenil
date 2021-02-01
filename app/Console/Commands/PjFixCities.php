<?php

namespace App\Console\Commands;

use League\Csv\Statement;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;

class PjFixCities extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:fix-cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix wrong cities names';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        fix_cities();

        $this->info('Fixed');
    }
}
