<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Restaurant;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    public function create(Request $request){

        
        $Cliente = new Restaurant();
    
        $Cliente->Nombres = $request->input("Nombres");
        $Cliente->Apellidos = $request->input("Apellidos");
        $Cliente->cedula = $request->input("cedula");
        $Cliente->Email = $request->input("Email");
        $Cliente->Telefono = $request->input("Telefono");
        
        $Cliente->save();
    
        $message=["message" => "Registro Exitoso!!"];
            // return response()->json($message);
        return response()->json($message,Response::HTTP_CREATED);
        }
   
    public function read(Request $request){
        
        $user = new Restaurant();
        
        if($request->query("id")){
            $Restaurant=$user->find($request->query("id"));
        }else{
            $Restaurant=$user->all();
        }
        return response()->json($Restaurant);
    }
}
