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
        $faker=Faker::create('en_US');

        foreach (range(1,$total) as $number){
            for ($i = 1; $i <= rand(0,4); $i++){
                Comment::create([
                    //    'title'=> $faker->sentence,
                    //    'content'=> $faker->paragraph,
                    'nickname'=> $faker->firstName,
                    'content'=> $faker->sentence,
                    'post_id'=>$number,
                    'created_at'=> Carbon::now()->subDays($total-$number)->addDay($i),
                    'updated_at'=> Carbon::now()->subDays($total-$number)->addDay($i),
                ]);

            }
        }
        //
    }
}
