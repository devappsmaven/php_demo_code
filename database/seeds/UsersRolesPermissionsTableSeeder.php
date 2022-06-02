<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class UsersRolesPermissionsTableSeeder extends Seeder
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
            'name'          => 'Users List',
            'slug'          => 'users.index',
            'description'   => 'List of the users',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'User Details',
            'slug'          => 'users.show',
            'description'   => 'View user Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit User',
            'slug'          => 'users.edit',
            'description'   => 'Edit user informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete User',
            'slug'          => 'users.destroy',
            'description'   => 'Delete user from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create User',
            'slug'          => 'users.create',
            'description'   => 'Add user to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        //Roles
        Permission::create([
            'name'          => 'Roles List',
            'slug'          => 'roles.index',
            'description'   => 'List of the roles',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Role Details',
            'slug'          => 'roles.show',
            'description'   => 'View role Details',        
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),        
        ]);
        
        Permission::create([
            'name'          => 'Edit Role',
            'slug'          => 'roles.edit',
            'description'   => 'Edit role information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Role',
            'slug'          => 'roles.destroy',
            'description'   => 'Delete role from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Create Role',
            'slug'          => 'roles.create',
            'description'   => 'Add role to the system',  
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),      
        ]);
    }
}
