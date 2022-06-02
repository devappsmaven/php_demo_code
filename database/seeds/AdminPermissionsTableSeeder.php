<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class AdminPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        Permission::create([
            'name'          => 'View Profile',
            'slug'          => 'admin.profile',
            'description'   => 'View Profile User',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'View Dashboard Charts',
            'slug'          => 'admin.charts',
            'description'   => 'View Dashboard Charts',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'View Dashboard 1',
            'slug'          => 'admin.dashboard',
            'description'   => 'View Dashboard V1.0',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'View Dashboard 2',
            'slug'          => 'admin.dashboard2',
            'description'   => 'View Dashboard V2.0',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
