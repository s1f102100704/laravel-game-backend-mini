<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function eventRewards()
    {
        return $this->hasMany(EventReward::class);
    }

    public function userItems()
    {
        return $this->hasMany(UserItem::class);
    }
}
