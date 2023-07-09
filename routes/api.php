<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactoController;
use App\Http\Controllers\Api\UsuarioController;




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


Route::post("/usuarioC",[UsuarioController::class,'create']);

Route::get("/usuariosR",[UsuarioController::class,'read']);

Route::put("/usuarioU",[UsuarioController::class,'update']);

Route::delete("/usuarioD",[UsuarioController::class,'delete']);


/* api formulario contact*/ 


Route::post('/contactoC',[ContactoController::class,"create"]);
Route::get('/contactoR',[ContactoController::class,"read"]);
Route::put("/contactoU",[UsuarioController::class,'update']);
Route::delete("/contactoD",[UsuarioController::class,'delete']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
 });

