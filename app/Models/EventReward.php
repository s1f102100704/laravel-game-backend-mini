<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventReward extends Model
{

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function rewardClaims()
    {
        return $this->hasMany(RewardClaim::class);
    }
}
