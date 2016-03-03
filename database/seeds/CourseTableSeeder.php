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

        $limit = 5;
        
    $cat = array( "Programming", "General IT", "Science", "Planning" );
    
    $rand_cats = array_rand($cat,1);
    $cats = $cat[$rand_cats];
        

        for ($i = 0; $i < $limit; $i++) {
            DB::table('courses')->insert([
                'user_id' => rand(1,10),
                'cat' => $cats,
                'title' => $faker->word,
                'desc' => $faker->text($maxNbChars = 600),

            ]);
        }
    }
}
