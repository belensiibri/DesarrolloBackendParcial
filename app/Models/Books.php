<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Books extends Model
{
    use HasFactory;

    protected $fillable =[
        'Titulo',
        'Descripcion',
        'ISBN',
        'Copias_totales',
        'Copias_disponibles',
        'Estado'
    ];

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }
    


}
