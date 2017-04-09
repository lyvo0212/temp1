<?php

use Illuminate\Database\Seeder;
use App\XuatXu;
class XuatXuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
         XuatXu::create([
        		'id'		=>'1',
	            'TenXuatxu' =>  'Hàn Quốc', 
	            'BiDanh'=>"hq",
	            
	         	]);
          XuatXu::create([
        		'id'		=>'2',
	            'TenXuatxu' =>  'Nhật Bản', 
	            'BiDanh'=>"nb",
	            
	         	]);
           XuatXu::create([
        		'id'		=>'3',
	            'TenXuatxu' =>  'Pháp', 
	            'BiDanh'=>"p",
	            
	         	]);
            XuatXu::create([
        		'id'		=>'4',
	            'TenXuatxu' =>  'Anh', 
	            'BiDanh'=>"a",
	            
	         	]);
            XuatXu::create([
        		'id'		=>'5',
	            'TenXuatxu' =>  'Mỹ', 
	            'BiDanh'=>"M",
	            
	         	]);
            XuatXu::create([
        		'id'		=>'6',
	            'TenXuatxu' =>  'Trung Quốc', 
	            'BiDanh'=>"tq",
	            
	         	]);

    
    }
}
