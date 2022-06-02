<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class ShirtColorPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Shirts Colors
        Permission::create([
            'name'          => 'Shirts Colors List',
            'slug'          => 'shirtcolors.index',
            'description'   => 'List of the shirt colors',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Shirt Color Details',
            'slug'          => 'shirtcolors.show',
            'description'   => 'View shirt colors Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Shirt Color',
            'slug'          => 'shirtcolors.edit',
            'description'   => 'Edit shirt colors information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Shirt Color',
            'slug'          => 'shirtcolors.destroy',
            'description'   => 'Delete shirt colors from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Shirt Color',
            'slug'          => 'shirtcolors.create',
            'description'   => 'Add shirt colors to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
