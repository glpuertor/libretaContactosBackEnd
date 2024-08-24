<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'notas', 'cumple', 'paginaWeb', 'empresa'];

    public function direccion()
    {
        return $this->hasMany(direccion::class);
        return $this->hasMany(email::class);
        return $this->hasMany(telefono::class);
    }
}
