<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIAppointmentController;
use Illuminate\Http\Request;

Route::middleware('api')->group(function () {

    Route::post('/appointmentsStore', [APIAppointmentController::class, 'AppointmentsStore']);
    Route::post('/nurse-registration', [APIAppointmentController::class, 'NurseRegistration']);
    Route::post('/emergency_appointment', [APIAppointmentController::class, 'emergency_appointment']);
    Route::post('/applied_job', [APIAppointmentController::class, 'applied_job']);
    Route::get('/blogs', [APIAppointmentController::class, 'blogs']);
    Route::get('/blog_details/{id}', [APIAppointmentController::class, 'blog_details']);
    Route::get('/career_list', [APIAppointmentController::class, 'career_list']);
    Route::get('/shop_list', [APIAppointmentController::class, 'shop_list']);
    Route::post('/shop_now', [APIAppointmentController::class, 'shop_now']);

});


// Route::post('/appointmentsStore', [APIAppointmentController::class, 'AppointmentsStore']);



