<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
            DB::table('users')->insert([ //,
                'username' => "admin",
                'password' => "password",
                'firstname' => $faker->unique()->name,
                'lastname' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'stream_token' => $faker->password,
            ]);
        }
    }
}

