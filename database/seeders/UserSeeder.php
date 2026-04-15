<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Melky',
            'email' => 'melky@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        for ($i = 0; $i < 5; $i++) {
        User::create([
            'name' => fake('id_ID')->name(),
            'email' => fake('id_ID')->unique()->safeEmail(),
            'password' => bcrypt('password'),
        ]);
    }
    }
}