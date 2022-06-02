<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class BrandPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Brands
         Permission::create([
            'name'          => 'Brands List',
            'slug'          => 'brands.index',
            'description'   => 'List of the brands',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Brand Details',
            'slug'          => 'brands.show',
            'description'   => 'View brands Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Brand',
            'slug'          => 'brands.edit',
            'description'   => 'Edit brands informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Brand',
            'slug'          => 'brands.destroy',
            'description'   => 'Delete brands from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Brand',
            'slug'          => 'brands.create',
            'description'   => 'Add brands to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
