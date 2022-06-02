<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class MailablePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Mailables
        Permission::create([
            'name'          => 'Mailables List',
            'slug'          => 'mailables.index',
            'description'   => 'List of the mailables',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Mailable Details',
            'slug'          => 'mailables.show',
            'description'   => 'View mailables Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Mailable',
            'slug'          => 'mailables.edit',
            'description'   => 'Edit mailables informations',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Mailable',
            'slug'          => 'mailables.destroy',
            'description'   => 'Delete mailables from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Mailable',
            'slug'          => 'mailables.create',
            'description'   => 'Add mailables to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'Preview Mailable',
            'slug'          => 'mailables.preview',
            'description'   => 'Preview mailables to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
