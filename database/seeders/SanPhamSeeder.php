<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('san_pham')->insert([
            'ten' => 'Linh kiện Camera trước và sau tẩy sơn',
            'tenkhongdau' => 'linh-kien-camera-truoc-va-sau-tay-son',
            'hinhanh' => 'upload/san-pham/linh-kien-camera-truoc-va-sau-tay-son.png',
            'danhmuc' => 1
        ]);
        DB::table('san_pham')->insert([
            'ten' => 'Linh kiện máy tính bảng trước và sau tẩy sơn',
            'tenkhongdau' => 'linh-kien-may-tinh-bang-truoc-va-sau-tay-son',
            'hinhanh' => 'upload/san-pham/linh-kien-may-tinh-bang-truoc-va-sau-tay-son.png',
            'danhmuc' => 1
        ]);

        DB::table('san_pham')->insert([
            'ten' => 'Vỏ điện thoại di động trước và sau tẩy sơn',
            'tenkhongdau' => 'vo-dien-thoai-di-dong-truoc-va-sau-tay-son',
            'hinhanh' => 'upload/san-pham/vo-dien-thoai-di-dong-truoc-va-sau-tay-son.png',
            'danhmuc' => 1
        ]);

        DB::table('san_pham')->insert([
            'ten' => 'Sản phẩm tách nhựa linh kiện điện thoại',
            'tenkhongdau' => 'may-tay-rua-sieu-am',
            'hinhanh' => 'upload/san-pham/san-pham-tach-nhua-linh-kien-dien-thoai.png',
            'danhmuc' => 2
        ]);
        DB::table('san_pham')->insert([
            'ten' => 'Sản phẩm in 1',
            'tenkhongdau' => 'san-pham-in-1',
            'hinhanh' => 'upload/san-pham/san-pham-in-1.png',
            'danhmuc' => 3
        ]);
        DB::table('san_pham')->insert([
            'ten' => 'Sản phẩm in 2',
            'tenkhongdau' => 'san-pham-in-2',
            'hinhanh' => 'upload/san-pham/san-pham-in-2.png',
            'danhmuc' => 3
        ]);
        DB::table('san_pham')->insert([
            'ten' => 'Sản phẩm in 3',
            'tenkhongdau' => 'san-pham-in-3',
            'hinhanh' => 'upload/san-pham/san-pham-in-3.png',
            'danhmuc' => 3
        ]);
        DB::table('san_pham')->insert([
            'ten' => 'Sản phẩm in 4',
            'tenkhongdau' => 'san-pham-in-4',
            'hinhanh' => 'upload/san-pham/san-pham-in-4.png',
            'danhmuc' => 3
        ]);
        DB::table('san_pham')->insert([
            'ten' => 'Sản phẩm in 5',
            'tenkhongdau' => 'san-pham-in-5',
            'hinhanh' => 'upload/san-pham/san-pham-in-5.png',
            'danhmuc' => 3
        ]);
        DB::table('san_pham')->insert([
            'ten' => 'Gia công linh kiện điện thoại theo đơn hàng',
            'tenkhongdau' => 'gia-cong-linh-kien-dien-thoai-theo-don-hang',
            'hinhanh' => 'upload/san-pham/gia-cong-linh-kien-dien-thoai-theo-don-hang.png',
            'danhmuc' => 4
        ]);


    }
}
