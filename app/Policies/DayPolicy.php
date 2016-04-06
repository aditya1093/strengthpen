<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Day;
use App\Plan;

class DayPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Check if given user can delete the given day
     */
    public function destroy(Plan $plan, Day $day) {
        return $plan->id == $day->plan_id;
    }
}
