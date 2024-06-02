<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblimpactoambiental extends Model
{
    use HasFactory;

    protected $table='tblimpactoambiental';
    
    protected $fillable=[
        'tipo_impacto',
        'descripcion',
        'fecha_registro'
    ];
}
