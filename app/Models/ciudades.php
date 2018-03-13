<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
namespace App\Models;

use Eloquent as Model;


 class ciudades extends Model
 {
    protected $table="ciudades";

    protected $fillable = [
    'idCiudades',
    'Paises_Codigo',
    'Ciudad'
    
  ];

  public $timestamps = false;
 } 

 ?> 