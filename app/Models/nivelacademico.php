<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
namespace App\Models;

use Eloquent as Model;


 class nivelacademico extends Model
 {
    protected $table="nivelacademico";

    protected $fillable = [
    'idnivelacademico',
    'descripcion'
    
  ];

  public $timestamps = false;
 } 

 ?> 