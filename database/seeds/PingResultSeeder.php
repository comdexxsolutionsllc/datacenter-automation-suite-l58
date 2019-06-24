<?php

use App\Models\Support\PingResult;
use Illuminate\Database\Seeder;

class PingResultSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        factory(PingResult::class, 10)->create();
    }
}
