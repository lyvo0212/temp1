<?php

use Illuminate\Database\Seeder;
use App\LoaiKhoiLuongTinh;
class LoaiKhoiLuongTinhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         LoaiKhoiLuongTinh::create([
        		'id'		=>'1',
	            'TenLoaiKLT' =>  'gói'
        	]);
         LoaiKhoiLuongTinh::create([
        		'id'		=>'2',
	            'TenLoaiKLT' =>  'hũ'
        	]);
         LoaiKhoiLuongTinh::create([
        		'id'		=>'3',
	            'TenLoaiKLT' =>  'lọ',
        	]);
         LoaiKhoiLuongTinh::create([
        		'id'		=>'4',
	            'TenLoaiKLT' =>  'chai'
        	]);
         LoaiKhoiLuongTinh::create([
        		'id'		=>'5',
	            'TenLoaiKLT' =>  'hộp'
        	]);
         LoaiKhoiLuongTinh::create([
        		'id'		=>'6',
	            'TenLoaiKLT' =>  'vỉ'
        	]);
           LoaiKhoiLuongTinh::create([
        		'id'		=>'7',
	            'TenLoaiKLT' =>  'viên'
        	]);

    }
}
