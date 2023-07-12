<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\RestaurantController;





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
/* api formulario usuario*/





/* api formulario contact*/ 


Route::post('/contactoC',[ContactoController::class,"create"]);
Route::get('/contactoR',[ContactoController::class,"read"]);
Route::put('/contactoU',[UsuarioController::class,'update']);
Route::delete('/contactoD',[UsuarioController::class,'delete']);



/* api nuevo cliente*/

Route::post('/createClient',[ContactoController::class,"create"]);
Route::get('/readClient',[RestaurantController::class,"read"]);
Route::put('/actClient',[RestaurantController::class,'update']);
Route::delete('/clientErase',[RestaurantController::class,'delete']);




Route::post('/usuarioC',[UsuarioController::class,"create"]);

Route::get('/usuariosR',[UsuarioController::class,"read"]);

Route::put('/usuarioU',[UsuarioController::class,"update"]);

Route::delete('/usuarioD',[UsuarioController::class,"delete"]);