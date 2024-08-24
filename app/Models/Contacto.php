<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\direccion;
use App\Models\email;
use App\Models\telefono;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'notas', 'cumple', 'paginaWeb', 'empresa'];

    public function direccion()
    {
        return $this->hasMany(direccion::class);
    }
    public function email()
    {
        return $this->hasMany(email::class);
    }
    public function telefono()
    {
        return $this->hasMany(telefono::class);
    }
}
