<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker\Factory::create();

        $limit = 4;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([
                'user_id' => 1,
                'title' => $faker->word,
                'content' => $faker->text($maxNbChars = 200),
            ]);
        }
    }
}

