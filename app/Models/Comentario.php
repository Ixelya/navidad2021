<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class);
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

}