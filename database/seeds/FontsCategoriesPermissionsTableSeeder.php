<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class FontsCategoriesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fonts Categories
        Permission::create([
            'name'          => 'Fonts Categories List',
            'slug'          => 'fontscategories.index',
            'description'   => 'List of the fonts categories',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Font Category Details',
            'slug'          => 'fontscategories.show',
            'description'   => 'View fonts categories Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Font Category',
            'slug'          => 'fontscategories.edit',
            'description'   => 'Edit fonts categories informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Font Category',
            'slug'          => 'fontscategories.destroy',
            'description'   => 'Delete fonts categories from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Font Category',
            'slug'          => 'fontscategories.create',
            'description'   => 'Add fonts categories to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
