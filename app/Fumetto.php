<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumetto extends Model
{
    //

    protected $fillable = [

        'title',
        'description',
        'image',
        'series',
        'price',
        'type',
        'date',
        'slug'

    ];
}
