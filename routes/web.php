<?php

use Illuminate\Support\Facades\Route;
use laranew\Contactform\Http\Controllers\ContactFormController;


Route::middleware(['guest','web'])->group(function(){
    Route::get('/contactform',[ContactFormController::class, 'create']);
    Route::post('/submit/message',[ContactFormController::class, 'store']);
});

// Route::group(['middleware' => ['web']], function () {

// });