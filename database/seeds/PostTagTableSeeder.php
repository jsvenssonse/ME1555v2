<?php

use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
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
            DB::table('post_tag')->insert([
                'post_id' => rand(1,40),
                'tag_id' => rand(1,10),
            ]);
        }
    }
}
