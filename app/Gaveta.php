<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaveta extends Model
{
    //
    protected $table = 'gavetas';
    protected $fillable =[
        'gaveta',
    ];

    protected $hidden =[
        'created_at', 'updated_at'
    ];
}
