<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    /**
     * Get the user that owns the plan
     */
    public function plan() {
        return $this->belongsTo(Plan::class);
    }
}
