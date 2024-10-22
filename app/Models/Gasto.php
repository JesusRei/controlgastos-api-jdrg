<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gasto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'monto',
        'fecha',
        'categoria',
        'notas',
        'recurrente',
        'metodo_pago',
        'frecuencia',
        'estado',
        'moneda',
        'proveedor',
    ];
}
