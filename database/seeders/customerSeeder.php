<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'name' => 'Tiến',
                'address' => 'Phú Thọ '
            ],
            [
                'name' => 'Nam',
                'address' => 'Hà Nội'
            ],
            [
                'name' => 'Hùng',
                'address' => 'Cần Thơ'
            ],
            [
                'name' => 'Chi',
                'address' => 'Sài Gòn'
            ],
            [
                'name' => 'Hạnh',
                'address' => 'Phú Quốc'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
