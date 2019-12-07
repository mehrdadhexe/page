<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    
    protected $primaryKey = 'F_CityID';
    public $timestamps = false;
    protected $table = 't_city';

    public function Barg()
    {
        return $this->hasMany('App\Barg','F_CityID');
    }

}
