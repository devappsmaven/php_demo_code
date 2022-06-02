<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class GalleryPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Gallerys
         Permission::create([
            'name'          => 'Gallerys List',
            'slug'          => 'gallerys.index',
            'description'   => 'List of the gallerys',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Gallery Details',
            'slug'          => 'gallerys.show',
            'description'   => 'View gallerys Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Gallery',
            'slug'          => 'gallerys.edit',
            'description'   => 'Edit gallerys informations',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Gallery',
            'slug'          => 'gallerys.destroy',
            'description'   => 'Delete gallerys from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Gallery',
            'slug'          => 'gallerys.create',
            'description'   => 'Add gallerys to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'Approve Gallery',
            'slug'          => 'gallerys.approve',
            'description'   => 'Approve gallerys to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
