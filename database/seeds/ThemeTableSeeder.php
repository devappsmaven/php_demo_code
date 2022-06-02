<?php

use Illuminate\Database\Seeder;
use App\Theme;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Theme
        Theme::create([
            'name' => 'subas',
            'status' => 'Enable',
            'color' => 'designstudio',
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('themes_colors')->insert([
            'theme_id' => 1,
            'color_id' => 4,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('themes_colors')->insert([
            'theme_id' => 1,
            'color_id' => 14,
            'active' => 0,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('themes_colors')->insert([
            'theme_id' => 1,
            'color_id' => 17,
            'active' => 0,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('themes_colors')->insert([
            'theme_id' => 1,
            'color_id' => 31,
            'active' => 0,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        //Theme
        Theme::create([
            'name' => 'eshopper',
            'status' => 'Enable',
            'color' => 'blue',
            'active' => 0,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('themes_colors')->insert([
            'theme_id' => 2,
            'color_id' => 4,
            'active' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('themes_colors')->insert([
            'theme_id' => 2,
            'color_id' => 14,
            'active' => 0,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('themes_colors')->insert([
            'theme_id' => 2,
            'color_id' => 17,
            'active' => 0,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('themes_colors')->insert([
            'theme_id' => 2,
            'color_id' => 31,
            'active' => 0,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);
    }
}
