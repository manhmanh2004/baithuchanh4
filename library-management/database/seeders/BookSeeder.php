<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 50; $i++) {
            Book::create([
                'name' => $faker->unique()->sentence(3), // Generate unique book titles
                'author' => $faker->name,
                'category' => $faker->randomElement(['Fiction', 'Non-Fiction', 'Science Fiction', 'History', 'Biography']),
                'year' => $faker->year,
                'quantity' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
