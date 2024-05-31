<?php

use Illuminate\Support\Facades\Route;
use Laraphant\Contactform\Http\Controllers\ContactFormController;


Route::middleware(['guest','web'])->group(function(){
    Route::get('/contactform',[ContactFormController::class, 'create']);
    Route::post('/submit/message',[ContactFormController::class, 'store']);
});

// Route::group(['middleware' => ['web']], function () {

// });