<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblrecursoshidricos extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'ubicacion',
        'nivel_contaminacion'

    ];
}
