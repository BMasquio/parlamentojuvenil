<?php

namespace App\Console\Commands;

use App\Data\Entities\City;
use App\Data\Entities\State;
use DB;
use App\Data\Entities\Seeduc;
use Illuminate\Console\Command;

class PopulateCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:populate-cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate cities table based on Seeduc';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('cities')->delete();

        $cities = collect(DB::select('select distinct(municipio) from seeduc order by municipio'))->pluck('municipio');

        foreach ($cities as $city) {
            City::create([
                'name' => $city,
                'state_id' => State::where('name', 'Rio de Janeiro')->first()->id
            ]);

            $this->info($city);
        }
    }

    private function toDate($date)
    {
        return Carbon::createFromFormat('d/m/y', $date);
    }
}
