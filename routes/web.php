<?php

use App\Models\DocType;
use App\Models\Documentation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function (Request $request) {
    // DB::table('log_visitors')->insert([
    //     'ip' => $request->ip(),
    //     'user-agent' => $request->header('user-agent'),
    //     'created_at' => Carbon::now(),
    //     'updated_at' => Carbon::now(),
    // ]);
    // $documentations = Documentation::all();
    return view('welcome', compact('documentations'));
});

Route::get('/documentation', function () {
    $categories = DocType::all()->skip(1);
    $documentations = Documentation::all();
    return view('documentation', compact('documentations', 'categories'));
});

Route::get('/documentation/{slug_url}', function (Request $request) {
    $documentation = Documentation::where('slug_url', $request->slug_url)->get();
    // dd($documentation[0]->typeDoc);
    return view('detailDoc', compact('documentation'));
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes(['verify' => true]);


Route::resource('docTypes', App\Http\Controllers\DocTypeController::class)->middleware(['auth','verified']);


Route::resource('documentations', App\Http\Controllers\DocumentationController::class)->middleware(['auth','verified']);


Route::resource('contentDocs', App\Http\Controllers\ContentDocController::class)->middleware(['auth','verified']);
