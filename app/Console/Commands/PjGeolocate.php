<?php

namespace App\Console\Commands;

use App\Data\Repositories\Schools;
use Illuminate\Console\Command;

class PjGeolocate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:geolocate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        app()
            ->make(Schools::class)
            ->geolocateAll();
    }
}
