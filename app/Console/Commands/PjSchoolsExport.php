<?php

namespace App\Console\Commands;

use SchoolsSeeder;
use Illuminate\Console\Command;

class PjSchoolsExport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:schools:export {file?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export database';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $seeder = new SchoolsSeeder();

        $seeder->export($this->argument('file'));
    }
}
