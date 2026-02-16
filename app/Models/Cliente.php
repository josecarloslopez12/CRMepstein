<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'telefono', 'direccion', 'foto', 'archivo'];

    // helpers
    public function getFotoUrlAttribute()
    {
        return $this->foto ? asset('storage/'.$this->foto) : null;
    }

    public function getArchivoUrlAttribute()
    {
        return $this->archivo ? asset('storage/'.$this->archivo) : null;
    }
}