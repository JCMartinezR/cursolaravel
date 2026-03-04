<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Etiqueta extends Model
{
    protected $table = "etiquetas";


    public static function articulosSegunEtiqueta($etiqueta){
        return DB::table('etiquetas AS e')
                ->join('articulo_etiqueta AS ae', 'e.id', 'ae.etiqueta_id')
                ->join('articulos AS a', 'a.id', 'ae.articulo_id')
                ->where('e.nombre', $etiqueta)
                ->select('a.*')
                ->get();
    }
    
    public function scopeFiltroEtiqueta($query, $etiqueta){
        return $query->where('nombre', $etiqueta);
    }

    public function articulos(): BelongsToMany{
        return $this->belongsToMany(Articulo::class, 'articulo_etiqueta', 'etiqueta_id', 'articulo_id');
    }
}
