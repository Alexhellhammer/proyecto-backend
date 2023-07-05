<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio_contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primarykey = "id";
    protected $fillable = ["name","telefono","e-mail","tema","mensaje"];
}
