<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 //   return $request->user();
//});
Route::get('category/all', [CategoryController::class, 'getAll']);
Route::get('post/all', [PostController::class, 'getAll']);
Route::post('category/store',[CategoryController::class, 'store']);
Route::post('post/store',[PostController::class, 'store']);
Route::post('category/{id}/update',[CategoryController::class, 'update']);
Route::post('post/{id}/update',[PostController::class, 'update']);
Route::delete('category/{id}/destroy', [CategoryController::class, 'destroy']);
Route::delete('post/{id}/destroy', [PostController::class, 'destroy']);