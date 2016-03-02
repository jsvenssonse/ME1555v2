<?php

use Illuminate\Database\Seeder;

class CourseTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 80;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('course_tag')->insert([
                'course_id' => rand(1,5),
                'tag_id' => rand(1,10),
            ]);
        }
    }
}
