<?php

use Illuminate\Database\Seeder;
use App\Size;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sizes
        Size::create([
            'name'          => 'NB',
            'orden'          => 1,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
        
        Size::create([
            'name'          => '0M',
            'orden'          => 2,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '3M',
            'orden'          => 3,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '6M',
            'orden'          => 4,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '12M',
            'orden'          => 5,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '18M',
            'orden'          => 6,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '24M',
            'orden'          => 7,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '2T',
            'orden'          => 8,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '3T',
            'orden'          => 9,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '4T',
            'orden'          => 10,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '5T',
            'orden'          => 11,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '5_6',
            'orden'          => 12,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '6T',
            'orden'          => 13,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '7',
            'orden'          => 14,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'YXS',
            'orden'          => 15,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'YS',
            'orden'          => 16,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'YM',
            'orden'          => 17,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'YL',
            'orden'          => 18,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'YXL',
            'orden'          => 19,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'XS',
            'orden'          => 20,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'S',
            'orden'          => 21,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'M',
            'orden'          => 22,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'L',
            'orden'          => 23,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'XL',
            'orden'          => 24,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '2XL',
            'orden'          => 25,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '3XL',
            'orden'          => 26,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '4XL',
            'orden'          => 27,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => '5XL',
            'orden'          => 28,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Size::create([
            'name'          => 'ONE_SIZE',
            'orden'          => 29,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
