<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThongTinCtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('thong_tin_cty')->insert([
            'ten_cty' => 'Công ty TNHH Việt Tiến Vina',
            'sdt' => '0965.952.556',
            'email' => 'viettienvina@gmail.com',
            'dia_chi' => 'Thôn Hà Liễu, Xã Phương Liễu, Huyện Quế Võ, Tỉnh Bắc Ninh, Việt Nam',
            'mo_ta' => 'Chúng tôi chuyên gia công tách nhựa, tẩy sơn, mạ linh kiện điện tử.
            Cho thuê xưởng, môi giới thuê xưởng. 
            Gia công linh kiện theo đơn hàng và cung cấp một số mặt hàng như: túi nilon, màng xốp đóng hàng.'
        ]);
    }
}
