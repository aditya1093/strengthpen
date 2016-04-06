<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * Get the user that owns the plan
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the days for the plan
     */
    public function days() {
        return $this->hasMany(Day::class);
    }
}
