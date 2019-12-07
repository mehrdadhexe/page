<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 't_slider';

}
