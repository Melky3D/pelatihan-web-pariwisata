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
            'destination_id' => 1, // Assuming this attraction belongs to the first destination
            'name' => 'Roller Coaster',
            'description' => 'A thrilling ride that takes you on a high-speed journey with twists, turns, and loops.',
        ]);

        for ($i = 0; $i < 5; $i++) {
        Attraction::create([
            'destination_id' => rand(1, 5), // Randomly assign to one of the first 5 destinations
            'name' => fake('id_ID')->name(),
            'description' => fake('id_ID')->paragraph(),
        ]);
    }
    }
}
