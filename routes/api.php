<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
use App\Models\Post;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::post("/loginPost",[AuthController::class,"loginPost"])
// ->name("loginPost"); 


Route::get('/posts', function () {
    return response()->json(Post::all());
});
