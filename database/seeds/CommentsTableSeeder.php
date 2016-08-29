<?php

use App\Comment;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        $total=30;
        $faker=Faker::create('zh_TW');

        foreach (range(1,$total) as $number){
            foreach (range(1, rand(0,4)) as $pnum){
                Comment::create([
                    //    'title'=> $faker->sentence,
                    //    'content'=> $faker->paragraph,
                    'nickname'=> $faker->realText(10),
                    'content'=> $faker->sentence,
                    'post_id'=>$number,
                    'created_at'=> Carbon::now()->subDays($total-$number),
                    'updated_at'=> Carbon::now()->subDays($total-$number),
                ]);

            }
        }
        //
    }
}
