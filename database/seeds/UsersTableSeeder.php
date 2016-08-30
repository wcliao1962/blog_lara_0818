<?php

use App\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $total=5;
        $faker=Faker::create('en_US');
        foreach (range(1,$total) as $number){
            User::create(array(
                'name'=> $faker->name,
                'email'=> $faker->email,
                'password'=>'1234',
                'remember_token'=> $faker->colorName,
                'created_at'=> Carbon::now()->subYears($total+1-$number),
                'updated_at'=> Carbon::now()->subYears($total+1-$number),
            ));

        }
    }
}
