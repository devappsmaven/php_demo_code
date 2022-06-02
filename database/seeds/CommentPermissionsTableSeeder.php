<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class CommentPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Comments
        Permission::create([
            'name'          => 'Comments List',
            'slug'          => 'comments.index',
            'description'   => 'List of the comments',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Comment Details',
            'slug'          => 'comments.show',
            'description'   => 'View comments Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Comment',
            'slug'          => 'comments.edit',
            'description'   => 'Edit comments informations',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Comment',
            'slug'          => 'comments.destroy',
            'description'   => 'Delete comments from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Comment',
            'slug'          => 'comments.create',
            'description'   => 'Add comments to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
