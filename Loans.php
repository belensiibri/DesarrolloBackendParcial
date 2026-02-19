<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Books;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loans extends Model
{
    protected $fillable = [
        'Nombre_solicitante',
        'Fecha_prestamo',
        'Fecha_devolucion',
    ];

    public function books(): BelongsTo {
        return $this->belongsTo(Books::class);
    }
}
