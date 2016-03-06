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

         $limit = 6;
         
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
                [
                    'parent_id' => 1,
                    'parent_type' => 'course',
                    'title' => "Bombard the nuclei of the fissile isotope with subatomic particles.", 
                    "desc" => "A single subatomic particle can strike an atom of 235U, splitting it into two separate atoms of other elements and releasing three neutrons. Three types of subatomic particles are commonly used.
                    Protons. These subatomic particles have mass and a positive charge. The number of protons in an atom determines what element the atom is.
                    Neutrons. These subatomic particles have the mass as protons but no charge.
                    Alpha particles. These particles are the nuclei of helium atoms, shorn of their orbiting electrons. They consist of two protons and two neutrons."
                ],
                [
                    'parent_id' => 1,
                    'parent_type' => 'course',
                    'title' => "Fire one atomic nucleus of the same isotope at another.", 
                    "desc" => "Because loose subatomic particles are difficult to come by, it’s often necessary to force them out of the atoms they’re part of. One method of doing this is firing atoms of a given isotope against other atoms of that same isotope.
                    This method was used to create the 235U atomic bomb dropped on Hiroshima. A gun-like weapon with a uranium core fired 235U atoms at another piece of 235U bearing material fast enough to have the neutrons they released naturally slam into the nuclei of other 235U atoms and break them apart. The neutrons released when the atoms split would, in turn, strike and split other 235U atoms.[2]"
                ],
                [
                    'parent_id' => 1,
                    'parent_type' => 'course',
                    'title' => "Squeeze the atomic sample tight, bringing fissile atoms closer together.", 
                    "desc" => "Sometimes, atoms decay too fast on their own to be fired at one another. In this case, bringing the atoms closer together increases the chance of released subatomic particles striking and splitting other atoms.
                    This method was used to create the 239Pu atomic bomb dropped on Nagasaki. Conventional explosives ringed a mass of plutonium; when detonated, they pushed the plutonium mass together, bringing the 239Pu atoms close enough together that the neutrons they released would continuously strike and split other 239Pu atoms.[3]"
                ],
                [
                    'parent_id' => 1,
                    'parent_type' => 'course',
                    'title' => "Excite electrons with laser light.", 
                    "desc" => "With the development of petawatt (1015 watt) lasers, it is now possible to split atoms by using laser light to excite electrons in metals encasing a radioactive substance.
                    In a 2000 test at the Lawrence Livermore Laboratory in California, uranium was encased in gold and held in a copper holder. A 260-joule pulse of infrared laser light struck the case and holder, exciting their electrons. When the electrons returned to their regular orbits, they released high-energy gamma radiation that penetrated the gold and copper nuclei, liberating neutrons that tore into the atoms of the uranium underneath the gold, splitting them. (Both the gold and copper became radioactive as a result of the experiment.)
                    A similar test was performed at the Rutherford Appleton Laboratory in Great Britain, using a 50 terawatt (5 x 1012 watt) laser targeting a tantalum slab with various materials put behind it: potassium, silver, zinc, and uranium. All successfully had a portion of their atoms split.[4]"
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
