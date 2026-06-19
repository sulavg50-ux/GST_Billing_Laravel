<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\GstBillController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [AppController::class, 'index'])->name('dashboard');
Route::get('/add-party', [PartyController::class, 'addParty'])->name('add-party');
Route::get('/manage-parties', [PartyController::class, 'index'])->name('manage-parties');
Route::get('/add-gst-bill', [GstBillController::class, 'addGstBill'])->name('add-gst-bill');
Route::get('/manage-gst-bills', [GstBillController::class, 'index'])->name('manage-gst-bills');
Route::get('/print-gst-bill', [GstBillController::class, 'print'])->name('print-gst-bill');