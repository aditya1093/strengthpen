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
            'title' => 'GST Upper Body',
            'date' => '2016-04-07',
            'schedule' => 'Front Lever 3x8s tuck position
Planche 3x12s green band assistance
Weighted Pullups 5x6r +10kg/+10g/+20kg/+30kg/+40kg
Weighted Pushups 5x8r +20kg/+20kg/+20kg/+20kg/+20kg',
            'done' => true
        ]);

        Day::create([
            'plan_id' => '1',
            'title' => 'OMOM Back Squat',
            'date' => '2016-04-08',
            'schedule' => 'Squat 4x4r 75kg/90kg/110kg/130kg
Squat 4 reps every minute on the minute for 10 minutes',
            'done' => true
        ]);

        for($i = 1; $i <= 14; $i++) {
            Day::create([
                'plan_id' => '1',
                'title' => 'GST Upper Body',
                'date' => '2016-04-09',
                'schedule' => 'Front Lever 3x8s tuck position
Planche 3x12s green band assistance
Weighted Pullups 5x6r +10kg/+10g/+20kg/+30kg/+40kg
Weighted Pushups 5x8r +20kg/+20kg/+20kg/+20kg/+20kg',
                'done' => false
            ]);

            Day::create([
                'plan_id' => '1',
                'title' => 'OMOM Back Squat',
                'date' => '2016-04-10',
                'schedule' => 'Squat 4x4r 75kg/90kg/110kg/130kg
Squat 4 reps every minute on the minute for 10 minutes',
                'done' => false
            ]);
        }
    }
}
