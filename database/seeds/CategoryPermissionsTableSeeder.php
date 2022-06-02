<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class CategoryPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Categories
         Permission::create([
            'name'          => 'Categories List',
            'slug'          => 'categories.index',
            'description'   => 'List of the categories',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Category Details',
            'slug'          => 'categories.show',
            'description'   => 'View categories Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Category',
            'slug'          => 'categories.edit',
            'description'   => 'Edit categories informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Category',
            'slug'          => 'categories.destroy',
            'description'   => 'Delete categories from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Category',
            'slug'          => 'categories.create',
            'description'   => 'Add categories to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
