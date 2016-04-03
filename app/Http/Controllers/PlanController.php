<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Plan;
use App\User;

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

    /**
     * Receive request and add a new plan
     *
     * @return \Illuminate\Http\Response
     */
    public function addPlan(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $request->user()->plans()->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/my-plans');
    }

    /**
     * Delete specified plan if user is owner
     *
     * @return \Illuminate\Http\Response
     */
    public function deletePlan(Request $request)
    {
        //
    }
}
