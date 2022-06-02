<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class RecordsPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name'          => 'Record List',
            'slug'          => 'records.index',
            'description'   => 'List of the records',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Record Details',
            'slug'          => 'records.show',
            'description'   => 'View record Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);

        Permission::create([
            'name'          => 'Delete Record',
            'slug'          => 'records.destroy',
            'description'   => 'Delete record from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);
    }
}
