<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival extends Model
{
    protected $primaryKey = 'F_FestivalID';
    public $timestamps = false;
    protected $table = 'f_festival';
    

}
