<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PhanQuyenTableSeeder::class);
         $this->call(LoaiNhanVienTableSeeder::class);
    	$this->call(UsersTableSeeder::class);
        $this->call(MembersSeeder::class);
        $this->call(ChuongTrinhKhuyenMaiTableSeeder::class);
        $this->call(HinhThucThanhToanTableSeeder::class);
         $this->call(TinTucTableSeeder::class);
        $this->call(NhaCungCapTableSeeder::class);
         $this->call(XuatXuTableSeeder::class);
        $this->call(LoaiDonViTinhTableSeeder::class);
        $this->call(LoaiKhoiLuongTinhTableSeeder::class);
        $this->call(ThuongHieuTableSeeder::class);
        $this->call(LoaiMatHangTableSeeder::class);
        $this->call(GiaShipTableSeeder::class);
        $this->call(MatHangTableSeeder::class);
        $this->call(QuyDoiXuTableSeeder::class);
        $this->call(PhieuDHKHTableSeeder::class);
        $this->call(CT_PDHKHTableSeeder::class);
        $this->call(CtyGiaoTableSeeder::class);
        $this->call(GiaoHangTableSeeder::class);
        $this->call(HoaDonTableSeeder::class);
        $this->call(CT_HoaDonTableSeeder::class);
       $this->call(CT_KhuyenMaiTableSeeder::class);
        $this->call(PhieuDH_NCCTableSeeder::class);
        $this->call(CT_PD_NCCTableSeeder::class);
        $this->call(DoiTraHangTableSeeder::class);
         $this->call(CT_DoiTraTableSeeder::class);
        $this->call(SlideshowTableSeeder::class);
         $this->call(TonKhoTableSeeder::class); 
        $this->call(GopYTableSeeder::class);
       
       
        
       
    }
}
