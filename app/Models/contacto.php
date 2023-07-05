<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    use HasFactory;
    protected $table = "contactos";
    protected $primarykey = "id";
    protected $fillable = ["name","telefono","e-mail","tema","mensaje"];
}