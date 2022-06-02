<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class TagPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tags
        Permission::create([
            'name'          => 'Tags List',
            'slug'          => 'tags.index',
            'description'   => 'List of the tags',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Tag Details',
            'slug'          => 'tags.show',
            'description'   => 'View tags Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Tag',
            'slug'          => 'tags.edit',
            'description'   => 'Edit tags informations',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Tag',
            'slug'          => 'tags.destroy',
            'description'   => 'Delete tags from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Tag',
            'slug'          => 'tags.create',
            'description'   => 'Add tags to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
