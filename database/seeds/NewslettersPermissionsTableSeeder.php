<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class NewslettersPermissionsTableSeeder extends Seeder
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
            'name'          => 'Newsletters View',
            'slug'          => 'admin.shownewsletters',
            'description'   => 'Display newsletters view',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Send Newsletters email',
            'slug'          => 'admin.sendnewslettersemail',
            'description'   => 'Send Newsletters to a customers',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);

        Permission::create([
            'name'          => 'Newsletters History',
            'slug'          => 'admin.newslettershistory',
            'description'   => 'List of all Newsletters sended to a customers',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
    }
}
