<?php



namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
     protected $table= 'users';
     protected $fillable=['nombre','email','password','rol'];
     protected $hidden=['password','remember_token'];
     public $timestamps = false;
}

?>



