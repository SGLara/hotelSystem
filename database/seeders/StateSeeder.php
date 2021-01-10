<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = State::make([
            'name' => 'Santa Ana'
        ]);

        $state->country_id = 1;
        $state->save();
    }
}
