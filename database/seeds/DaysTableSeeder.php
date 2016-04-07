<?php

use Illuminate\Database\Seeder;
use App\Day;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::create([
            'plan_id' => '1',
            'title' => 'Strength',
            'date' => '2016-04-08',
            'schedule' => 'Squats    5x5     100kg/120kg/140kg/160kg/180kg
Weighted Pullups    5x6     +10kg/+20kg/+30kg/+40kg/+40kg
Handstand Pushups    5x10
Glute Ham Raise     3x8
Rows    3x8
Weighted Pushups 3x8'
        ]);

        Day::create([
            'plan_id' => '1',
            'title' => 'Strength',
            'date' => '2016-04-11',
            'schedule' => 'Squats    5x5     100kg/120kg/140kg/160kg/180kg
Weighted Pullups    5x6     +10kg/+20kg/+30kg/+40kg/+40kg
Handstand Pushups    5x10
Glute Ham Raise     3x8
Rows    3x8
Weighted Pushups 3x8'
        ]);

        Day::create([
            'plan_id' => '1',
            'title' => 'HIIT + Core',
            'date' => '2016-04-13',
            'schedule' => 'Squats    5x5     100kg/120kg/140kg/160kg/180kg
Weighted Pullups    5x6     +10kg/+20kg/+30kg/+40kg/+40kg
Handstand Pushups    5x10
Glute Ham Raise     3x8
Rows    3x8
Weighted Pushups 3x8'
        ]);

        Day::create([
            'plan_id' => '1',
            'title' => 'Climbing',
            'date' => '2016-04-15',
            'schedule' => 'Squats    5x5     100kg/120kg/140kg/160kg/180kg
Weighted Pullups    5x6     +10kg/+20kg/+30kg/+40kg/+40kg
Handstand Pushups    5x10
Glute Ham Raise     3x8
Rows    3x8
Weighted Pushups 3x8'
        ]);

        Day::create([
            'plan_id' => '1',
            'title' => 'Strength',
            'date' => '2016-04-15',
            'schedule' => 'Squats    5x5     100kg/120kg/140kg/160kg/180kg
Weighted Pullups    5x6     +10kg/+20kg/+30kg/+40kg/+40kg
Handstand Pushups    5x10
Glute Ham Raise     3x8
Rows    3x8
Weighted Pushups 3x8'
        ]);
    }
}
