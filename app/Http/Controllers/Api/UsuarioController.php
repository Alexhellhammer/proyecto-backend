<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{

    public function read(Request $request){
        
        $user = new Usuario();
        
        if($request->query("id")){
            $Usuario=$user->find($request->query("id"));
        }else{
            $Usuario=$user->all();
        }
        return response()->json($Usuario);
    }
    

    public function create(Request $request){

        $usuario = new Usuario();

        $usuario->Nombres = $request->input("Nombres");
        $usuario->telefono = $request->input("telefono");
        $usuario->Email = $request->input("Email");
   

        $usuario->save();

        $message=["message" => "Resgistro Exitoso!!"];

        return response()->json($message,Response::HTTP_CREATED);
        
        
    }


    
    public function update(Request $request){


        $idUsuario = $request->query("id");

        $usuario = new Usuario();

        $newUsuario = $usuario->find($idUsuario);

        $newUsuario->Nombres = $request->input("Nombres");
        $newUsuario->telefono = $request->input("telefono");
        $newUsuario->Email = $request->input("Email");
        


        $newUsuario->save();

        $message=[
            "message" => "Actualización Exitosa!!",
            "idUsuario" => $request->query("id"),
            "nameUsuario"=>$newUsuario->name
        ];

        return $message;
    }

        

    public function delete(Request $request){

        $idUsuario = $request->query("id");

        $usuario = new Usuario();

        $newUsuario = $usuario->find($idUsuario);

        $newUsuario->delete();

        $message=[
            "message" => "Eliminación Exitosa!!",
            "idUsuario" => $request->query("id"),
        ];

        return $message;
    }


}