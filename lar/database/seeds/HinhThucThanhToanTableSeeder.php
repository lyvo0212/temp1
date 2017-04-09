<?php

use Illuminate\Database\Seeder;
class HinhThucThanhToanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         App\HinhThucThanhToan::create([
        		'id'		=>'1',
	            'TenHinhThuc' =>  'Thanh Toán Qua Thẻ',            
	          
        	]);
        App\HinhThucThanhToan::create([
        		'id'		=>'2',
	            'TenHinhThuc' =>  'Tiền Mặt',            
	          
        	]);
         App\HinhThucThanhToan::create([
        		'id'		=>'3',
	            'TenHinhThuc' =>  'Chuyển Khoản',            
	          
        	]);
    }
}
