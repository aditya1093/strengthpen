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
}
