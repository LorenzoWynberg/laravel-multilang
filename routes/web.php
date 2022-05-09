<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('welcome');
});

Route::localized(function () {
    Route::get('/', function () {
        return redirect()->route('welcome');
    });

    Route::get(Lang::uri('welcome'), function () {
        return view('welcome');
    })->name('welcome');

    Route::get(Lang::uri('categories'), function () {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    })->name('categories.index');
});

Route::fallback(\CodeZero\LocalizedRoutes\Controller\FallbackController::class)
    ->middleware(\CodeZero\LocalizedRoutes\Middleware\SetLocale::class);