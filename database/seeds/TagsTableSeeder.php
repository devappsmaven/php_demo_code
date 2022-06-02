<?php

use Illuminate\Database\Seeder;
use App\Tag;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name' => 'Artisan',
            'status' => 'Enable',
            'slug' => 'PHP Artisan',
            'type' => 'Post',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Tag::create([
            'name' => 'Collective',
            'status' => 'Enable',
            'slug' => 'Laravel Collective',
            'type' => 'Gallery',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Tag::create([
            'name' => 'Eloquent',
            'status' => 'Disable',
            'slug' => 'Eloquent',
            'type' => 'Post',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
