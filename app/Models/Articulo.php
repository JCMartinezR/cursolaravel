<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Articulo extends Model
{
    protected $table = "articulos";


    protected $fillable = [
        "titulo",
        "usuario_id",
        "fecha_visualizacion",
        "portada",
        "descripcion",
        "contenido",
    ];


    public function autor(): BelongsTo {
        return $this->belongsTo(User::class, 'usuario_id', 'id');
    }

}
