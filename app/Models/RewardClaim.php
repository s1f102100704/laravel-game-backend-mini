<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RewardClaim extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function eventReward()
    {
        return $this->belongsTo(EventReward::class);
    }
}
