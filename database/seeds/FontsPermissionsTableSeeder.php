<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class FontsPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Fonts 
        Permission::create([
            'name'          => 'Fonts  List',
            'slug'          => 'fonts.index',
            'description'   => 'List of the fonts',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Font Details',
            'slug'          => 'fonts.show',
            'description'   => 'View fonts  Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Font ',
            'slug'          => 'fonts.edit',
            'description'   => 'Edit fonts  information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Font ',
            'slug'          => 'fonts.destroy',
            'description'   => 'Delete fonts  from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Font ',
            'slug'          => 'fonts.create',
            'description'   => 'Add fonts  to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
