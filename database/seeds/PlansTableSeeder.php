<?php

use Illuminate\Database\Seeder;
use App\Plan;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'user_id' => '1',
            'name' => 'StrongLifts 5x5',
            'description' => 'A simple program for beginners. Get strong with 3 workouts per week and linear periodization.'
        ]);

        Plan::create([
            'user_id' => '1',
            'name' => 'One Man One Barbell',
            'description' => 'A program, that is specifically designed to get really strong while also maintaining or even increasing conditioning.'
        ]);

        Plan::create([
            'user_id' => '1',
            'name' => 'Wendler 5/3/1',
            'description' => 'A purely strength-based program. You want to get really strong and dont care about the rest? This is your program.'
        ]);

        Plan::create([
            'user_id' => '2',
            'name' => 'Wendler 5/3/1',
            'description' => 'A purely strength-based program. You want to get really strong and dont care about the rest? This is your program.'
        ]);
    }
}
