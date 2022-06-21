<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThietBiSanXuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('thiet_bi_san_xuat')->insert([
            'ten' => 'Máy tẩy rửa siêu âm',
            'tenkhongdau' => 'may-tay-rua-sieu-am',
            'hinhanh' => 'upload/thiet-bi-san-xuat/may-tay-rua-sieu-am.png',
        ]);
        DB::table('thiet_bi_san_xuat')->insert([
            'ten' => 'Dây chuyền mạ',
            'tenkhongdau' => 'day-chuyen-ma',
            'hinhanh' => 'upload/thiet-bi-san-xuat/day-chuyen-ma.png',
        ]);
        DB::table('thiet_bi_san_xuat')->insert([
            'ten' => 'Máy nén khí công suất lớn',
            'tenkhongdau' => 'may-nen-khi-cong-suat-lon',
            'hinhanh' => 'upload/thiet-bi-san-xuat/may-nen-khi-cong-suat-lon.png',
        ]);
        DB::table('thiet_bi_san_xuat')->insert([
            'ten' => 'Tủ sấy công suất lớn',
            'tenkhongdau' => 'tu-say-cong-suat-lon',
            'hinhanh' => 'upload/thiet-bi-san-xuat/tu-say-cong-suat-lon.png',
        ]);
        DB::table('thiet_bi_san_xuat')->insert([
            'ten' => 'Thiết bị tách nhựa',
            'tenkhongdau' => 'thiet-bi-tach-nhua',
            'hinhanh' => 'upload/thiet-bi-san-xuat/thiet-bi-tach-nhua.png',
        ]);
    }
}
