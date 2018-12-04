<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_login extends Model
{
    protected $table = 'users_login';

    protected $fillable = ['name','firstname', 'nickname','email','company','password','phone','profession','statut'];
}
