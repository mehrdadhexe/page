<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $primaryKey = 'F_LikeID';
    public $timestamps = false;
    protected $table = 't_like';


    public function Barg()
    {
        return $this->belongsTo('App\Barg','F_BargID');
    }

    
}
