<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class ThemePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Themes
        Permission::create([
            'name'          => 'Themes List',
            'slug'          => 'themes.index',
            'description'   => 'List of the themes',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Theme Details',
            'slug'          => 'themes.show',
            'description'   => 'View themes Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Theme',
            'slug'          => 'themes.edit',
            'description'   => 'Edit themes informations',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Theme',
            'slug'          => 'themes.destroy',
            'description'   => 'Delete themes from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Theme',
            'slug'          => 'themes.create',
            'description'   => 'Add themes to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
