<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $fillable = [
   'title','subtitle','type','date','image', 'short_dep', 'long_dep','image_two'
];
   
}
