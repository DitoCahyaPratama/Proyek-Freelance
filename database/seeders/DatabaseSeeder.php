<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'photo_profile' => null,
            'password' => Hash::make('password'),
            'role' => 'admin',
            'description' => "saya admin"
        ]);

        DB::table('users')->insert([
            'username' => 'client',
            'name' => 'client',
            'email' => 'karyawan@gmail.com',
            'photo_profile' => null,
            'password' => Hash::make('password'),
            'role' => 'pKaryawan',
            'description' => "saya pencari freelancers"
        ]);

        DB::table('users')->insert([
            'username' => 'freelance',
            'name' => 'freelance',
            'email' => 'freelance@gmail.com',
            'photo_profile' => null,
            'password' => Hash::make('password'),
            'role' => 'pKerja',
            'description' => "saya freelance"
        ]);
    }
}
