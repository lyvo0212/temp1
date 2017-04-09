<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\User::create([
        //     'name'      => 'admin',
        //     'email'     => 'admin@gmail.com',
        //     'password'  => bcrypt('admin'),
        //     'status'    => '1',
        // ]);
         //Thêm dữ liệu vào bảng group
        DB::table('users')->insert([
        	'id' => 1,
            'name' => 'Ly',
            'id_LoaiNV'=>'1',
            'GioiTinh' =>  'Nữ',
            'NgaySinh' =>'1995/12/02',
            'email' => 'lyvo0212@gmail.com',
            'password' => bcrypt('123456'),
            'DiaChi'=>'09 le hong phong',
            'DT'=>'0976655555',
            'ChucVu'=>'admin',
            'status'=>'1',
        ]);	
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Thuyet',
            'id_LoaiNV'=>'2',
            'GioiTinh' =>'Nam',
            'NgaySinh' =>'1995/10/02',
            'email' => 'thuyet@gmail.com',
            'password' => bcrypt('123456'), 
            'Diachi'=>'09 le hong phong',
            'DT'=>'0976655555',
            'ChucVu'=>'Khách hàng',
            'TongXu'=>'5',
            'status'=>'0',
        ]); 
    
    }
}
