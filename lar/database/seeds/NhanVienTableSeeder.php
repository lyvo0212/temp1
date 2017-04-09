<?php

use Illuminate\Database\Seeder;
class NhanVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\NhanVien::create([
        		'id'		=>'1',
	            'id_LoaiNV' =>  '1', 
	            'TenNV'=>'Bích Thanh', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nam',          
	            'DiaChi'=>'812 Đường số 3, Q. Tân Bình, TP.HCM',
	            'DT'=>'099901242',
	            'Email'=>'thanhqq@gmail.com',
	            'ChucVu'=>'Nhân Viên',
	            'TinhTrang'=>0,
        	]);
        App\NhanVien::create([
        		'id'		=>'2',
	            'id_LoaiNV' =>  '2', 
	            'TenNV'=>'Tiến Thành', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nam',          
	            'DiaChi'=>'67 Đường số 18, Q. Tân Bình, TP.HCM',
	            'DT'=>'099856142',
	            'Email'=>'TThanhqq@gmail.com',
	            'ChucVu'=>'Nhân Viên',
	            'TinhTrang'=>0,
        	]);
        App\NhanVien::create([
        		'id'		=>'3',
	            'id_LoaiNV' =>'3', 
	            'TenNV'=>'Nhật Lài', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',          
	            'DiaChi'=>'86 Đội Cấn, Q. Thủ Đức, Tp.HCM',
	            'DT'=>'091251256',
	            'Email'=>'NhatLaiqq@gmail.com',
	            'ChucVu'=>'Nhân Viên',
	            'TinhTrang'=>0,
        	]);
        App\NhanVien::create([
        		'id'		=>'4',
	            'id_LoaiNV' =>  '3', 
	            'TenNV'=>'Bích Phương', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',          
	            'DiaChi'=>'23 Lê Minh Sơn, Tp. Điện Biên, Sơn La',
	            'DT'=>'098124512',
	            'Email'=>'Phuongqq@gmail.com',
	            'ChucVu'=>'Nhân Viên',
	            'TinhTrang'=>0,
        	]);
        App\NhanVien::create([
        		'id'		=>'5',
	            'id_LoaiNV' =>  '1', 
	            'TenNV'=>'Chu Thị Thủy', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ ',          
	            'DiaChi'=>'64 Lê Long Đỉnh, Hải Hưng, Bình Dương ',
	            'DT'=>'091521351',
	            'Email'=>'thuyqq@gmail.com',
	            'ChucVu'=>'Nhân Viên',
	            'TinhTrang'=>0,
        	]);
        	App\NhanVien::create([
        		'id'		=>'6',
	            'id_LoaiNV' => '2', 
	            'TenNV'=>'Hứa Bích Ly', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',          
	            'DiaChi'=>'82 Thành Thái, Q.10, TP.HCM',
	            'DT'=>'090248424',
	            'Email'=>'Lyqq@gmail.com',
	            'ChucVu'=>'Nhân Viên',
	            'TinhTrang'=>0,
        	]);
        	App\NhanVien::create([
        		'id'		=>'7',
	            'id_LoaiNV' =>  '3', 
	            'TenNV'=>'Bích Dao', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nữ',          
	            'DiaChi'=>'22 Bình Nhưỡng, Phú hội, Nam Thành',
	            'DT'=>'090151252',
	            'Email'=>'Daoqq@gmail.com',
	            'ChucVu'=>'Nhân Viên',
	            'TinhTrang'=>0,
        	]);
        	App\NhanVien::create([
        		'id'		=>'8',
	            'id_LoaiNV' =>  '1', 
	            'TenNV'=>'Kiếm Thành', 
	            'MatKhau'=>bcrypt('123456'),
	            'GioiTinh'=>'Nam',          
	            'DiaChi'=>'98 Nam Thành Đô, Hà Thành',
	            'DT'=>'097889123',
	            'Email'=>'kthanhqq@gmail.com',
	            'ChucVu'=>'Nhân Viên',
	            'TinhTrang'=>0,
        	]);
    }
}
