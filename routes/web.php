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

Route::get('/member1', [MembersController::class, 'member1'])->name('members1');
Route::get('/member2', [MembersController::class, 'member2'])->name('members2');
Route::get('/member3', [MembersController::class, 'member3'])->name('members3');
Route::get('/member4', [MembersController::class, 'member4'])->name('members4');
Route::get('/member5', [MembersController::class, 'member5'])->name('members5');
Route::get('/member6', [MembersController::class, 'member6'])->name('members6');

Route::get('/Donation', [DonationController::class, 'donation1'])->name('donation1');
Route::get('/Donations', [DonationController::class, 'donation2'])->name('donation2');
Route::get('/donation', [DonationController::class, 'donation3'])->name('donation3');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');






