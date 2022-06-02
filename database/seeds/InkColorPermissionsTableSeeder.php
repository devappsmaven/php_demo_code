<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class InkColorPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ink Colors
        Permission::create([
            'name'          => 'Ink Colors List',
            'slug'          => 'inkcolors.index',
            'description'   => 'List of the ink colors',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Ink Color Details',
            'slug'          => 'inkcolors.show',
            'description'   => 'View ink colors Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Ink Color',
            'slug'          => 'inkcolors.edit',
            'description'   => 'Edit ink colors information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Ink Color',
            'slug'          => 'inkcolors.destroy',
            'description'   => 'Delete ink colors from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Ink Color',
            'slug'          => 'inkcolors.create',
            'description'   => 'Add ink colors to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
