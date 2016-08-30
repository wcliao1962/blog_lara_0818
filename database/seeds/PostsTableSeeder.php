<?php

use App\Post;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $total=30;
        $faker=Faker::create('en_US');

        foreach (range(1,$total) as $number){
            Post::create([
                'title'=> $faker->sentence,
                'content'=> $faker->paragraph,
//                'title'=> $faker->realText(10),
//                'content'=> $faker->realText(200),
                'is_feature'=>rand(0,1),
                'user_id'=>rand(1,5),
                'created_at'=> Carbon::now()->subDays($total-$number),
                'updated_at'=> Carbon::now()->subDays($total-$number)->addHours(1,24),
            ]);

        }

    }
}
