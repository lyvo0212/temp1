<?php

use Illuminate\Database\Seeder;
class KhachHangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                App\KhachHang::create([
        		'id'		=>'1',
	            'TenKH' =>  'Chí Linh', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',
	            'NgaySinh'=>'1978/06/05',          
	            'DienThoai'=>'091123121',
	            'DiaChi'=>'374 Đường số 12, Q. Tân Bình, TP.HCM',
	            'Email'=>'Linhqq@gmail.com',
	            'TongXu'=>0,
	            'TinhTrang'=>0,
        	]);

                App\KhachHang::create([
        		'id'		=>'2',
	            'TenKH' =>  'Kiều Anh', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',
	            'NgaySinh'=>'1992/07/03',          
	            'DienThoai'=>'091128143',
	            'DiaChi'=>'653 Đường số 15, Q. Tân Bình, TP.HCM',
	            'Email'=>'Kanhqq@gmail.com',
	            'TongXu'=>0,
	            'TinhTrang'=>0,
        	]);

                App\KhachHang::create([
        		'id'		=>'3',
	            'TenKH' =>  'Phạm Thị Anh Thư', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',
	            'NgaySinh'=>'1995/03/20',          
	            'DienThoai'=>'099671221',
	            'DiaChi'=>'925 Đường Lê Vam, Q. Tân Phú, TP.HCM',
	            'Email'=>'Athuqq@gmail.com',
	            'TongXu'=>0,
	            'TinhTrang'=>0,
        	]);

                App\KhachHang::create([
        		'id'		=>'4',
	            'TenKH' =>  'Vân Hugo', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',
	            'NgaySinh'=>'1986/09/04',          
	            'DienThoai'=>'091182471',
	            'DiaChi'=>'43 Đường số 27, Q. Tân Bình, TP.HCM',
	            'Email'=>'Vanqq@gmail.com',
	            'TongXu'=>0,
	            'TinhTrang'=>0,
        	]);

                App\KhachHang::create([
        		'id'		=>'5',
	            'TenKH' =>  'Hồng Loan', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',
	            'NgaySinh'=>'2002/01/06',          
	            'DienThoai'=>'09105814',
	            'DiaChi'=>'835 Đường số 12, Q. Tân Bình, TP.HCM',
	            'Email'=>'Loanqq@gmail.com',
	            'TongXu'=>0,
	            'TinhTrang'=>0,
        	]);

                App\KhachHang::create([
        		'id'		=>'6',
	            'TenKH' =>  'Cao Thị Lý', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',
	            'NgaySinh'=>'1999/02/08',          
	            'DienThoai'=>'091819323',
	            'DiaChi'=>'634 Đường số 5, Q. Tân Bình, TP.HCM',
	            'Email'=>'Lyqq@gmail.com',
	            'TongXu'=>0,
	            'TinhTrang'=>0,
        	]);
    }
}
