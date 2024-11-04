<?php

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('preview');
});

Route::get('/categories', function () {
    return view('categories.index');
});

Route::get('/categories/create', function () {
    return view('categories.create');
});

Route::post('/categories/store', function (Request $request) {
    Category::create([
        'name' => $request->name,
        'slug' => $request->slug,
        'description' => $request->description
    ]);
});

Route::get('/parceiros', function () {
    return view('parceiros');
});



Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
