<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $primaryKey = 'F_RateID';
    public $timestamps = false;
    protected $table = 't_rate';

    public function Barg()
    {
        return $this->belongsTo('App\Barg','F_BargID');
    }
}
