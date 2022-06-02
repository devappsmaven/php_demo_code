<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role
        Role::create([
            'name'          => 'Admin',
            'slug'          => 'admin',
            'description'   => 'System Web Admin',
            'special'   => 'all-access',
            'status' => 'Enable',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Role::create([
            'name'          => 'Customer',
            'slug'          => 'customer',
            'description'   => 'Registered Customer',
            'special'   => 'no-access',
            'status' => 'Enable',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Role::create([
            'name'          => 'Store Designer',
            'slug'          => 'storedesigner',
            'description'   => 'Registered Store Designer',
            'special'   => 'no-assigned',
            'status' => 'Enable',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Role::create([
            'name'          => 'Guest',
            'slug'          => 'guest',
            'description'   => 'Guest Seller',
            'special'   => 'no-access',
            'status' => 'Enable',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Role::create([
            'name'          => 'Screen Printing',
            'slug'          => 'screenprinting',
            'description'   => 'Screen Printing',
            'special'   => 'no-assigned',
            'status' => 'Enable',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Role::create([
            'name'          => 'Digital Printing',
            'slug'          => 'Digitalprinting',
            'description'   => 'Digital Printing',
            'special'   => 'no-assigned',
            'status' => 'Enable',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Role::create([
            'name'          => 'Embroidery',
            'slug'          => 'embroidery',
            'description'   => 'Embroidery',
            'special'   => 'no-assigned',
            'status' => 'Enable',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
