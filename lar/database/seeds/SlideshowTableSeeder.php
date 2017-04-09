<?php

use Illuminate\Database\Seeder;
use App\Slideshow;
class SlideshowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Slideshow::create(
        	['TenSlide'=>'slide1',
        	'MoTa'=>'<h3 style="color: rgb(251, 105, 135);font-family: sans-serif;font-style: italic;">Eternal </h3>
											<h4 ></h4>
											<h4 style="color: #4c4a4a; padding-left: 0px;font-size: 40px;padding-top: 50px; font-family: sans-serif;font-style: italic">Thương hiệu</h4>
											<h6 style="color:#4c4a4a;font-style : italic;padding-left: 90px"> mỹ phẩm uy tín</h6>
										',
			'TinhTrang'=>'1',
			 ]);
         Slideshow::create(
        	['TenSlide'=>'slide2',
        	'MoTa'=>'<h3 style="color: rgb(251, 105, 135);font-family: sans-serif;font-style: italic;">Eternal</h3>
											<h4 ></h4>
											<h4 style="color: #4c4a4a;font-size: 40px;padding-top: 50px;padding-left: 30px;font-family: sans-serif;font-style: italic">Nhà phân phối mỹ phẩm chính hãng</h4>
								
											<h6 style="color: #4c4a4a;padding-left: 30px;font-style: italic">Luôn cập nhật xu hướng mới nhất</h6>
										',
			'TinhTrang'=>'1',
			 ]); 
			 Slideshow::create(
        	['TenSlide'=>'slide3',
        	'MoTa'=>'<h3 style="color: rgb(251, 105, 135);font-family: sans-serif;font-style: italic;">Eternal</h3>
											<h4 ></h4>
											<h4 style="color: #4c4a4a;font-size: 40px;padding-top: 50px;font-family: sans-serif;font-style: italic;padding-left: 40px">Sản phẩm hot nhất </h4>
											<h6 style="color: #4c4a4a;font-style: italic;padding-left: 30px">Cho mùa yêu</h6>
										',
			'TinhTrang'=>'1',
			 ]);
    }
}
