<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Plan;
use App\Day;
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
     * Show one plan
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request, Plan $plan)
    {
        $this->authorize('detail', $plan);

        $days = $plan->days()->get();

        return view('plans.detail', [
            'plan' => $plan,
            'days' => $days,
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

        return back();
    }

    /**
     * Update specified plan if user is owner
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $this->authorize('update', $plan);

        $this->validate($request, [
            'name' => 'required|max:40',
            'description' => 'required|max:120',
        ]);

        //Set new property values
        $plan->name = $request->name;
        $plan->description = $request->description;
        $plan->save();

        return back();
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
