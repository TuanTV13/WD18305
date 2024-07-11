<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Nette\Utils\random;
use Illuminate\Support\Str;


class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $last_name = ['Tuan', 'Nguyen', 'Giang', 'Duong', 'Hung', 'Lan', 'Anh', '', 'Abc', '123', 'Tuna', 'No', 'Yes', 'Pass'];
        $first_name = ['Tran', 'Nguyen', 'Ly', 'Phan', 'Hoang', 'Pham', 'Ma', 'Thach', 'Hihi', 'Done', 'Pass', 'Lone', 'Pass'];

        $name = [];

        foreach ($first_name as $firts) {
            foreach ($last_name as $last) {
                $name[] = $firts . ' ' . $last;
            }
        }

        shuffle($name);

        $randomName = array_slice($name, 0, 100);

        foreach ($randomName as $name) {
            DB::table('admin')->insert([
                'name' => $name,
                'password' => Str::random(10),
                'phone' => rand(1, 100),
                'email' => Str::random(5) . '@gmail.com'
            ]);
        }
    }
}
