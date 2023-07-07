<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Contacto;

class contactoController extends Controller
{
    public function read(Request $request){
        // instancia modelo contacto
        $user = new Contacto();
        
        if($request->query("id")){
            $Contacto=$user->find($request->query("id"));
        }else{
            $Contacto=$user->all();
        }
        return response()->json($Contacto);
    }


    public function create(Request $request){

        
    $Contacto = new Contacto();

    $Contacto->Nombres = $request->input("Nombres");
    $Contacto->telefono = $request->input("telefono");
    $Contacto->Email = $request->input("Email");
    $Contacto->tema = $request->input("tema");
    $Contacto->mensaje = $request->input("mensaje");
    
    $Contacto->save();

    $message=["message" => "Registro Exitoso!!"];
        // return response()->json($message);
    return response()->json($message,Response::HTTP_CREATED);
    }


    public function update(Request $request){


    $idBook = $request->query("id");
    }
}