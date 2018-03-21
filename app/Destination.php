<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name','about','legacy','present','trivia','lat','lon','img_1',
        'img_2','img_3','img_4','img_5'
    ];
}
