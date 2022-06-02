<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class ClipartCategoryPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Category Cliparts 
        Permission::create([
            'name'          => 'Category Cliparts Table List',
            'slug'          => 'clipartcategories.index',
            'description'   => 'List of the clipart categories table',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Category Cliparts Table Details',
            'slug'          => 'clipartcategories.show',
            'description'   => 'View clipart categories table Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Category Cliparts Table',
            'slug'          => 'clipartcategories.edit',
            'description'   => 'Edit clipart categories table information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Category Cliparts Table',
            'slug'          => 'clipartcategories.destroy',
            'description'   => 'Delete clipart categories table from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Category Cliparts Table',
            'slug'          => 'clipartcategories.create',
            'description'   => 'Add clipart categories table to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'Generate Category Cliparts Table',
            'slug'          => 'clipartcategories.generate',
            'description'   => 'Generate clipart categories table to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
