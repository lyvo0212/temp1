<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\LoaiMatHang;
class LoaiMatHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Root
        $productCate1 = LoaiMatHang::where('id', 1)->first();$productCate1->makeRoot();

        // Item 2.1
        $productCate2 = LoaiMatHang::create(['TenLoai' => 'Trang điểm', 'BiDanh' => 'trang-diem']);
        $productCate2->makeChildOf($productCate1);

            // Item 2.1.1
        $productCate21 = LoaiMatHang::create(['TenLoai' => 'Trang điểm mặt', 'BiDanh' => 'trang-diem-mat']);
        $productCate21->makeChildOf($productCate2);

        	//Item 2.1.1.1
        $productCate211 = LoaiMatHang::create(['TenLoai' => 'BB CC Cushion', 'BiDanh' => 'bb-cc-cushion']);
		$productCate211->makeChildOf($productCate21);
		 $productCate212 = LoaiMatHang::create(['TenLoai' => 'Che khuyết điểm', 'BiDanh' => 'che-khuyet-diem']);
		$productCate212->makeChildOf($productCate21);
		 $productCate213 = LoaiMatHang::create(['TenLoai' => 'Kem lót', 'BiDanh' => 'kem-lot']);
		$productCate213->makeChildOf($productCate21);
		$productCate214 = LoaiMatHang::create(['TenLoai' => 'Má hồng', 'BiDanh' => 'ma-hong']);
		$productCate214->makeChildOf($productCate21);
		$productCate215 = LoaiMatHang::create(['TenLoai' => 'Phấn phủ', 'BiDanh' => 'phan-phu']);
		$productCate215->makeChildOf($productCate21);
        $productCate216 = LoaiMatHang::create(['TenLoai' => 'Tạo khối', 'BiDanh' => 'tao-khoi']);
		$productCate216->makeChildOf($productCate21);
        $productCate217 = LoaiMatHang::create(['TenLoai' => 'Xịt khóa nền', 'BiDanh' => 'xit-khoa-nen']);
		$productCate217->makeChildOf($productCate21);
        
            // Item 2.1.2
        $productCate22 = LoaiMatHang::create(['TenLoai' => 'Trang điểm mắt', 'BiDanh' => 'trang-diem-doi-mat']);
        $productCate22->makeChildOf($productCate2);

        	//Item 2.1.2.1
        $productCate221 = LoaiMatHang::create(['TenLoai' => 'Kẻ lông mày', 'BiDanh' => 'ke-long-may']);
		$productCate221->makeChildOf($productCate22);
		$productCate222 = LoaiMatHang::create(['TenLoai' => 'Kẻ mắt', 'BiDanh' => 'ke-mat']);
		$productCate222->makeChildOf($productCate22);
		$productCate223 = LoaiMatHang::create(['TenLoai' => 'Mascara', 'BiDanh' => 'mascara']);
		$productCate223->makeChildOf($productCate22);
		$productCate224 = LoaiMatHang::create(['TenLoai' => 'Màu mắt', 'BiDanh' => 'mau-mat']);
		$productCate224->makeChildOf($productCate22);

            // Item 2.1.3
        $productCate23 = LoaiMatHang::create(['TenLoai' => 'Trang điểm môi', 'BiDanh' => 'cham-soc-moi']);
        $productCate23->makeChildOf($productCate2);

        	//Item 2.1.3.1
        $productCate231 = LoaiMatHang::create(['TenLoai' => 'Khóa màu môi', 'BiDanh' => 'khoa-mau-moi']);
		$productCate231->makeChildOf($productCate23);
		$productCate232 = LoaiMatHang::create(['TenLoai' => 'Son môi', 'BiDanh' => 'son-moi']);
		$productCate232->makeChildOf($productCate23);

        // Item 2.2
        $productCate3 = LoaiMatHang::create(['TenLoai' => 'Chăm sóc da', 'BiDanh' => 'cham-soc-da']);
        $productCate3->makeChildOf($productCate1);

            // Item 2.2.1
        $productCate31 = LoaiMatHang::create(['TenLoai' => 'Làm sạch da mặt', 'BiDanh' => 'lam-sach-da-mat']);
        $productCate31->makeChildOf($productCate3);

         // Item 2.2.1.1
        $productCate311 = LoaiMatHang::create(['TenLoai' => 'Sửa rửa mặt', 'BiDanh' => 'sua-rua-mat']);
        $productCate311->makeChildOf($productCate31);
        $productCate312 = LoaiMatHang::create(['TenLoai' => 'Tẩy tế bào chết mặt', 'BiDanh' => 'tay-te-bao-chet-mat']);
        $productCate312->makeChildOf($productCate31);
        $productCate313 = LoaiMatHang::create(['TenLoai' => 'Tẩy trang da mặt', 'BiDanh' => 'tay-trang-da-mat']);
        $productCate313->makeChildOf($productCate31);

            // Item 2.2.2
        $productCate32 = LoaiMatHang::create(['TenLoai' => 'Chăm sóc da mặt', 'BiDanh' => 'cham-soc-da-mat']);
        $productCate32->makeChildOf($productCate3);

        	//Item 2.2.2.1
        $productCate321 = LoaiMatHang::create(['TenLoai' => 'Dưỡng da mặt', 'BiDanh' => 'duong-da-mat']);
        $productCate321->makeChildOf($productCate32);
        $productCate322 = LoaiMatHang::create(['TenLoai' => 'Kem chống nắng', 'BiDanh' => 'kem-chong-nang']);
        $productCate322->makeChildOf($productCate32);
        $productCate323 = LoaiMatHang::create(['TenLoai' => 'Kem dưỡng da', 'BiDanh' => 'kem-duong-da']);
        $productCate323->makeChildOf($productCate32);
        $productCate324 = LoaiMatHang::create(['TenLoai' => 'Các loại mặt nạ', 'BiDanh' => 'cac-loai-mat-na']);
        $productCate324->makeChildOf($productCate32);

            // Item 2.2.3
        $productCate33 = LoaiMatHang::create(['TenLoai' => 'Mặt nạ', 'BiDanh' => 'mat-na']);
        $productCate33->makeChildOf($productCate3);
           
           	//Item 2.2.3.1
        $productCate331 = LoaiMatHang::create(['TenLoai' => 'Bột', 'BiDanh' => 'bot']);
        $productCate331->makeChildOf($productCate33);
        $productCate332 = LoaiMatHang::create(['TenLoai' => 'Các loại mặt nạ', 'BiDanh' => 'cac-loai-mat-na']);
        $productCate332->makeChildOf($productCate33);

        // Item 2.3
        $productCate4 = LoaiMatHang::create(['TenLoai' => 'Nước hoa', 'BiDanh' => 'nuoc-hoa']);
        $productCate4->makeChildOf($productCate1);

            // Item 2.3.1
        $productCate41 = LoaiMatHang::create(['TenLoai' => 'Nước hoa nam', 'BiDanh' => 'nuoc-hoa-nam']);
        $productCate41->makeChildOf($productCate4);
            // Item 2.3.2
        $productCate42 = LoaiMatHang::create(['TenLoai' => 'Nước hoa nữ', 'BiDanh' => 'nuoc-hoa-nu']);
        $productCate42->makeChildOf($productCate4);

       
    }
}
