<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestions extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 't_suggestions';
}
