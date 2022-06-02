<?php

use Illuminate\Database\Seeder;
use App\PriceDiscountTable;

class PriceDiscountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PriceDiscountTable::create([
            'RANGEFROM' => '1',
            'RANGETO' => '5',
            '_1COLOR' => '40',
            '_2COLOR' => '40',
            '_3COLOR' => '40',
            '_4COLOR' => '40',
            '_5COLOR' => '40',
            '_6COLOR' => '40',
            '_7COLOR' => '40',
            '_8COLOR' => '40',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '6',
            'RANGETO' => '11',
            '_1COLOR' => '40',
            '_2COLOR' => '40',
            '_3COLOR' => '40',
            '_4COLOR' => '40',
            '_5COLOR' => '40',
            '_6COLOR' => '40',
            '_7COLOR' => '40',
            '_8COLOR' => '40',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '12',
            'RANGETO' => '24',
            '_1COLOR' => '50',
            '_2COLOR' => '50',
            '_3COLOR' => '45',
            '_4COLOR' => '45',
            '_5COLOR' => '50',
            '_6COLOR' => '50',
            '_7COLOR' => '50',
            '_8COLOR' => '50',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '25',
            'RANGETO' => '36',
            '_1COLOR' => '60',
            '_2COLOR' => '50',
            '_3COLOR' => '45',
            '_4COLOR' => '38',
            '_5COLOR' => '50',
            '_6COLOR' => '50',
            '_7COLOR' => '50',
            '_8COLOR' => '50',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '37',
            'RANGETO' => '48',
            '_1COLOR' => '62',
            '_2COLOR' => '50',
            '_3COLOR' => '45',
            '_4COLOR' => '38',
            '_5COLOR' => '40',
            '_6COLOR' => '50',
            '_7COLOR' => '50',
            '_8COLOR' => '50',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '49',
            'RANGETO' => '71',
            '_1COLOR' => '68',
            '_2COLOR' => '50',
            '_3COLOR' => '45',
            '_4COLOR' => '38',
            '_5COLOR' => '32',
            '_6COLOR' => '35',
            '_7COLOR' => '40',
            '_8COLOR' => '30',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '72',
            'RANGETO' => '144',
            '_1COLOR' => '68',
            '_2COLOR' => '50',
            '_3COLOR' => '50',
            '_4COLOR' => '38',
            '_5COLOR' => '35',
            '_6COLOR' => '35',
            '_7COLOR' => '30',
            '_8COLOR' => '20',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '145',
            'RANGETO' => '300',
            '_1COLOR' => '70',
            '_2COLOR' => '50',
            '_3COLOR' => '40',
            '_4COLOR' => '38',
            '_5COLOR' => '35',
            '_6COLOR' => '35',
            '_7COLOR' => '25',
            '_8COLOR' => '20',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '301',
            'RANGETO' => '500',
            '_1COLOR' => '70',
            '_2COLOR' => '50',
            '_3COLOR' => '40',
            '_4COLOR' => '35',
            '_5COLOR' => '35',
            '_6COLOR' => '35',
            '_7COLOR' => '30',
            '_8COLOR' => '25',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '501',
            'RANGETO' => '700',
            '_1COLOR' => '70',
            '_2COLOR' => '50',
            '_3COLOR' => '47',
            '_4COLOR' => '35',
            '_5COLOR' => '31',
            '_6COLOR' => '35',
            '_7COLOR' => '25',
            '_8COLOR' => '20',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceDiscountTable::create([
            'RANGEFROM' => '701',
            'RANGETO' => '100001',
            '_1COLOR' => '70',
            '_2COLOR' => '50',
            '_3COLOR' => '38',
            '_4COLOR' => '30',
            '_5COLOR' => '30',
            '_6COLOR' => '28',
            '_7COLOR' => '30',
            '_8COLOR' => '20',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);  
    }
}
