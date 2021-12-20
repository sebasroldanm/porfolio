<?php

use App\Models\Documentation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    $documentations = Documentation::all();
    return view('welcome', compact('documentations'));
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes(['verify' => true]);


Route::resource('docTypes', App\Http\Controllers\DocTypeController::class)->middleware(['auth','verified']);


Route::resource('documentations', App\Http\Controllers\DocumentationController::class)->middleware(['auth','verified']);


Route::resource('contentDocs', App\Http\Controllers\ContentDocController::class)->middleware(['auth','verified']);
