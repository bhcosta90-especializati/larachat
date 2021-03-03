<?php

use App\Http\Controllers\Api\ChatApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return ['message' => 'ok'];
});

Route::group(['prefix' => 'v1', 'as' => 'api.v1.', 'middleware' => ['auth']], function(){
    Route::get('/users', [UserApiController::class, 'index'])->name('users.index');
    Route::post('/messages', [ChatApiController::class, 'store'])->name('chat.store');
});