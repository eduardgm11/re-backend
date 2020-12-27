<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaveta extends Model
{
    //
    protected $table = 'gavetas';
    protected $fillable =[
       'id', 'gaveta',
    ];

    protected $hidden =[
        'created_at', 'updated_at'
    ];

    public function tarjetas()
    {
        return $this->hasMany('App\Tarjeta');
    }

}
