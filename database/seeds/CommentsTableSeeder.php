<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Post                                                                         
        Comment::create([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent messages in con sectetur posuere dolor non.',
            'is_approved' => 'Approved',
            'user_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Comment::create([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis atestese bibendum feugiat ut eget eni Praesent messages in con sectetur posuere dolor non.',
            'is_approved' => 'Approved',
            'user_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('posts_comments')->insert([
            'post_id' => 1,
            'comment_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('posts_comments')->insert([
            'post_id' => 1,
            'comment_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('products_comments')->insert([
            'product_id' => 1,
            'comment_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('products_comments')->insert([
            'product_id' => 1,
            'comment_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('galleries_comments')->insert([
            'gallery_id' => 1,
            'comment_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('galleries_comments')->insert([
            'gallery_id' => 1,
            'comment_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);
    }
}
