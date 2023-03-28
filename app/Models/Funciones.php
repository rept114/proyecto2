<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funciones extends Model
{
    use HasFactory;
    protected $table = 'funciones';
    public function peliculas()
    {
        return $this->belongsToMany(Peliculas::class);
    }
}
