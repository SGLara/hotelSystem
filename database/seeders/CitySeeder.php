<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = City::make([
            'name' => 'Santa Ana'
        ]);

        $city->state_id = 1;
        $city->save();
    }
}
