<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'photo', 'description', 'idUser', 'idCategorias'
    ];

}
