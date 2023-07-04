<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DB_restaurant extends Model
 {
     use HasFactory;
     protected $table = 'd_b_restaurants';
     protected $primarykey = "id";
     protected $fillable = ["Nombres","Apellidos", "Numero identificacion","E-mail","Telefono"];
 }
