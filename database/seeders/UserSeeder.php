<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::make([
            'first_name' => 'Steven',
            'last_name' => 'Lara',
            'email' => 'steven@example.com',
            'password' => Hash::make('Spiderman1'),
            'is_admin' => 1,
            'phone' => 12345678,
            'points' => 9999999,
        ]);
        $user->member_id = 'SXL030600';
        $user->markEmailAsVerified();
        $user->save();
    }
}
