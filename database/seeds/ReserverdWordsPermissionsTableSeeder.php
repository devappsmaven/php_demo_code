<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class ReserverdWordsPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Reserverd Word
       Permission::create([
        'name'          => 'Reserverd Word List',
        'slug'          => 'reserverdwords.index',
        'description'   => 'List of the reserverdwords',
        'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
        'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
    ]);

    Permission::create([
        'name'          => 'Reserverd Word Details',
        'slug'          => 'reserverdwords.show',
        'description'   => 'View reserverdwords Details',   
        'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
        'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
    ]);
    
    Permission::create([
        'name'          => 'Edit Reserverd Word',
        'slug'          => 'reserverdwords.edit',
        'description'   => 'Edit reserverdwords informationa',
        'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
        'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
    ]);
    
    Permission::create([
        'name'          => 'Delete Reserverd Word',
        'slug'          => 'reserverdwords.destroy',
        'description'   => 'Delete reserverdwords from the system',
        'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
        'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
    ]);

    Permission::create([
        'name'          => 'Create Reserverd Word',
        'slug'          => 'reserverdwords.create',
        'description'   => 'Add reserverdwords to the system',     
        'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
        'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
    ]);
    }
}
