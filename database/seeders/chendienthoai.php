<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chendienthoai extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dienthoai')->insert([
            ['name'=>'iPhone', 'description'=>'OK', 'create_at'=>'2020-01-02', 'price_regular'=>'1000', 'price_sale'=>'500', 'url_img'=>'1', 'quantity'=>'20', 'baiviet'=>'abc', 'ghichu'=>'ok', 'idLoai'=>'1'],
            ['name'=>'iPhone1', 'description'=>'OK', 'create_at'=>'2020-01-02', 'price_regular'=>'1000', 'price_sale'=>'500', 'url_img'=>'1', 'quantity'=>'20', 'baiviet'=>'abc', 'ghichu'=>'ok', 'idLoai'=>'1'],
            ['name'=>'iPhone2', 'description'=>'OK', 'create_at'=>'2020-01-02', 'price_regular'=>'1000', 'price_sale'=>'500', 'url_img'=>'1', 'quantity'=>'20', 'baiviet'=>'abc', 'ghichu'=>'ok', 'idLoai'=>'1'],
            ['name'=>'iPhone3', 'description'=>'OK', 'create_at'=>'2020-01-02', 'price_regular'=>'1000', 'price_sale'=>'500', 'url_img'=>'1', 'quantity'=>'20', 'baiviet'=>'abc', 'ghichu'=>'ok', 'idLoai'=>'1'],
            ['name'=>'iPhone4', 'description'=>'OK', 'create_at'=>'2020-01-02', 'price_regular'=>'1000', 'price_sale'=>'500', 'url_img'=>'1', 'quantity'=>'20', 'baiviet'=>'abc', 'ghichu'=>'ok', 'idLoai'=>'1']
        ]);
    }
}
