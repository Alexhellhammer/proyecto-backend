<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio_contact extends Model
{
    use HasFactory;
    protected $table = 'score'
    protected $primarykey = "id"
    protected $fillable = ["name","numero telefonico","direccion de correo","tema","mensaje"]
}
