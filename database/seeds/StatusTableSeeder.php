<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    public function run()
    {
        $statuses = json_decode(File::get(database_path('schema/statuses.json')), true);

        foreach ($statuses as $index => $status) {
            DB::table('statuses')->insert([
                //'id'          => $index,
                'name'        => $status['name'],
                'description' => $status['description'],
                'hexcode'     => $status['hexcode'],
                'visible'     => $status['visible'],
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}
