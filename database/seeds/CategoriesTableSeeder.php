<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Athletic',
            'status' => 'Enable',
            'description' => 'Athletic',
            'type' => 'Product',
            'slug' => str_slug('Athletic'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Bags',
            'status' => 'Enable',
            'description' => 'Bags',
            'type' => 'Product',
            'slug' => str_slug('Bags'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'FIT',
            'status' => 'Enable',
            'description' => 'FIT',
            'type' => 'Product',
            'slug' => str_slug('FIT'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Ladies',
            'status' => 'Enable',
            'description' => 'Ladies',
            'type' => 'Product',
            'slug' => str_slug('Ladies'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'No Minimum',
            'status' => 'Enable',
            'description' => 'No Minimum',
            'type' => 'Product',
            'slug' => str_slug('No Minimum'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Polos',
            'status' => 'Enable',
            'description' => 'Polos',
            'type' => 'Product',
            'slug' => str_slug('Polos'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Price',
            'status' => 'Enable',
            'description' => 'Price',
            'type' => 'Product',
            'slug' => str_slug('Price'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Specialty Sizes',
            'status' => 'Enable',
            'description' => 'Specialty Sizes',
            'type' => 'Product',
            'slug' => str_slug('Specialty Sizes'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'T-shirts',
            'status' => 'Enable',
            'description' => 'T-shirts',
            'type' => 'Product',
            'slug' => str_slug('T-shirts'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Unisex-Mens',
            'status' => 'Enable',
            'description' => 'Unisex-Mens',
            'type' => 'Product',
            'slug' => str_slug('Unisex-Mens'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Work Clothes',
            'status' => 'Enable',
            'description' => 'Work Clothes',
            'type' => 'Product',
            'slug' => str_slug('Work Clothes'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Youth',
            'status' => 'Enable',
            'description' => 'Youth',
            'type' => 'Product',
            'slug' => str_slug('Youth'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Bussines',
            'status' => 'Enable',
            'description' => 'Business',
            'type' => 'Template',
            'slug' => str_slug('Business'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'KatieL',
            'status' => 'Enable',
            'description' => 'KatieL',
            'type' => 'Designstudio',
            'slug' => str_slug('KatieL'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Guest000092',
            'status' => 'Enable',
            'description' => 'Guest000092',
            'type' => 'Designstudio',
            'slug' => str_slug('Guest000092'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Laravel',
            'status' => 'Enable',
            'description' => 'Laravel Framework',
            'type' => 'Post',
            'slug' => str_slug('Laravel'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Vuejs',
            'status' => 'Disable',
            'description' => 'Vuejs Framework',
            'type' => 'Post',
            'slug' => str_slug('Vuejs'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'Houston',
            'status' => 'Enable',
            'description' => 'Houston',
            'type' => 'Gallery',
            'slug' => str_slug('Houston'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => 'T-shirt',
            'status' => 'Enable',
            'description' => 'T-shirt',
            'type' => 'Gallery',
            'slug' => str_slug('T-shirt'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Category::create([
            'name' => '2019',
            'status' => 'Enable',
            'description' => '2019',
            'type' => 'Gallery',
            'slug' => str_slug('2019'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
