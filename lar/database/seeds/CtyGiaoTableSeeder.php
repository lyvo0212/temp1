<?php

use Illuminate\Database\Seeder;
use CtyGiao;
class CtyGiaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          CtyGiao::create([
        		'id'		=>'1',
	            'TenCty' =>  'Công ty vận chuyển Đại Minh',
	            
	          
        	]);
            CtyGiao::create([
        		'id'		=>'2',
	            'TenCty' =>  'Công ty vận chuyển nhanh Công Tạo',
	            
	          
        	]);
              CtyGiao::create([
        		'id'		=>'3',
	            'TenCty' =>  'Công ty vận chuyển HugoSafari',
	            
	          
        	]);
        	    CtyGiao::create([
        		'id'		=>'4',
	            'TenCty' =>  'Công ty vận chuyển nhanh Gia Bảo',
	            
	          
        	]);
    }
}
