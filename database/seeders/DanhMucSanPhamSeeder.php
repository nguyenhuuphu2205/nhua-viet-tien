<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danh_muc_san_pham')->insert([
            'id' => 1,
            'ten' => 'Sản phẩm tẩy sơn',
            'tenkhongdau' => 'san-pham-tay-son'
        ]);
        DB::table('danh_muc_san_pham')->insert([
            'id' => 2,
            'ten' => 'Sản phẩm tách nhựa',
            'tenkhongdau' => 'san-pham-tach-nhua'
        ]);
        DB::table('danh_muc_san_pham')->insert([
            'id' => 3,
            'ten' => 'Sản phẩm in',
            'tenkhongdau' => 'san-pham-in'
        ]);
        DB::table('danh_muc_san_pham')->insert([
            'id' => 4,
            'ten' => 'Sản phẩm gia công theo đơn hàng',
            'tenkhongdau' => 'san-pham-gia-cong-theo-don-hang'
        ]);
    }
}
