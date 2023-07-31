<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paquetes extends Model
{
    protected $fillable = ['codigo', 'descripcion', 'direccion_destino', 'provincia_id', 'destinatario_id'];

    public function camionero()
    {
        return $this->belongsTo(Camionero::class);
    }

    public function provincie()
    {
        return $this->belongsTo(Provincie::class);
    }
};
