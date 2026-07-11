<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
class CurrentEventController extends Controller
{
    public function searchCurrentEvent()
    {
        $currentEvent = Event::current()->get();

        if(!$currentEvent->isEmpty()){
            return response()->json([
                'status' => 'success',
                'data' => $currentEvent
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'No current event found'
            ],404);
    }
    }
}   
