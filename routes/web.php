<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoicesController;

// Dashboard Routes
Route::get('/', [ClientsController::class, 'index'])->name('invoices.index');

// User Routes
Route::resource('users', UsersController::class);

// Client Routes
Route::resource('clients', ClientsController::class);

// Invoices Routes
Route::resource('invoices', InvoicesController::class);
