<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


     /*
     $table->integer('user_id');
     $table->string('title');
     $table->string('author');
     $table->string('topic');
     $table->string('content');
     */
    public function run()
    {

        $faker = Faker::create();

        $topics = array("poverty", "gender", "race", "corruption", "environment");

        for ($i=0; $i<20; $i++) {
            $firstname = $faker->firstName();
            $lastname = $faker->lastName();
            $topic_arr = ['Environment', 'Housing', 'Safety', 'Poverty', 'Race', 'Gender'];
            DB::table('blogposts')->insert([
            'user_id' => 1,
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'likes' => $faker->rand(0, 1000),
            'author' => "$firstname $lastname",
            'topic' => $topic_arr[array_rand($topic_arr)],
            'content' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true)
          ]);
        }

        // $this->call(UsersTableSeeder::class);
    }
}
