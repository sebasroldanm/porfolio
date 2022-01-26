<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::resource('doc_types', App\Http\Controllers\API\DocTypeAPIController::class);


// Route::resource('documentations', App\Http\Controllers\API\DocumentationAPIController::class);


// Route::resource('content_docs', App\Http\Controllers\API\ContentDocAPIController::class);

Route::prefix('v1')->group(function () {
    Route::get('consult/{nickname}/{platform}', function ($nickname, $platform) {
        switch ($platform) {
            case 'str':
                $url = 'https://stripchat.com/api/front/v2/models/username/'.$nickname.'/cam';
                break;
            case 'cht':
                $url = 'https://chaturbate.com/api/chatvideocontext/'.$nickname;
                break;
        }
        $response = Http::get($url);
        return response()->json($response->json());
    });
});
