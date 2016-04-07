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
        $this->authorize('store', $plan);

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
            'title' => 'max:34',
            'date' => 'date',
        ]);

        //Set new property values
        $day->title = $request->title;
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

    /**
     * Mark day as done
     *
     * @return \Illuminate\Http\Response
     */
    public function markAsDone(Request $request, Day $day)
    {
        $this->authorize('update', $day);

        $response = [];

        if($day->done == false) {
            $day->done = true;

            $response['status'] = 'success';
            $response['msg'] = 'day marked as done';
            $response['dayState'] = 'done';
        }
        else {
            $day->done = false;

            $response['status'] = 'success';
            $response['msg'] = 'day marked as not done';
            $response['dayState'] = 'not done';
        }

        $day->save();

        return response()->json($response);

    }
}
