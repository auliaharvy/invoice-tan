<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;

// Invoice Routes
Route::get('/', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoices.index');

// Invoice Routes
Route::resource('invoices', InvoiceController::class);
// User Routes
Route::resource('users', UserController::class);
// Client Routes
Route::resource('clients', ClientsController::class);
