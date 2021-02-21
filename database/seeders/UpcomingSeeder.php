<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Upcoming;

class UpcomingSeeder extends Seeder
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
        	Upcoming::create([
        		'title' => $faker->sentence($nbWords = 4, $variableWords = false),
        		'completed' => false,
        		'approved' => false,
        		'waiting' => true,
        		'taskId' => \Str::random(4).'-'.\Str::random(7)
        	]);
        }
    }
}
