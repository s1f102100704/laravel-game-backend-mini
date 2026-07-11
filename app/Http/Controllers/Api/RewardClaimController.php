<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EventReward;
class RewardClaimController extends Controller
{
    public function store(EventReward $reward)
    {
        $event = $reward->event;
        
        if(!$event->isCurrent()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Reward does not belong to the current event',
            ], 422);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Reward claimed successfully',
            'reward_id' => $reward->id,
        ], 200);
       }
}
