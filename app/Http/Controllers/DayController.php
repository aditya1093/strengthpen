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
    public function store(Request $request)
    {
        //$plan->plans()->create();

        $planId = $request->planId;
        $amount = $request->amount;

        return $planId." ".$amount;
    }
}
