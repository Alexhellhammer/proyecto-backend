<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portafolio_contact;

class portafolio_contact_controller extends Controller
{
        public function read(Request $request){
            $score = new portafolio_contact();
            return true;
        }
        
        public function create(Request $request){
            $score = new portafolio_contact();
            $score -> name = $request -> input("name");
            $score -> numero_telefonico = $request -> input("numero telefonico");
            $score -> direccion_de_correo = $request -> input("direccion de correo");
            $score -> tema = $request -> input("tema");
            $score -> mensaje = $request -> input("mensaje")
            
            $score -> save();
            $message=["message"->"registro exitoso"];
            return response() -> json($message);
        }
        
        public function update(Request $request){
    
    
            return true;
        }
        
        public function delete(Request $request){
    
    
            return true;
        }
        
}
