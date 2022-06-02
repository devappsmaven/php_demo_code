<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class DesignPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Designs
        Permission::create([
            'name'          => 'Designs List',
            'slug'          => 'designs.index',
            'description'   => 'List of the designs',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Design Details',
            'slug'          => 'designs.show',
            'description'   => 'View designs Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Design',
            'slug'          => 'designs.edit',
            'description'   => 'Edit designs informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Design',
            'slug'          => 'designs.destroy',
            'description'   => 'Delete designs from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Design',
            'slug'          => 'designs.create',
            'description'   => 'Add designs to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
