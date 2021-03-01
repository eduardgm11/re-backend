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
        'disciplina',
        'tamano',
        'unidad',
        'tipo_documento',
        'imagenes',
        'observacion',
        'PDF',

    ];

    protected $hidden =[
        'created_at', 'updated_at'
    ];

    public function gaveta()
    {
        return $this->belongsTo('App\Gaveta');
    }
}
