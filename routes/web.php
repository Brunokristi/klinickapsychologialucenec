<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OutgoingController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/products', function () {
    return view('products');
}); 



Route::get('/dashboard', function () {
    return view('dashboard', ['services' => Service::getAllNames()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/edit/service/id/{id}', [ServiceController::class, 'edit'])->middleware(['auth', 'verified'])->name('service.edit');
Route::put('/edit/service/id/{id}', [ServiceController::class, 'update'])->middleware(['auth', 'verified'])->name('service.update');

Route::get('/create/service', [ServiceController::class, 'serviceTemplate'])->middleware(['auth', 'verified'])->name('service.serviceTemplate');
Route::post('/create/service', [ServiceController::class, 'create'])->middleware(['auth', 'verified'])->name('service.create');

Route::delete('/delete/service/id/{id}', [ServiceController::class, 'delete'])->middleware(['auth', 'verified'])->name('service.delete');

Route::get('/show/outgoings', [OutgoingController::class, 'show'])->middleware(['auth', 'verified'])->name('outgoings.show');
Route::post('/create/outgoings', [OutgoingController::class, 'create'])->middleware(['auth', 'verified'])->name('outgoings.create');
Route::delete('/delete/outgoings/id/{id}', [OutgoingController::class, 'delete'])->middleware(['auth', 'verified'])->name('outgoings.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
