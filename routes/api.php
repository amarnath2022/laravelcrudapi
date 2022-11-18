<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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

//Route::apiResource('posts',categoryController::class);
Route::get("lists",[apiController::class,'lists']);//all show from database
Route::get("list/{id}",[apiController::class,'list']);//show only one by id that user want
Route::Post("list",[apiController::class,'in']);    //insert data in database help of pastman
Route::Put("list/{id}",[apiController::class,'update']);  //
Route::delete("list/{id}",[apiController::class,'del']);//delete data from database 

// Route::get("/posts",[apiController::class,'index']);
// Route::post("/post",[apiController::class,'store']);
// Route::get("/posts/{id}",[apiController::class,'show']);
// Route::put("/posts/{id}",[apiController::class,'update']);
// Route::delete("/posts/{id}",[apiController::class,'destroy']);
