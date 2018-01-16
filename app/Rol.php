<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $fillable = [
        'id',
        'name'
    ];
    protected $guarded = ['id'];
}
