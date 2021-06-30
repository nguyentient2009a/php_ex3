<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{

    public function run(){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders_details')->truncate();
        DB::table('orders_details')->insert([
            [
                'orderId' => 2,
                'productId' => 4,
                'quantity' => 1,
                'amount' => 2
            ],
            [
                'orderId' => 5,
                'productId' => 3,
                'quantity' => 1,
                'amount' => 5
            ],
            [
                'orderId' => 6,
                'productId' => 9,
                'quantity' => 3,
                'amount' => 3
            ],
            [
                'orderId' => 7,
                'productId' => 1,
                'quantity' => 4,
                'amount' => 5
            ],
            [
                'orderId' => 3,
                'productId' => 3,
                'quantity' => 2,
                'amount' => 1
            ],
            [
                'orderId' => 9,
                'productId' => 10,
                'quantity' => 3,
                'amount' => 3
            ],
            [
                'orderId' => 8,
                'productId' => 5,
                'quantity' => 2,
                'amount' => 1
            ],
            [
                'orderId' => 1,
                'productId' => 2,
                'quantity' => 1,
                'amount' => 2
            ],
            [
                'orderId' => 10,
                'productId' => 8,
                'quantity' => 4,
                'amount' => 1
            ],
            [
                'orderId' => 4,
                'productId' => 6,
                'quantity' => 5,
                'amount' => 2
            ],
            [
                'orderId' => 2,
                'productId' => 7,
                'quantity' => 2,
                'amount' => 1
            ],
            [
                'orderId' => 5,
                'productId' => 3,
                'quantity' => 4,
                'amount' =>1
            ],
            [
                'orderId' => 5,
                'productId' => 6,
                'quantity' => 2,
                'amount' => 3
            ],
            [
                'orderId' => 6,
                'productId' => 4,
                'quantity' => 2,
                'amount' => 4
            ],
            [
                'orderId' => 7,
                'productId' => 1,
                'quantity' => 5,
                'amount' => 3
            ],
            [
                'orderId' => 2,
                'productId' => 4,
                'quantity' => 1,
                'amount' => 2
            ],
            [
                'orderId' => 5,
                'productId' => 3,
                'quantity' => 1,
                'amount' => 5
            ],
            [
                'orderId' => 6,
                'productId' => 9,
                'quantity' => 3,
                'amount' => 3
            ],
            [
                'orderId' => 7,
                'productId' => 1,
                'quantity' => 4,
                'amount' => 5
            ],
            [
                'orderId' => 3,
                'productId' => 3,
                'quantity' => 2,
                'amount' => 1
            ],
            [
                'orderId' => 9,
                'productId' => 10,
                'quantity' => 3,
                'amount' => 3
            ],
            [
                'orderId' => 8,
                'productId' => 5,
                'quantity' => 2,
                'amount' => 1
            ],
            [
                'orderId' => 1,
                'productId' => 2,
                'quantity' => 1,
                'amount' => 2
            ],
            [
                'orderId' => 10,
                'productId' => 8,
                'quantity' => 4,
                'amount' => 1
            ],
            [
                'orderId' => 4,
                'productId' => 6,
                'quantity' => 5,
                'amount' => 2
            ],
            [
                'orderId' => 2,
                'productId' => 7,
                'quantity' => 2,
                'amount' => 1
            ],
            [
                'orderId' => 5,
                'productId' => 3,
                'quantity' => 4,
                'amount' =>1
            ],
            [
                'orderId' => 5,
                'productId' => 6,
                'quantity' => 2,
                'amount' => 3
            ],
            [
                'orderId' => 6,
                'productId' => 4,
                'quantity' => 2,
                'amount' => 4
            ],
            [
                'orderId' => 7,
                'productId' => 1,
                'quantity' => 5,
                'amount' => 3
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
