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
            $email = $faker->unique()->email;
            DB::table('users')->insert([ //,
                'username' => "admin",
                'password' => "password",
                'firstname' => $faker->unique()->name,
                'lastname' => $faker->unique()->name,
                'email' => $email,
                'stream_token' => hash('sha512', $email),
            ]);
        }
    }
}

