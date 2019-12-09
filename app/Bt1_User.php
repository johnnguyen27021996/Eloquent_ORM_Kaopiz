<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bt1_User extends Model
{
    protected $table = 'bt1__users';

    protected $fillable = [
        'id', 'name', 'class'
    ];

    public $timestamps = true;
}
