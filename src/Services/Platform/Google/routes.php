<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'google'], function () {
    
    Route::get('test', function () {
        return response()->json(['message' => 'Google service is working!']);
    })->name('google.test');

});