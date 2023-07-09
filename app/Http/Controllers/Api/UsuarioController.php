<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function read(Request $request){
        // instancia modelo contacto
        $user = new Usuario();
        
        if($request->query("id")){
            $Usuario=$user->find($request->query("id"));
        }else{
            $Usuario=$user->all();
        }
        return response()->json($Usuario,);
    }


    public function create(Request $request){

        
    $Usuario = new Usuario();

    $Usuario->Nombres = $request->input("Nombres");
    $Usuario->telefono = $request->input("telefono");
    $Usuario->Email = $request->input("Email");
  
    
    $Usuario->save();

    $message=["message" => "Registro Exitoso!!"];
        // return response()->json($message);
    return response()->json($message,Response::HTTP_CREATED);
    }


    public function patch(Request $request){


        $idUsuario = $request->query("id");

        $Usuario = new Usuario();

        $newUsuario = $Usuario->find($idUsuario);

        $newUsuario->Nombres = $request->input("Nombres");
        $newUsuario->telefono = $request->input("telefono");
        $newUsuario->Email = $request->input("Email");
        
        $newUsuario->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "idUsuario" => $request->query("id"),
            "nameBook"=>$newUsuario->Nombres
        ];

        return $message;
    }

    public function delete(Request $request){

        $idUsuario = $request->query("id");

        $Usuario = new Usuario();

        $newUsuario = $Usuario->find($idUsuario);

        $newUsuario->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "idUsuario" => $request->query("id"),
        ];

        return $message;
    }


}
