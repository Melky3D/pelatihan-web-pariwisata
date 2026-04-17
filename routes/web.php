<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    $name = "Melky";
    $hobby = ["Coding", "Gaming", "Traveling"];
    return view('halo', compact('name', 'hobby'));
});

Route::get('/switch', function () {
    $pekerjaan = "programmer";
    return view('switch', compact('pekerjaan'));
});

Route::get('master', function () {
    return view('pages.home');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('destinasi', function () {
    $destinasi = [
        "nama" => "Bali",
        "harga" => 5000000,
        "lokasi" => "Denpasar, Bali",
        "durasi" => "4 hari 3 malam",
        "transportasi" => "Pesawat",
        "hotel" => "Bintang 4",
        "rating" => 4.8,
        "fasilitas" => ["Hotel", "Sarapan", "Tour Guide", "Transport Lokal"],
    ];
    return view('pages.destinasi', compact('destinasi'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/destination', DestinationController::class)->middleware('auth');
Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('/attraction', AttractionsController::class)->middleware('auth');
Route::resource('review', ReviewController::class)->middleware('auth');

require __DIR__.'/auth.php';
