<?php

use App\Models\Support\Device;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        factory(Device::class, 10)->create();
    }
}
