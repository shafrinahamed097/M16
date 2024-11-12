<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\DemoMiddleware;
use App\Http\Controllers\DemoController;

use App\Http\Controllers\DemoControllerr;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;

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

// Route::get("/hello1/{key}",[DemoController::class,'DemoAction1']);
// Route::get("/hello2/{key}",[DemoController::class,'DemoAction2']);
// Route::get("/hello3/{key}",[DemoController::class,'DemoAction3']);
// Route::get("/hello4/{key}",[DemoController::class,'DemoAction4']);


// Route::get("/hello", [DemoController::class,'DemoAction'])->middleware([DemoMiddleware::class]);

Route::get("/hello", [DemoController::class,'DemoAction'])->middleware('throttle:5,1');

Route::get("/hello2", [DemoControllerr::class,'DemoAction']);

Route::get("/singleController", VideoController::class);


Route::resource('/photos', PhotoController::class);

/*

  GET()  INDEX http://127.0.0.1:8000/photos
  GET()  CREATE http://127.0.0.1:8000/photos/create
  POST() STORE http://127.0.0.1:8000/photos
  GET()  SHOW http://127.0.0.1:8000/photos/1
  GET()  EDIT http://127.0.0.1:8000/photos/1/edit
  PUT/PATCH()  UPDATE http://127.0.0.1:8000/photos/1
  DELETE()  DESTROY http://127.0.0.1:8000/photos/1



*/

Route::get("/home/{num1}/{num2}", [HomeController::class, 'page']);