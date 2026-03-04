<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Articulo extends Model
{
    protected $table = "articulos";


    public function autor(): BelongsTo {
        return $this->belongsTo(User::class, 'usuario_id', 'id');
    }

}
