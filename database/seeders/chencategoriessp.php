<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chencategoriessp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categoriessp')->insert([
            ['name'=>'iPhone,'],
            ['name'=>'Sam Sung,'],
            ['name'=>'Oppo,'],
            ['name'=>'Xiaomi,'],
            ['name'=>'AOI,'],
            ['name'=>'LMS,'],
        ]);
    }
}
