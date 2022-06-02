<?php

use Illuminate\Database\Seeder;
use App\Side;

class SideTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sides
        Side::create([
            'name'          => 'Front Side',
            'slug'          => 'front-side',
            'order'          => 1,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Side::create([
            'name'          => 'Right Side',
            'slug'          => 'right-side',
            'order'          => 1,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Side::create([
            'name'          => 'Back Side',
            'slug'          => 'back-side',
            'order'          => 1,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Side::create([
            'name'          => 'Left Side',
            'slug'          => 'left-side',
            'order'          => 1,
            'status'   => 'Enable',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
