<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Today;

class TodaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i<7; $i++) {
        	Today::create([
        		'title' => $faker->sentence($nbWords = 4, $variableWords = false),
        		'completed' => false,
        		'approved' => false,
        		'taskId' => \Str::random(11)
        	]);
        }
    }
}
