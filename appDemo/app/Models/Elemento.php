<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'numserie',
       'cantidad',
       'baja',
       'fechabaja',
        'motivobaja',
        'motivobaja',
       'ubicacions_id',

    ];

      //Relación de 1 a *
      public function ubicacion(){
        return $this->hasMany(Ubicacion::class);
    }


}
