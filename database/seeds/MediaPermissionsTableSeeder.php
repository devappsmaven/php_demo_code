<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class MediaPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Medias
        Permission::create([
            'name'          => 'Medias List',
            'slug'          => 'medias.index',
            'description'   => 'List of the medias',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Media Details',
            'slug'          => 'medias.show',
            'description'   => 'View medias Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Media',
            'slug'          => 'medias.edit',
            'description'   => 'Edit medias informations',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Media',
            'slug'          => 'medias.destroy',
            'description'   => 'Delete medias from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Media',
            'slug'          => 'medias.create',
            'description'   => 'Add medias to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
