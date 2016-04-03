<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Plan;

class PlanController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myPlans(Request $request)
    {
        $reqUserID = $request->user()->id;
        $plans = Plan::where('user_id', $reqUserID)->get();

        return view('my-plans', [
            'plans' => $plans,
        ]);
    }
}
