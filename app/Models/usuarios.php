<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        'numeroCedula',
        'primerNombre',
        'segundoNombre',
        'apellidos',
        'direccion',
        'telefono',
        'ciudad',
    ];

}
