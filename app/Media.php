<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $primaryKey = 'F_MediaID';
    public $timestamps = false;
    protected $table = 't_media';

    
    public function Barg()
    {
        return $this->belongsTo('App\Barg','F_BargID');
    }
}
