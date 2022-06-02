<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PostPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Posts
        Permission::create([
            'name'          => 'Posts List',
            'slug'          => 'posts.index',
            'description'   => 'List of the posts',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Post Details',
            'slug'          => 'posts.show',
            'description'   => 'View posts Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Post',
            'slug'          => 'posts.edit',
            'description'   => 'Edit posts informations',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Post',
            'slug'          => 'posts.destroy',
            'description'   => 'Delete posts from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Post',
            'slug'          => 'posts.create',
            'description'   => 'Add posts to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'Approve Post',
            'slug'          => 'posts.approve',
            'description'   => 'Approve posts from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);
        
    }
}
