<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class StoreDesignPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Store Designs
        Permission::create([
            'name'          => 'Store Designs List',
            'slug'          => 'stores.index',
            'description'   => 'List of the store designs',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Store Design Details',
            'slug'          => 'stores.show',
            'description'   => 'View store designs Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Store Design',
            'slug'          => 'stores.edit',
            'description'   => 'Edit store designs informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Store Design',
            'slug'          => 'stores.destroy',
            'description'   => 'Delete store designs from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Store Design',
            'slug'          => 'stores.create',
            'description'   => 'Add store designs to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
