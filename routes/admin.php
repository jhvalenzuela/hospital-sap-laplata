<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\MainsliderController;

Route::get('', [HomeController::Class, 'index'])->name('admin.home');

Route::resource('appointments', AppointmentController::class)->names('admin.appointments');

Route::resource('mainsliders', MainsliderController::class)->names('admin.mainsliders');