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
    public function isCurrent()
    {
        $now = now();
        return $this->starts_at <= $now
            && $this->ends_at >= $now;
    }

    protected function casts(): array
    {
    return [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        ];
    }
    public function eventRewards()
    {
        return $this->hasMany(EventReward::class);
    }
}
