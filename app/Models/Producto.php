<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model {
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'stock', 'imagen', 'archivo'];

    public function getImagenUrlAttribute()
    {
        return $this->imagen ? asset('storage/'.$this->imagen) : null;
    }

    public function getArchivoUrlAttribute()
    {
        return $this->archivo ? asset('storage/'.$this->archivo) : null;
    }
}