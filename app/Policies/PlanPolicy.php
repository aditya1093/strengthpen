<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Plan;
use App\User;

class PlanPolicy
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
     * Check if given user can delete the given plan
     */
    public function destroy(User $user, Plan $plan) {
        return $user->id === $plan->user_id;
    }

    /**
     * Check if given user can update the given plan
     */
    public function update(User $user, Plan $plan) {
        return $user->id === $plan->user_id;
    }

    /**
     * Check if given user can update the given plan
     */
    public function detail(User $user, Plan $plan) {
        return $user->id === $plan->user_id;
    }
}
