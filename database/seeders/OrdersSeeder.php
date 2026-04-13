<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Settings;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $order = Order::factory()->create([
            'amount' => 50,
            'status' => 'paid',
            'user_id' => 1
        ]);

       
    }
}