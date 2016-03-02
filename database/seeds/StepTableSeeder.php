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

         $limit = 50;

         for ($i = 0; $i < $limit; $i++) {
             $input = array('step','course');
             $rand = $input[array_rand($input)];
             if($rand == 'step'){
                 $id = rand(1,50);
             } else {
                 $id = rand(1,5);
             }


             DB::table('steps')->insert([
                 'parent_id' => $id,
                 'parent_type' => $rand,
                 'title' => $faker->word,
                 'desc' => $faker->text($maxNbChars = 600),

             ]);
         }
     }
}
