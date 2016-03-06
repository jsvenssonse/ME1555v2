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
        
            $collection = [
                ['cat' => 'Science',
                'title' => "Atom Splitting", 
                "desc" => "Crash course in atom splitting, DIY at home! All you need is a few home appliances, and you are set!"
                ],
                ['cat' => 'Programming',
                'title' => "Visual C++", 
                "desc" =>"Learn the basics of C++, from basic variable handling to advanced Object Oriented Concepts."
                ],
                ['cat' => 'Planning',
                'title' => "My Trip to Paris", 
                "desc" => "Let me show you how I spent my time in Paris. I will introduce to you where to get the cheapeast croissants and cheapest living spaces "
                ],
                ['cat' => 'General IT',
                'title' => "What is a Raspberry Pi?", 
                "desc" => "I bought a raspberry pi and I want to know how to use it. Thought I might use it as an extra computer."
                ],
                ['cat' => 'Sports',
                'title' => "Getting six pack abs", 
                "desc" => "This is my experience and guide to how I got six pack abs in 12 weeks."
                ],
                ['cat' => 'Gaming',
                'title' => "Super Mario Bros", 
                "desc" => "My step by step guide on how to save the queen in super mario on gameboy color."
                ],  
            ];

        
        for ($i = 0; $i < 6; $i++) {
            
            if ( $collection[$i]['cat'] == 'Science' ) { $id = 1; }
            else { $id = rand(2,10); }
            
            DB::table('courses')->insert([
                'user_id' => $id,
                'cat' => $collection[$i]['cat'],
                'title' => $collection[$i]['title'],
                'desc' => $collection[$i]['desc'],
            ]);
        }
    }
}
