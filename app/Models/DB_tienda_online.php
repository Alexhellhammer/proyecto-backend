<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DB_tienda_online extends Model
{
    use HasFactory;
    protected $table = 'DB';
    protected $primarykey = "id";
    protected $fillable = ["Nombres","Apellidos", "Numero identificacion","E-mail","Telefono"];
}


