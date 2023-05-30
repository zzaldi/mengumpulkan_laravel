<?php

use App\Http\Controllers\BazmaController;
use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;
//use Illuminate\Foundation\Application;

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
    return view('welcome');
});

Route::get("exam", function () {
    return "Example route get";
});


Route::get("coba", function () {
    return view("coba", ['nama' => 'zaldi']);
});

Route::get("/example/{exampleId}", function ($exampleId) {
    return "example number : $exampleId";
    //example number : 1

});

Route::get("/posts/{postId}/comments/{commentId}", function ($postId, $commentId) {
    return "ini posts ke : $postId dan comments ke: $commentId";
});

Route::get("posts/{postId?}", function ($postId = null) {
    return "post opisional: $postId";
});
Route::get("coba/example", [CobaController::class, "example"]);
Route::get("/coba/request", [CobaController::class, "request"]);

Route::post("/coba/nested-request", [CobaController::class, "nestedRequest"]);

route::get("/response/index", [App\Http\Controllers\BazmaController::class, "responseFunction"]);
route::get("/response/header", [App\Http\Controllers\BazmaController::class, 'responseHeader']);

route::get("/enkripsi/code", [App\Http\Controllers\BazmaController::class, 'ecryptionData']);

route::get("/redirect/to", [App\Http\Controllers\BazmaController::class, 'redirectTo']);
route::get("/redirect/from", [App\Http\Controllers\BazmaController::class, 'redirectfrom']);

route::get("/redirect/to/named", [App\Http\Controllers\BazmaController::class, 'redirectToNamedRoute'])
    ->name("redirect.to");
route::get("/redirect/from/named", [App\Http\Controllers\BazmaController::class, 'redirectFromNamedRoute']);
