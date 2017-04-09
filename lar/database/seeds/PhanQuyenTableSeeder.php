<?php

use Illuminate\Database\Seeder;

class PhanQuyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        App\PhanQuyen::create([
            'TenQuyen'      => 'admin',
            'MoTa'     => 'Them, xoa sua nguoi dung',
           
        ]);
        App\PhanQuyen::create([
            'TenQuyen'      => 'index',
            'MoTa'     => 'xem trang san pham',
           
        ]);
        App\PhanQuyen::create([
            'TenQuyen'      => 'PhanQuyen',
            'MoTa'     => 'phan quyên',
           
        ]);
    }
}
