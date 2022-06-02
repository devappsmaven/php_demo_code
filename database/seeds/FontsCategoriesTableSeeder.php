<?php

use Illuminate\Database\Seeder;
use App\FontCategory;

class FontsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FontCategory::create([
            'name' => 'Block',
            'status' => 'Enable',
            'slug' => str_slug('Block'),
            'description' => 'Block',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        FontCategory::create([
            'name' => 'Brush',
            'status' => 'Enable',
            'slug' => str_slug('Brush'),
            'description' => 'Brush',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        FontCategory::create([
            'name' => 'Comical',
            'status' => 'Enable',
            'slug' => str_slug('Comical'),
            'description' => 'Comical',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        FontCategory::create([
            'name' => 'Decorative',
            'status' => 'Enable',
            'slug' => str_slug('Decorative'),
            'description' => 'Decorative',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        FontCategory::create([
            'name' => 'Distressed',
            'status' => 'Enable',
            'slug' => str_slug('Distressed'),
            'description' => 'Distressed',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        FontCategory::create([
            'name' => 'Handwriting',
            'status' => 'Enable',
            'slug' => str_slug('Handwriting'),
            'description' => 'Handwriting',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        FontCategory::create([
            'name' => 'Script',
            'status' => 'Enable',
            'slug' => str_slug('Script'),
            'description' => 'Script',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        FontCategory::create([
            'name' => 'Standard',
            'status' => 'Enable',
            'slug' => str_slug('Standard'),
            'description' => 'Standard',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        FontCategory::create([
            'name' => 'Stencil',
            'status' => 'Enable',
            'slug' => str_slug('Stencil'),
            'description' => 'Stencil',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
