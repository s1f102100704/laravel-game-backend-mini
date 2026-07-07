<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
class CurrentEventController extends Controller
{
    public function searchCurrentEvent()
    {
        $Event = new Event();
        $currentEvent = Event::current()->first();

        if($currentEvent){
            return response()->json([
                'status' => 'success',
                'data' => $currentEvent
            ]);
        }else{
            return response()->json([
                'status' => 'error',
                'message' => 'No current event found'
            ]);
    }
    }
}   
