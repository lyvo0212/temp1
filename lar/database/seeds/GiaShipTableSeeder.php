<?php

use Illuminate\Database\Seeder;
class GiaShipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		  App\GiaShip::create([
        		'id'		=>'1',
	            'TenTinh' =>  'Hồ Chí Minh',
	            'GiaShip'=>15000
	            
	          
        	]);
        	App\GiaShip::create([
        		'id'		=>'2',
	            'TenTinh' =>  'Lào Cai',
	            'GiaShip'=>35000
	            
	          
        	]);
        	App\GiaShip::create([
        		'id'		=>'3',
	            'TenTinh' =>  'Huế',
	            'GiaShip'=>25000
	            
	          
        	]);
        	 App\GiaShip::create([
        		'id'		=>'4',
	            'TenTinh' =>  'Bình Định',
	            'GiaShip'=>15000
	            
	          
        	]);
        	App\GiaShip::create([
        		'id'		=>'5',
	            'TenTinh' =>  'Vĩnh Long',
	            'GiaShip'=>25000
	            
	          
        	]);
        	 App\GiaShip::create([
        		'id'		=>'6',
	            'TenTinh' =>  'Tiền Giang',
	            'GiaShip'=>25000
	            
	          
        	]);
    }
}
