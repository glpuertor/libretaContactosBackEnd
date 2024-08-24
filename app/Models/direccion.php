<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contacto;

class direccion extends Model
{
    use HasFactory;
    public function contacto()
    {
        return $this->belongsTo(Contacto::class);
    }
}
