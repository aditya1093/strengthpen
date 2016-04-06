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
     * Check if given user can delete the given day
     */
    public function destroy(User $user, Day $day) {
        $plan = $day->plan()->get()[0];

        return $user->id == $plan->user_id;
    }
}
