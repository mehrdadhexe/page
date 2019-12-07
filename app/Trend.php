<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trend extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 't_trend';



    public function Barg()
    {
        return $this->hasMany('App\Barg','F_TrendID');
    }
}
