<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
namespace App\Models;

use Eloquent as Model;


 class usuarios extends Model
 {
    protected $table="usuarios";

    protected $fillable = [
    'idusuario',
    'nombres',
    'correo',
    'paises_Codigo',
    'ciudades_idCiudades',
    'nivelacademico_idnivelacademico',
        'telefono'
    
  ];

  public $timestamps = false;
 } 

 ?> 