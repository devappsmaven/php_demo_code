<?php

use Illuminate\Database\Seeder;
use App\SubCategory;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'name' => 'Ladies',
            'status' => 'Enable',
            'category_id' => '1',
            'description' => 'Ladies',
            'slug' => str_slug('Ladies'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Unisex',
            'status' => 'Enable',
            'category_id' => '1',
            'description' => 'Ladies',
            'slug' => str_slug('Unisex'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Youth',
            'status' => 'Enable',
            'category_id' => '1',
            'description' => 'Ladies',
            'slug' => str_slug('Youth'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Drawstrings',
            'status' => 'Enable',
            'category_id' => '2',
            'description' => 'Drawstrings',
            'slug' => str_slug('Drawstrings'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Comfortable',
            'status' => 'Enable',
            'category_id' => '3',
            'description' => 'Comfortable',
            'slug' => str_slug('Comfortable'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Fitted',
            'status' => 'Enable',
            'category_id' => '3',
            'description' => 'Fitted',
            'slug' => str_slug('Fitted'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Ladies Short Sleeve',
            'status' => 'Enable',
            'category_id' => '4',
            'description' => 'Ladies Short Sleeve',
            'slug' => str_slug('Ladies Short Sleeve'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'No Minimum',
            'status' => 'Enable',
            'category_id' => '4',
            'description' => 'No Minimum',
            'slug' => str_slug('No Minimum'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'T Shirts',
            'status' => 'Enable',
            'category_id' => '4',
            'description' => 'T Shirts',
            'slug' => str_slug('T Shirts'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Cotton',
            'status' => 'Enable',
            'category_id' => '6',
            'description' => 'Cotton',
            'slug' => str_slug('Cotton'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Polyester',
            'status' => 'Enable',
            'category_id' => '6',
            'description' => 'Polyester',
            'slug' => str_slug('Polyester'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => '$',
            'status' => 'Enable',
            'category_id' => '7',
            'description' => '$',
            'slug' => str_slug('$'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => '$$',
            'status' => 'Enable',
            'category_id' => '7',
            'description' => '$$',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => '$$$',
            'status' => 'Enable',
            'category_id' => '7',
            'description' => '$$$',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => '2XL & Up',
            'status' => 'Enable',
            'category_id' => '8',
            'description' => '2XL & Up',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => '4XL & Up',
            'status' => 'Enable',
            'category_id' => '8',
            'description' => '2XL & Up',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Athletic',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'Athletic',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Ladies Short Sleeve',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'Ladies Short Sleeve',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Long Sleeve',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'Long Sleeve',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'No Minimum',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'No Minimum',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Pocket',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'Pocket',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Short Sleeve',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'Short Sleeve',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Sleeveless',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'Sleeveless',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Tank Tops',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'Tank Tops',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Youth',
            'status' => 'Enable',
            'category_id' => '9',
            'description' => 'Youth',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Athletic',
            'status' => 'Enable',
            'category_id' => '10',
            'description' => 'Athletic',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Hoodies & Sweatshirts',
            'status' => 'Enable',
            'category_id' => '10',
            'description' => 'Hoodies & Sweatshirts',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'T Shirts',
            'status' => 'Enable',
            'category_id' => '10',
            'description' => 'T Shirts',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Tank Tops',
            'status' => 'Enable',
            'category_id' => '10',
            'description' => 'Tank Tops',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Infants',
            'status' => 'Enable',
            'category_id' => '12',
            'description' => 'Infants',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'T Shirts',
            'status' => 'Enable',
            'category_id' => '12',
            'description' => 'T Shirts',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Auto',
            'status' => 'Enable',
            'category_id' => '13',
            'description' => 'Auto',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'KatieL_bachelorette',
            'status' => 'Enable',
            'category_id' => '14',
            'description' => 'KatieL_bachelorette',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Guest000092_1001',
            'status' => 'Enable',
            'category_id' => '15',
            'description' => 'Guest000092_1001',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


        SubCategory::create([
            'name' => 'Post Category 1',
            'status' => 'Enable',
            'category_id' => '15',
            'description' => 'Post Category',
            'slug' => str_slug('Post Category 1'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Post Category 2',
            'status' => 'Enable',
            'category_id' => '16',
            'description' => 'Post Category',
            'slug' => str_slug('Post Category 2'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Gallery Category 1',
            'status' => 'Enable',
            'category_id' => '17',
            'description' => 'Gallery Category',
            'slug' => str_slug('Gallery Category 1'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        SubCategory::create([
            'name' => 'Gallery Category 2',
            'status' => 'Enable',
            'category_id' => '18',
            'description' => 'Gallery Category',
            'slug' => str_slug('Gallery Category 2'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


    }
}
