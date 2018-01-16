<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = [
        'id',
        'name'
    ];
    protected $guarded = ['id'];
}
