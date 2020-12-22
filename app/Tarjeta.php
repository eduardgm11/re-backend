<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    //
    protected $table = 'tarjetas';
    protected $fillable =[
        'id_tarjeta',
        'gaveta',
        'disiplina',
        'tamano',
        'unidad',
        'tipo_documento',
        'imagenes',
        'observacion',
        'PDF',
        'gaveta_id'
    ];

    protected $hidden =[
        'created_at', 'updated_at'
    ];


}
