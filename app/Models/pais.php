<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
namespace App\Models;

use Eloquent as Model;


 class pais extends Model
 {
    protected $table="paises";

    protected $fillable = [
    'codigo',
    'Pais'    
  ];

  public $timestamps = false;
 } 

 ?> 