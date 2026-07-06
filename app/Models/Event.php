<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function eventRewards()
    {
        return $this->hasMany(EventReward::class);
    }
}
