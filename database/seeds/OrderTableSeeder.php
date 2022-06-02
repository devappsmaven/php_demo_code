<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i < 500; $i++) 
        {
            $statuslist = array('Created','In Progress','Completed','Shipped','Canceled','Refounded');
            $carrierlist = array('UPS','USPS');
            Order::create([
                'user_id' => '1',
                'customer_id' => mt_rand(6,50),
                'order_number' => mt_rand(1000000,9999999),
                'subtotal' => mt_rand(100,999)/10,
                'discount' => mt_rand(10,99)/10,
                'shipping_cost' => mt_rand(10,99)/10,
                'tax' => mt_rand(10,99)/10,
                'total' => mt_rand(100,9999)/100,
                'shipby' => Carbon\Carbon::now()->subDays(mt_rand(0,1825))->toDateTimeString(),
                'status' => $statuslist[mt_rand(0,5)],
                'tracking_number' => mt_rand(1000000,9999999),
                'carrier' =>  $carrierlist[mt_rand(0,1)],
                'service' => 'PRIORITY',
                'created_at' => Carbon\Carbon::now()->subDays(mt_rand(0,1825))->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->subDays(mt_rand(0,1825))->toDateTimeString(),
            ]);
        }

    }
}
