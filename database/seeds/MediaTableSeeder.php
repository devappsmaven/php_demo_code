<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Media
        Media::create([
            'user_id'=> '1',
            'url' => 'profile',
            'file' => 'avatar.png',
            'uploaded_to' => 'Profile',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Media::create([
            'user_id'=> '1',
            'url' => 'profile',
            'file' => 'photo.png',
            'uploaded_to' => 'Profile',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Media::create([
            'user_id'=> '1',
            'url' => 'profile',
            'file' => 'profile.png',
            'uploaded_to' => 'Profile',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
