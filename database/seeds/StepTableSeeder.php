<?php

use Illuminate\Database\Seeder;

class StepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $faker = Faker\Factory::create();

         $limit = 25;

         for ($i = 0; $i < $limit; $i++) {
             $input = array('step','course');
             DB::table('steps')->insert([
                 'parent_id' => rand(1,5),
                 'parent_type' => $input[array_rand($input)],
                 'title' => $faker->word,
                 'desc' => $faker->text($maxNbChars = 600),

             ]);
         }
     }
}
