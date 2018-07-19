<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referencias extends Model
{

    protected $primaryKey='idreferencias';
    protected $table='referencias';

    protected $fillable=['codigo','nombre'];

    public $timestamps = false;

}



?>
