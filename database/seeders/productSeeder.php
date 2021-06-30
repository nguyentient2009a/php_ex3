<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'name' => 'Xe oto điều khiển từ xa ',
                'price' => 240000
            ],
            [
                'name' => 'Máy Xúc Điều Khiển Từ Xa Tần Số 2.5G',
                'price' => 185000
            ],
            [
                'name' => 'Xe Ben Điều Khiển Từ Xa Chạy Bánh Xích',
                'price' => 280000
            ],
            [
                'name' => 'Đàn Chạy Pin Hình Con Cua',
                'price' => 125000
            ],
            [
                'name' => 'BẢNG GHÉP HÌNH CHO BÉ',
                'price' => 99000
            ],
            [
                'name' => 'BÉ ĐI XE ĐẠP CÓ NHẠC BÁNH XE PHÁT SÁNG',
                'price' => 250000
            ],
            [
                'name' => 'Siêu Xe Biến Hình Robo Tự Động',
                'price' => 85000
            ],
            [
                'name' => 'Lắp Ráp Xếp Hình Mô Hình Xe Tăng Quân Đội',
                'price' => 235000
            ],
            [
                'name' => 'Lều Quây Banh Cho Bé',
                'price' => 150000
            ],
            [
                'name' => 'Bộ Trò chơi Đâm Hải Tặc 1 thùng bia',
                'price' => 35000
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
