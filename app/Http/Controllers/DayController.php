<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Plan;
use App\Day;

class DayController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Add new day to plan
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Plan $plan)
    {
        //How many days should be created
        $amount = $request->amount;

        for($i = 1; $i <= $amount; $i++) {
            $plan->days()->create([]);
        }

        return back();
    }

    /**
     * Update specified day if user is owner
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Day $day)
    {
        $this->authorize('update', $day);

        $this->validate($request, [
            'title' => 'max:20',
            'date' => 'date',
        ]);

        //Set new property values
        $day->name = $request->title;
        $day->date = $request->date;
        $day->schedule = $request->schedule;
        $day->save();

        return back();
    }

    /**
     * Delete specified day if user is owner
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Day $day)
    {
        $this->authorize('destroy', $day);

        $day->delete();

        return back();
    }
}
