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

        $limit = 20;
        
            
        for ($i = 0; $i < $limit; $i++) {
            $cat = array( "Programming", "General IT", "Science", "Planning" );
            $rand_cat = $cat[array_rand($cat)];
            if($rand_cat == "Programming") {
                $user_id = rand(1,10);
            }elseif($rand_cat == "General IT") {
                $user_id = rand(1,10);
            }elseif($rand_cat == "Science") {
                $user_id = rand(1,10);
            }else {
                $user_id = rand(1,10);
            }
        
            DB::table('courses')->insert([
                'user_id' => $user_id,
                'cat' => $rand_cat,
                'title' => $faker->word,
                'desc' => $faker->text($maxNbChars = 600),
            ]);
        }
    }
}
