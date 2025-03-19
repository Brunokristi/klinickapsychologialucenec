<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OutgoingController;
use Illuminate\Http\Request;

Route::get('/', function () {
    $serviceIds = [9];
    $services = Service::whereIn('id', $serviceIds)->get();
    $dates = DB::table('dates')->get(); 

    return view('home', compact('services', 'dates'));
})->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service/{id}', function ($id) {
    $service = Service::with(['category', 'steps', 'necessities', 'files'])->findOrFail($id);
    return view('detail', compact('service'));
})->name('service.detail');


Route::get('/products', function () {
    $categories = Category::with('services')->get();
    return view('products', compact('categories'));
})->name('products');

Route::get('/services/search', function (Request $request) {
    $query = $request->get('q');

    if (!$query) {
        return redirect()->route('products'); // Redirect if no search term
    }

    // Normalize search query: remove punctuation, convert to lowercase
    $normalizedQuery = strtolower(preg_replace('/[^\p{L}\p{N}\s]/u', '', $query));

    // Fetch categories with services matching the normalized query
    $categories = Category::with(['services' => function ($q) use ($normalizedQuery) {
        $q->whereRaw("LOWER(REGEXP_REPLACE(name, '[[:punct:]]', '', 'g')) LIKE ?", ["%{$normalizedQuery}%"])
          ->orWhereRaw("LOWER(REGEXP_REPLACE(description, '[[:punct:]]', '', 'g')) LIKE ?", ["%{$normalizedQuery}%"])
          ->orWhereHas('tags', function ($q) use ($normalizedQuery) {
              $q->whereRaw("LOWER(REGEXP_REPLACE(name, '[[:punct:]]', '', 'g')) LIKE ?", ["%{$normalizedQuery}%"]);
          });
    }])->get();

    return view('products', compact('categories'));
})->name('services.search');

Route::get('/dashboard', function () {
    return view('dashboard', ['services' => Service::getAllNames()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/edit/service/id/{id}', [ServiceController::class, 'edit'])->middleware(['auth', 'verified'])->name('service.edit');
Route::put('/edit/service/id/{id}', [ServiceController::class, 'update'])->middleware(['auth', 'verified'])->name('service.update');

Route::get('/create/service', [ServiceController::class, 'serviceTemplate'])->middleware(['auth', 'verified'])->name('service.serviceTemplate');
Route::post('/create/service', [ServiceController::class, 'create'])->middleware(['auth', 'verified'])->name('service.create');

Route::delete('/delete/service/id/{id}', [ServiceController::class, 'delete'])->middleware(['auth', 'verified'])->name('service.delete');
Route::post('/service/delete-file', [ServiceController::class, 'deleteFile'])->name('service.deleteFile');

Route::get('/show/outgoings', [OutgoingController::class, 'show'])->middleware(['auth', 'verified'])->name('outgoings.show');
Route::post('/create/outgoings', [OutgoingController::class, 'create'])->middleware(['auth', 'verified'])->name('outgoings.create');
Route::delete('/delete/outgoings/id/{id}', [OutgoingController::class, 'delete'])->middleware(['auth', 'verified'])->name('outgoings.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
