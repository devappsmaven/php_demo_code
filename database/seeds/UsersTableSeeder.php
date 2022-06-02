<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User
         User::create([
            'firstname' => 'Vivid',
            'lastname' => 'Customs',
            'username' => 'admin',
            'email' => 'admin@vividcustoms.com',
            'phone' => '(800) 648-8518',
            'birthday' => Carbon\Carbon::now()->toDateTimeString(),
            'password' => '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6',
            'remember_token' => 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX',
            'image' => 'avatar.png',
            'type' => 'Admin',
            'status' => 'Enable',
            'verified' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);
        
        User::create([
            'firstname' => 'Andy',
            'lastname' => 'Luu',
            'username' => 'andy',
            'email' => 'andy@example.com',
            'phone' => '(800) 648-8518',
            'birthday' =>  Carbon\Carbon::now()->toDateTimeString(),
            'password' => '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6',
            'remember_token' => 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX',
            'image' => 'profile.png',
            'type' => 'Admin',
            'status' => 'Enable',
            'verified' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        User::create([
            'firstname' => 'Katie',
            'lastname' => 'Luu',
            'username' => 'katiel',
            'email' => 'katiel@example.com',
            'phone' => '(800) 648-8518',
            'birthday' =>  Carbon\Carbon::now()->toDateTimeString(),
            'password' => '$2y$10$WLxHkxR/Qx71RwZKsqjX5eyS1f6XI9AewMzTp8tvHSEnqEfAIErD6',
            'remember_token' => 'Gt7NEAsRifVEydgTWmXu6BGn47eQpm9DxddJJiqTbHkeFkLKlNMB8uffdPVX',
            'image' => 'profile.png',
            'type' => 'Admin',
            'status' => 'Enable',
            'verified' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 3,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);
    }
}
