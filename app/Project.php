<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title','subtitle' ,'image', 'short_dep', 'long_dep','image_two'
    ];
}
