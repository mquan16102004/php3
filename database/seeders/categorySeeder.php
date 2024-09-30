<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'văn học'],
            ['name' => 'toán'],
            ['name' => 'lịch sử'],
            ['name' => 'địa lý'],
            ['name' => 'hóa học'],
        ]);
    }
}
