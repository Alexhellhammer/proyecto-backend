<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $table = 'Contactos';
    protected $primarykey = "id";
    protected $fillable = ["Nombres","telefono", "E-mail","tema","mensaje"];
}
