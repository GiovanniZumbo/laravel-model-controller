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

    $comics = config("comics");

    $navLinks = ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news"];

    return view('pages.homepage', compact("comics", "navLinks"));
})->name("home");


Route::get('/comic{id}', function (string $id) {

    $comics = config("comics");
    $comic = $comics[$id];

    $navLinks = ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news"];

    return view('pages.show', compact("comic", "comics", "navLinks"));
})->name("comic.show");
