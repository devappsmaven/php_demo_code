<?php

use Illuminate\Database\Seeder;
use App\Design;
use App\Side;
class DesignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=1; $i < 1000; $i++) 
        {
            $item = mt_rand(1,4);
            $size= mt_rand(1,29);
            $number_shirts = mt_rand(1,20);
            $selling_price = mt_rand(100,999)/10;
            $total = $number_shirts*$selling_price;
            $statuslist = array('Created','Waiting Approval','Rejected','Approved');
            if($item == 1)
            {
                //designstudio
                Design::create([
                    'title' => 'KatieL_bachelorette',
                    'filename' => 'KatieL_bachelorette.json',
                    'user_id' => mt_rand(6,50),
                    'selling_price' => '0.00',
                    'number_shirts' => $number_shirts,
                    'price_per_shirt' => $selling_price,
                    'total' => $total,
                    'comment' => '',
                    'status' => $statuslist[mt_rand(0,3)],
                    'type' => 'Designstudio',
                    'product_id' => mt_rand(1,6),
                    'category_id' => '14',
                    'subcategory_id' => '33',
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
                ]);

                
                Side::create([
                    'name' => 'front',
                    'filename' => 'KatieL_bachelorette.png',
                    'image' => 'designs/designstudio/KatieL/KatieL_bachelorette/KatieL_bachelorette_front.png',
                    'svg' => 'designs/designstudio/KatieL/KatieL_bachelorette/KatieL_bachelorette_front.svg',
                    'json' => 'designs/designstudio/KatieL/KatieL_bachelorette/KatieL_bachelorette_front.json',
                    'empty' => 0,
                    'design_id' => $i,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
                ]);

                $quantity = mt_rand(1,20);
                $price = mt_rand(100,999)/10;
                $ammount = $quantity*$price;

                DB::table('design_size')->insert([
                    'design_id' => $i,
                    'size_id' => $size,
                    'quantity' => $quantity,
                    'price' => $price,
                    'ammount' => $ammount,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
                ]);

                $quantity = mt_rand(1,20);
                $price = mt_rand(100,999)/10;
                $ammount = $quantity*$price;

                DB::table('design_size')->insert([
                    'design_id' => $i,
                    'size_id' => 23,
                    'quantity' => $quantity,
                    'price' => $price,
                    'ammount' => $ammount,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
                ]);
            }
            else if($item == 2)
            {
                //designstudio
                Design::create([
                    'title' => 'KatieL_bachelorette',
                    'filename' => 'KatieL_bachelorette.json',
                    'user_id' => mt_rand(6,50),
                    'selling_price' => '0.00',
                    'number_shirts' => $number_shirts,
                    'price_per_shirt' => $selling_price,
                    'total' => $total,
                    'comment' => '',
                    'status' => $statuslist[mt_rand(0,3)],
                    'type' => 'Designstudio',
                    'product_id' => mt_rand(1,6),
                    'category_id' => '14',
                    'subcategory_id' => '33',
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
                ]);


                Side::create([
                    'name' => 'front',
                    'filename' => 'KatieL_bachelorette.png',
                    'image' => 'designs/designstudio/KatieL/KatieL_bachelorette/KatieL_bachelorette_front.png',
                    'svg' => 'designs/designstudio/KatieL/KatieL_bachelorette/KatieL_bachelorette_front.svg',
                    'json' => 'designs/designstudio/KatieL/KatieL_bachelorette/KatieL_bachelorette_front.json',
                    'empty' => 0,
                    'design_id' => $i,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
                ]);

                $quantity = mt_rand(1,20);
                $price = mt_rand(100,999)/10;
                $ammount = $quantity*$price;

                DB::table('design_size')->insert([
                    'design_id' => $i,
                    'size_id' => $size,
                    'quantity' => $quantity,
                    'price' => $price,
                    'ammount' => $ammount,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
                ]);

                $quantity = mt_rand(1,20);
                $price = mt_rand(100,999)/10;
                $ammount = $quantity*$price;

                DB::table('design_size')->insert([
                    'design_id' => $i,
                    'size_id' => 23,
                    'quantity' => $quantity,
                    'price' => $price,
                    'ammount' => $ammount,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
                ]);
            }
            else if($item == 3)
            {
                //template
                Design::create([
                    'title' => 'designTemplate_593_000021',
                    'filename' => 'designTemplate_593_000021.json',
                    'user_id' => mt_rand(6,50),
                    'selling_price' => '0.00',
                    'number_shirts' => $number_shirts,
                    'price_per_shirt' => $selling_price,
                    'total' => $total,
                    'comment' => '',
                    'status' => 'In Cart',
                    'type' => 'Template',
                    'product_id' => mt_rand(1,6),
                    'category_id' => '13',
                    'subcategory_id' => '32',
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
                ]);

                $quantity = mt_rand(1,20);
                $price = mt_rand(100,999)/10;
                $ammount = $quantity*$price;

                DB::table('design_size')->insert([
                    'design_id' => $i,
                    'size_id' => $size,
                    'quantity' => $quantity,
                    'price' => $price,
                    'ammount' => $ammount,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
                ]);
            }
            else
            {
                //store
                Design::create([
                    'title' => '000104',
                    'filename' => '000104.json',
                    'user_id' => mt_rand(6,50),
                    'selling_price' => $selling_price,
                    
                    'comment' => '',
                    'status' => $statuslist[mt_rand(0,3)],
                    'type' => 'Store Design',
                    'product_id' => mt_rand(1,6),
                    'category_id' => '13',
                    'subcategory_id' => '32',
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
                ]);

                $quantity = mt_rand(1,20);
                $price = mt_rand(100,999)/10;
                $ammount = $quantity*$price;

                DB::table('design_size')->insert([
                    'design_id' => $i,
                    'size_id' => $size,
                    'quantity' => $quantity,
                    'price' => $price,
                    'ammount' => $ammount,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
                ]);

                $quantity = mt_rand(1,20);
                $price = mt_rand(100,999)/10;
                $ammount = $quantity*$price;

                DB::table('design_size')->insert([
                    'design_id' => $i,
                    'size_id' => 23,
                    'quantity' => $quantity,
                    'price' => $price,
                    'ammount' => $ammount,
                    'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                    'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
                ]);
            }
            
        }

        for ($i=1; $i < 1000; $i++) 
        {
            DB::table('orders_designs')->insert([
                'design_id' => $i,
                'order_id' => mt_rand(1,100),
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
            ]);
        }

    }
}
