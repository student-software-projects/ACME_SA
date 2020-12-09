<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoVehiculos extends Model
{
    use HasFactory;

    protected $table = 'tipo_vehiculos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'descTipoVehiculos'
    ];

}
