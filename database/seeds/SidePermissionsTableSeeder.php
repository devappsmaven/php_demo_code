<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class SidePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Permisions
         Permission::create([
            'name'          => 'Sides List',
            'slug'          => 'sides.index',
            'description'   => 'List of the sides',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Side Details',
            'slug'          => 'sides.show',
            'description'   => 'View sides Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Side',
            'slug'          => 'sides.edit',
            'description'   => 'Edit sides information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Side',
            'slug'          => 'sides.destroy',
            'description'   => 'Delete sides from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Side',
            'slug'          => 'sides.create',
            'description'   => 'Add sides to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
