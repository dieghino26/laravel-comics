<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts/layout');
});

Route::get('/comics', function () {
    $title = 'comics';
    return view('comics', compact('title'));
})->name('comics');

Route::get('/characters', function () {
    $title = 'comics';
    return view('characters', compact('title'));
})->name('characters');

Route::get('/movies', function () {
    $title = 'movies';
    return view('movies', compact('title'));
})->name('movies');

Route::get('/tv', function () {
    $title = 'tv';
    return view('tv', compact('title'));
})->name('tv');

Route::get('/games', function () {
    $title = 'games';
    return view('games', compact('title'));
})->name('games');

Route::get('/collectibles', function () {
    $title = 'collectibles';
    return view('collectibles', compact('title'));
})->name('collectibles');

Route::get('/videos', function () {
    $title = 'videos';
    return view('videos', compact('title'));
})->name('videos');

Route::get('/fans', function () {
    $title = 'fans';
    return view('fans', compact('title'));
})->name('fans');

Route::get('/news', function () {
    $title = 'news';
    return view('news', compact('title'));
})->name('news');

Route::get('/shop', function () {
    $title = 'shop';
    return view('shop', compact('title'));
})->name('shop');
