<?php

use Illuminate\Database\Seeder;

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
        require_once 'web-hub/vendor/fzaninotto/faker/src/autoload.php';

        $faker = Faker/Factory::create();

        $topics = array("poverty", "gender", "race", "corruption", "environment");

        for ($i=0; $i<20; $i++) {
          DB::table('blogposts')->insert([
            'user_id' => 1,
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'author' => $faker->name($gender = null|'male'|'female') ,
            'topic' => array_rand($topics, 1),
            'content' => $faker->paragraph($nbSentences = 8, $variableNbSentences = true)
          ]);
        }

        // $this->call(UsersTableSeeder::class);
    }
}
