<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::factory(10)->create()->each(function ($user){
           Post::factory(rand(1,3))->create([
               'user_id' => $user->id
           ])->each(function ($post){
               Post::factory(rand(1,3))->create([
                   'user_id' => $post->user_id,
                   'post_id' => $post->id
               ]);
           });
        });
    }
}
