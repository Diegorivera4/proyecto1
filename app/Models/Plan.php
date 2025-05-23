<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'planes'; // Asegura que el modelo use la tabla correcta

    protected $fillable = ['nombre', 'precio', 'duracion', 'descripcion'];

}
