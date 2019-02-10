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

        DB::table('blogposts')->insert([
            'user_id' => 1,
            'title' => "Carpenters Help Soup Kitchen",
            'likes' => 1368,
            'author' => "Joselyn King",
            'topic' => "Poverty",
            'content' => "WHEELING — Local union carpenters have come together to build hope in those in need of food this winter season.

This week, members of the Keystone Mountain Lakes Regional Council of Carpenters and Project BEST teamed up to collect and deliver food items to the Soup Kitchen of Greater Wheeling.

Two truckloads of items pulled up in front of the Soup Kitchen’s doors, hauling an estimated 500 pounds of non-perishable food, said Becky Shilling-Rodocker, Soup Kitchen executive director.

Jody Bonfini, council representative with the Keystone Mountain Lakes Regional Council of Carpenters, said he wanted to do something to let the community know union trades people want to be involved in the community.

He said he was inspired to organize the food collection back in December, when he was driving past the kitchen one morning and saw a long line of people waiting to get inside.l

“We want everybody to realize construction workers live here and want to be a part of the community,” Bonfini said. “We thought it would be good to do this.

“We are fortunate to have good jobs, food to eat and a place to lay our heads.”

Bonfini put out the word to fellow union members and local contractors. They met Saturday to collect the items and ready them for the delivery on Monday.

Ken Weisenborn, owner of Kenco Corp., provided one of the trucks used to transport the goods.

“I think we will be doing it again,” he said.

Winter is when the need at the Soup Kitchen is the greatest, said Ginny Favede, executive director of the Ohio Valley Construction Employers Council and co-chairman of Project Best.

“People tend to give during the holidays, but there are many who struggle after this,” she said. “It’s February and that’s why we are here. We recognize people have a need.”

Shilling Rodocker said she welcomes the support.

“Project Best always works for the community,” she said. “I’m happy to be partners with them.”"
      ]);

        for ($i=0; $i<20; $i++) {
            $firstname = $faker->firstName();
            $lastname = $faker->lastName();
            $topic_arr = ['Environment', 'Housing', 'Safety', 'Poverty', 'Race', 'Gender'];
            DB::table('blogposts')->insert([
            'user_id' => 1,
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'likes' => rand(0, 1000),
            'author' => "$firstname $lastname",
            'topic' => $topic_arr[array_rand($topic_arr)],
            'content' => implode("\n", $faker->paragraphs($nb = 70, $asText = false))
          ]);
        }

        // $this->call(UsersTableSeeder::class);
    }
}
