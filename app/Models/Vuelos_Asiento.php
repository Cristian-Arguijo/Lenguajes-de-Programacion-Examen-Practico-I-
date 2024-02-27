<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos_Asiento extends Model
{
    use HasFactory;
    protected $table = "_vuelos_asientos";
    protected $primaryKey = "idTipoAsiento";
    public $timestamps = false;
}
