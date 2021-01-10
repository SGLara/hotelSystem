<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'hotels',
            'countries',
            'states',
            'cities',
        ]);
        
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(HotelSeeder::class);
        // \App\Models\User::factory(10)->create();
    }

    protected function truncateTables(array $tables)
    {
        //DISABLE THE FOREIGN KEY CONSTRAINT
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        //ENABLE THE FOREIGN KEY CONSTRAINT
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
