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
    public function index(Request $request)
    {
        $reqUserID = $request->user()->id;
        $plans = Plan::where('user_id', $reqUserID)->get();

        return view('plans.index', [
            'plans' => $plans,
        ]);
    }

    /**
     * Receive request and add a new plan
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:40',
            'description' => 'required|max:120',
        ]);

        $request->user()->plans()->create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/plans');
    }

    /**
     * Update specified plan if user is owner
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Plan $plan)
    {
        //Update plan
    }

    /**
     * Delete specified plan if user is owner
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Plan $plan)
    {
        $this->authorize('destroy', $plan);

        $plan->delete();

        return redirect('/plans');
    }
}
