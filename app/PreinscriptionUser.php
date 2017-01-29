<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreinscriptionUser extends Model
{
    //value fillable
    protected $fillable = ['email', 'commune', 'cp', 'type_user_id'];

}
