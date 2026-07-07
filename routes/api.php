<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CurrentEventController;
Route::get('/health',function(){
    return response()->json(['status' => 'ok']);
});

Route::get('/events/current', [CurrentEventController::class, 'searchCurrentEvent']);