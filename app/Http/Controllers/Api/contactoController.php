<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacto;
use Illuminate\Http\Response;

class contactoController extends Controller
{
    public function read(Request $request){

        $Contacto = new Contacto();
        
        if($request->query("id")){
            $Contacto=$user->find($request->query("id"));
            else{
                $Contacto=$user->all();
            }
            return response()->json($Contacto)
        }
    }
}    