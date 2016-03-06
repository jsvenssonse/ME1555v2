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

         $limit = 2;
         
            $collection = [
                [
                    'parent_id' => 1,
                    'parent_type' => 'course',
                    'title' => "Choose the right isotope.", 
                    "desc" => "Some elements or isotopes of elements undergo radioactive decay. Not all isotopes are created equal when it comes to being readily split, however. The most common isotope of uranium has an atomic weight of 238, consisting of 92 protons and 146 neutrons, but its nuclei tend to absorb neutrons without being split into smaller nuclei of other elements. An isotope of uranium with three fewer neutrons, 235U, can much more readily be split apart than can 238U; such an isotope is called fissile.
                    Some isotopes can be split too readily, so fast that a continuous fission reaction can’t be maintained. This is called spontaneous fission; the plutonium isotope 240Pu is such an isotope, unlike the isotope 239Pu with its slower fission rate."
                ],
                [
                    'parent_id' => 1,
                    'parent_type' => 'course',
                    'title' => "Get enough of the isotope to ensure fission will continue after the first atom is split.", 
                    "desc" => "This requires having a certain minimum amount of the fissile isotope to make the fission reaction sustainable; this is called critical mass. Achieving critical mass requires enough of source material for the isotope to increase the chances of fission occurring.
                    Sometimes, it is necessary to increase the relative amount of fissile isotope in a sample to ensure a sustainable fission reaction occurs. This is called enrichment, and there have been several methods employed to enrich a sample. (For the methods used to enrich uranium, see the related wikiHow “How to Enrich Uranium.”)"
                ],
            ];

         
         for ($i = 0; $i < $limit; $i++) {
            $input = array('step','course');
            $rand = $input[array_rand($input)];
            $type = $collection[$i]['parent_type'];
            $title = $collection[$i]['title'];
            $desc = $collection[$i]['desc'];


             DB::table('steps')->insert([
                 'parent_id' => 1,
                 'parent_type' => $type,
                 'title' => $title,
                 'desc' => $desc,

             ]);
         }
     }
}
