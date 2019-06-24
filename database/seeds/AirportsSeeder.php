<?php

use Illuminate\Database\Seeder;

class AirportsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        //Empty the airports table
        DB::table(Config::get('airports.table_name'))->delete();

        //Get all of the airports
        $airports = Airports::getList();
        foreach ($airports as $airportId => $airport) {
            DB::table(Config::get('airports.table_name'))->insert([
                'id'           => $airportId,
                'code'         => $airport['code'],
                'name'         => $airport['name'],
                'country_code' => $airport['country_code'],
            ]);
        }
    }
}
