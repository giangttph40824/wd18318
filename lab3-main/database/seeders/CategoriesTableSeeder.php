<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Truyền Cảm Hứng'],
            ['name' => 'Sách Tiếng Anh'],
            ['name' => 'Sách Lịch Sử'],
            ['name' => 'Sách Khoa Học'],
            ['name' => 'Sách Kinh Thánh'],
        ]);
    }
}
