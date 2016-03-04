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
        DB::table('users')->insert([ //,
                        'username' => "admin",
                        'password' => "password",
                        'firstname' => "Albert",
                        'lastname' => "Einstein",
                        'email' => "Albert.Einstein@bth.se",
                        'stream_token' => hash('sha512', 'email'),
                    ]);
        $limit = 10;
        
        for ($i = 1; $i < $limit; $i++) {
            $email = $faker->unique()->email;
            DB::table('users')->insert([ //,
                'username' => "admin",
                'password' => "password",
                'firstname' => $faker->unique()->firstName,
                'lastname' => $faker->unique()->lastName,
                'email' => $email,
                'stream_token' => hash('sha512', $email),
            ]);
        }
    }
}

