<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class OpenCartPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Shirts Colors
         Permission::create([
            'name'          => 'Open Cart View',
            'slug'          => 'admin.showopencart',
            'description'   => 'Display open cart view',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Send Open Cart email',
            'slug'          => 'admin.sendopencartemail',
            'description'   => 'Send Open Cart to a customers',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);

        Permission::create([
            'name'          => 'Open Cart History',
            'slug'          => 'admin.opencarthistory',
            'description'   => 'List of all Open Cart sended to a customers',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
    }
}
