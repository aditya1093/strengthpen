<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'date', 'schedule'
    ];

    /**
     * Get the user that owns the plan
     */
    public function plan() {
        return $this->belongsTo(Plan::class);
    }
}
