<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 11; $i++) {
            DB::table('books')->insert([
                'title' => fake()->text(20),
                'thumbnail' => fake()->imageUrl(),
                'author' => fake()->text(10),
                'publisher' => fake()->text(10),
                'publication' => fake()->dateTime(),
                'price' => fake()->numberBetween(10, 100000),
                'quantity' => fake()->numberBetween(1, 10),
                'category_id' => rand(1, 5)

            ]);
        }
    }
}
