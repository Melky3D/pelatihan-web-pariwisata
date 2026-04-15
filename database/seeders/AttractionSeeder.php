<?php

namespace Database\Seeders;

use App\Models\Attraction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attraction::create([
            'name' => 'Roller Coaster',
            'description' => 'A thrilling ride that takes you on a high-speed journey with twists, turns, and loops.',
        ]);

        for ($i = 0; $i < 10; $i++) {
        Attraction::create([
            'name' => fake('id_ID')->name(),
            'description' => fake('id_ID')->paragraph(),
        ]);
    }
    }
}
