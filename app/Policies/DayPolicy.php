<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\User;
use App\Plan;
use App\Day;

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
     * Check if given user can edit the given day
     */
    public function update(User $user, Day $day) {
        //Get the plan that the day belongs to
        $plan = $day->plan()->get()[0];

        return $user->id == $plan->user_id;
    }

    /**
     * Check if given user can delete the given day
     */
    public function destroy(User $user, Day $day) {
        //Get the plan that the day belongs to
        $plan = $day->plan()->get()[0];

        return $user->id == $plan->user_id;
    }

    /**
     * Check if given user can view details of the day
     */
    public function detail(User $user, Day $day) {
        //Get the plan that the day belongs to
        $plan = $day->plan()->get()[0];

        return $user->id == $plan->user_id;
    }
}
