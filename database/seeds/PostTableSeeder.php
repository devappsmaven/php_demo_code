<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 30; $i++) 
        { 
            //Post 
            Post::create([
                'title' => str_random(30).$i,
                'slug' => str_random(10).$i,
                'body' => '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>

                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charm of pleas ure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will</p>
                
                <p>Which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour. One the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belong to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of plea sure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belon gs to those who fail in their duty through weakness of will, which is the same as saying through shrink ing from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour.</p>',
                'image' => '7iugvDhv7CzN8RXU1555181792.png',
                'view_count' => 0,
                'is_approved' => 'Approved',
                'user_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
            ]);

            DB::table('posts_tags')->insert([
                'post_id' => $i,
                'tag_id' => 1,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
            ]);

            DB::table('categories_posts')->insert([
                'post_id' => $i,
                'category_id' => 16,
                'subcategory_id' => 35,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
            ]);   
        }
         
    }
}
