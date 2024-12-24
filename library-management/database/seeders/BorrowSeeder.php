<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\Borrow;
class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        // Get existing book and reader IDs
        $bookIds = \App\Models\Book::pluck('id')->toArray();
        $readerIds = \App\Models\Reader::pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            Borrow::create([
                'reader_id' => $faker->randomElement($readerIds),
                'book_id' => $faker->randomElement($bookIds),
                'borrow_date' => $faker->date(),
                'return_date' => $faker->optional()->date(), 
                'status' => $faker->boolean(), 
            ]);
        }
    }
}
