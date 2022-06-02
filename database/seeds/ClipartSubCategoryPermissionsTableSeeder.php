<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class ClipartSubCategoryPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SubCategory Cliparts 
        Permission::create([
            'name'          => 'SubCategory Cliparts Table List',
            'slug'          => 'clipartsubcategories.index',
            'description'   => 'List of the clipart subcategories table',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'SubCategory Cliparts Table Details',
            'slug'          => 'clipartsubcategories.show',
            'description'   => 'View clipart subcategories table Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit SubCategory Cliparts Table',
            'slug'          => 'clipartsubcategories.edit',
            'description'   => 'Edit clipart subcategories table information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete SubCategory Cliparts Table',
            'slug'          => 'clipartsubcategories.destroy',
            'description'   => 'Delete clipart subcategories table from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create SubCategory Cliparts Table',
            'slug'          => 'clipartsubcategories.create',
            'description'   => 'Add clipart subcategories table to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'Generate SubCategory Cliparts Table',
            'slug'          => 'clipartsubcategories.generate',
            'description'   => 'Generate clipart subcategories table to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
