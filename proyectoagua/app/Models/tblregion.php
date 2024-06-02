<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblregion extends Model
{
    use HasFactory;

    protected $table='tblregion';

    protected $fillable=[
        'nombre'
    ];
}
