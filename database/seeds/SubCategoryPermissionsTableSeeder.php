<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class SubCategoryPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SubCategories
        Permission::create([
            'name'          => 'SubCategories List',
            'slug'          => 'subcategories.index',
            'description'   => 'List of the subcategories',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'SubCategory Details',
            'slug'          => 'subcategories.show',
            'description'   => 'View subcategories Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit SubCategory',
            'slug'          => 'subcategories.edit',
            'description'   => 'Edit subcategories informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete SubCategory',
            'slug'          => 'subcategories.destroy',
            'description'   => 'Delete subcategories from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create SubCategory',
            'slug'          => 'subcategories.create',
            'description'   => 'Add subcategories to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
