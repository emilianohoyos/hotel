<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    protected $table="paises";

    protected $fillable = [
        'Codigo',
        'Pais'
    ];

    public $timestamps = false;
}
