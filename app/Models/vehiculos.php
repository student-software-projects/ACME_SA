<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'placa',
        'color',
        'marca',
        'tipoVehiculo',
        'conductor',
        'usuarios_id',
    ];

}
