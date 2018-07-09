<?php

use Illuminate\Database\Seeder;
use App\Models\Reply;
use App\Models\Topic;
use App\Models\User;

class ReplysTableSeeder extends Seeder
{
    public function run()
    {
        $user_ids = User::all()->pluck('id')->toArray();
        $topic_ids = Topic::all()->pluck('id')->toArray();
        $faker = app(Faker\Generator::class);
        $replys = factory(Reply::class)
                ->times(50)
                ->make()
                ->each(function ($reply, $index) use($user_ids,$topic_ids,$faker){
                    $reply->user_id = $faker->randomElement($user_ids);
                    $reply->topic_id = $faker->randomElement($topic_ids);
                });

        Reply::insert($replys->toArray());
    }

}

