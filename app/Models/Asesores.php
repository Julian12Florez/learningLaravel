<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asesores extends Model
{
    protected $primaryKey = 'idvendedor';
    protected $table = 'vendedores';

    protected $fillable = [
       'codigo','nombre'
    ];

    public $timestamps = false;

}
