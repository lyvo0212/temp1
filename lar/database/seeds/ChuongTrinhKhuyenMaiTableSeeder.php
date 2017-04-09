<?php

use Illuminate\Database\Seeder;
use App\ChuongTrinhKhuyenMai;
use Illuminate\Database\Eloquent\Model;
class ChuongTrinhKhuyenMaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          ChuongTrinhKhuyenMai::create([
        		'id'		=>'1',
	            'TenKM' =>  'KM 08/03/2017',
	            'NgayBD' =>'2017/03/06',
	            'NgayKT' => '2017/03/10',
	            'Hinh' => 'slide1.jpg',
	            'NoiDung'=>'Chuc mung ngay 8/3',
	            'TinhTrang'=>'0',
	          
        	]);
          ChuongTrinhKhuyenMai::create([
        		'id'		=>'2',
	            'TenKM' =>  'KM 30/04/2017',
	            'NgayBD' =>'2017/04/28',
	            'NgayKT' => '2017/05/30',
	            'Hinh' => 'slide2.jpg',
	            'NoiDung'=>'Chuc Mung ngay giai phong mien nam',
	            'TinhTrang'=>'0',
	          
        	]);
          ChuongTrinhKhuyenMai::create([
        		'id'		=>'3',
	            'TenKM' =>  'KM 20/10/2017',
	            'NgayBD' =>'2017/10/18',
	            'NgayKT' => '2017/10/22',
	            'Hinh' => 'slide3.jpg',
	            'NoiDung'=>'Chuc mung ngay phu nu viet nam',
	            'TinhTrang'=>'0',
	          
        	]);

        
    }
}
