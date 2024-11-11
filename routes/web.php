<?php

use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/SessionPut/{email}',[DemoController::class,'SessionPut']);
// Route::get('/SessionPull',[DemoController::class,'SessionPull']);
// Route::get('/SessionGet',[DemoController::class,'SessionGet']);
// Route::get('/SessionForget',[DemoController::class,'SessionForget']);
// Route::get('/SessionFlush',[DemoController::class,'SessionFlush']);




// Route::get('/hello1/{key}',[DemoController::class,'DemoAction1'])->middleware([DemoMiddleware::class]);
// Route::get('/hello2',[DemoController::class,'DemoAction2']);

Route::middleware(['demo'])->group(function () {
    Route::get("/hello1/{key}",[DemoController::class,'DemoAction1']);
    Route::get("/hello2/{key}",[DemoController::class,'DemoAction2']);
    Route::get("/hello3/{key}",[DemoController::class,'DemoAction3']);
    Route::get("/hello4/{key}",[DemoController::class,'DemoAction4']);
    
});