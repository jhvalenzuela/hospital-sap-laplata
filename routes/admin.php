<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AppointmentController;

Route::get('', [HomeController::Class, 'index'])->name('admin.home');

Route::resource('appointments', AppointmentController::class)->names('admin.appointments');