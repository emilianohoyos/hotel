<?php

namespace App/Models;

use Illuminate\Notifications\Notifiable;
unamespace App\Models;

use Eloquent as Model;


 class admin extends Model
 {
    protected $table="admin";

    protected $fillable = [
    'id_admin',
    'clave'
    
  ];

  public $timestamps = false;
 } 

 ?> 