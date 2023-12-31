<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'ubicacion',
       'planta',
    ];
    public function elemento()
    {
        return $this->belongsTo(Elemento::class);
    }
}
