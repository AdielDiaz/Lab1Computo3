<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblfuentedecontaminacion extends Model
{
    use HasFactory;

    protected $table='tblfuentedecontaminacion';

    protected $fillable=[
        'tipo'
    ];
}
