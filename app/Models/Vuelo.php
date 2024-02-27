<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    protected $table = "_vuelos";
    protected $primaryKey = "numeroVuelo";
    public $timestamps = false;
}
