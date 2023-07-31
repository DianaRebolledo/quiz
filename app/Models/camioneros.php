<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camionero extends Model
{
  
   
    protected $fillable = ['nombre', 'telefono', 'direccion', 'salario'];

    public function camiones()
    {
    return $this->hasMany(camions::class);
}
public function paquetes()
{
        return $this->hasMany(paquetes::class);
    
}};
