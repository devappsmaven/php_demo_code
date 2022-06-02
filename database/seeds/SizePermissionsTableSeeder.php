<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;


class SizePermissionsTableSeeder extends Seeder
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
            'name'          => 'Sizes List',
            'slug'          => 'sizes.index',
            'description'   => 'List of the sizes',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Size Details',
            'slug'          => 'sizes.show',
            'description'   => 'View sizes Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Size',
            'slug'          => 'sizes.edit',
            'description'   => 'Edit sizes information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Size',
            'slug'          => 'sizes.destroy',
            'description'   => 'Delete sizes from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Size',
            'slug'          => 'sizes.create',
            'description'   => 'Add sizes to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
