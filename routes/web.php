<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramControler;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\BlogController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [aboutcontroller::class, 'index'])->name('aboutus');
Route::get('/History', [HistoryController::class, 'index'])->name('history');
Route::get('/Gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/Program', [ProgramControler::class, 'index'])->name('Program');
Route::get('/program', [ProgramControler::class, 'program'])->name('program');
Route::get('/members', [MembersController::class, 'index'])->name('members');
Route::get('/Donation', [DonationController::class, 'index'])->name('Donation');
Route::get('/Blog', [BlogController::class, 'index'])->name('blog');





