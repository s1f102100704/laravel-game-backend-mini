<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function scopeCurrent($query)
    {
        $now = now();
        return $query 
        ->where('starts_at', '<=', $now)
        ->where('ends_at', '>=', $now);
    }
    public function eventRewards()
    {
        return $this->hasMany(EventReward::class);
    }
}
