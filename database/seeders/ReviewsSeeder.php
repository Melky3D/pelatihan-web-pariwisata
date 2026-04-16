<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'attraction_id' => 1, // Assuming this review belongs to the first attraction
            'name' => 'John Doe',
            'comment' => 'This is a great attraction!',
        ]);

        for ($i = 0; $i < 5; $i++) {
            Review::create([
                'attraction_id' => rand(1, 5), // Randomly assign to one of the first 5 attractions
                'name' => fake('id_ID')->name(),
                'comment' => fake('id_ID')->paragraph(),
            ]);
        }
    }
}