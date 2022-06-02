<?php

use Illuminate\Database\Seeder;
use App\PricePersonalizeTable;

class PricePersonalizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PricePersonalizeTable::create([
            'RANGEFROM' => '1',
            'RANGETO' => '5',
            'NAME' => '9',
            'NUMBER' => '8',
            'BOTH' => '16',
            'STROKECOLOR' => '2',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);

        PricePersonalizeTable::create([
            'RANGEFROM' => '6',
            'RANGETO' => '9999999',
            'NAME' => '4',
            'NUMBER' => '3',
            'BOTH' => '6',
            'STROKECOLOR' => '2',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
    }
}
