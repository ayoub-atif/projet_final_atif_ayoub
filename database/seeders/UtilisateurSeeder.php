<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create( [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '00000000', // password
        ])->assignRole('admin');

        User::create( [
            'name' => 'atif',
            'email' => 'atif@gmail.com',
            'email_verified_at' => now(),
            'password' => '00000000', // password
        ])->assignRole('user');

    }
}
