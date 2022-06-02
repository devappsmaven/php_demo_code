<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class TemplateDesignPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Template Designs
        Permission::create([
            'name'          => 'Template Designs List',
            'slug'          => 'templates.index',
            'description'   => 'List of the template designs',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Template Design Details',
            'slug'          => 'templates.show',
            'description'   => 'View template designs Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Template Design',
            'slug'          => 'templates.edit',
            'description'   => 'Edit template designs informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Template Design',
            'slug'          => 'templates.destroy',
            'description'   => 'Delete template designs from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Template Design',
            'slug'          => 'templates.create',
            'description'   => 'Add template designs to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
