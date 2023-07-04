<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\portafolio_contact_controller

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//  Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//      return $request->user();
//  });

//  Route::post("/contacto",[portafolio_contact_controller::class,"create"]);

Route::get("/saludo",function (Request $request) {
    $message = ["mensaje" => "hola mundo!"];
    return response() -> json($message);
});

Route::put("/libro",function (Request $request) {
    $message = ["book" => "Cronica de una muerte anunciada",
                "año de creacion"=>"1985",
                "autor" => " gabriel garcia marquez"];
    return response() -> json($message);
});
Route::post("/cerveza",function (Request $request) {
    $message = ["beer" => "Club colombia"];
    return response() -> json($message);
});
Route::patch("/computador",function (Request $request) {
    $message = ["computer" => "Toshiba"];
    return response() -> json($message);
});
Route::delete("/musica",function (Request $request) {
    $message = ["musik" => "bad bunny"];
    return response() -> json($message);
});