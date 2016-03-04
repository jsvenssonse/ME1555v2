<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;
        

        for ($i = 0; $i < $limit; $i++) {
            DB::table('courses')->insert([
                'user_id' => rand(1,10),
                'cat' => $faker->word->unique(),
                'title' => $faker->word,
                'desc' => $faker->text($maxNbChars = 600),
            ]);
        }
    }
}
