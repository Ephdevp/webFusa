<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    use HasFactory;

    protected $table = "tb_catalogo";

    protected $fillable =[
        "categoria_prod",
        "nombre_prod",
        "imagen_url",
        "descripcion",
        "precio_cup",
        "precio_usd",
        "publicado_por",
        "editado_por"
    ];
}
