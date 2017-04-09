<?php

use Illuminate\Database\Seeder;
class LoaiDonViTinhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\LoaiDonViTinh::create([
        		'id'		=>'1',
	            'TenLoaiDVT' =>  'gam',
        	]);
        App\LoaiDonViTinh::create([
        		'id'		=>'2',
	            'TenLoaiDVT' =>  'ml',
        	]);
        App\LoaiDonViTinh::create([
        		'id'		=>'3',
	            'TenLoaiDVT' =>  'kilogam',

        	]);
        App\LoaiDonViTinh::create([
        		'id'		=>'4',
	            'TenLoaiDVT' =>  'litre',
	            
	          
        	]);
    }
}
