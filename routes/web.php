<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    $name ="Melky";
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

Route::get('destination', [DestinationController::class, 'index'])->name('destination.index');
Route::get('destination/create', [DestinationController::class,'create'])->name('destination.create');
Route::post('destination', [DestinationController::class, 'store'])->name('destination.store');
Route::get('destinasi2/{id}', [DestinationController::class, 'show'])->name('destinasi2');
Route::delete('destinasi2/{id}', [DestinationController::class, 'delete'])->name('destinasi2.delete');
Route::get('destinasi2/{id}/edit', [DestinationController::class, 'edit'])->name('destinasi2.edit');
Route::put('destinasi2/{id}/update', [DestinationController::class, 'update'])->name('destinasi2.update');


Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class,'create'])->name('user.create');
Route::post('user', [UserController::class, 'store'])->name('user.store');
Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
Route::delete('user/{id}', [UserController::class, 'delete'])->name('user.delete');
Route::get('user/{id}/edit', [UserController::class,'edit'])->name('user.edit');
Route::put('user/{id}/update', [UserController::class, 'update'])->name('user.update');