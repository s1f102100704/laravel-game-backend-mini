<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CurrentEventController;
use App\Http\Controllers\Api\RewardClaimController;

Route::get('/health',function(){
    return response()->json(['status' => 'ok']);
});

Route::get('/events/current', [CurrentEventController::class, 'searchCurrentEvent']);
Route::post('/rewards/{reward}/claim', [RewardClaimController::class, 'store']);