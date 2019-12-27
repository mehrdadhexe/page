<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barg extends Model
{
    protected $primaryKey = 'F_BargID';
    public $timestamps = false;
    protected $table = 't_barg';

    public function Comment()
    {
        return $this->hasMany('App\Comment','F_BargID');
    }

    public function Like()
    {
        return $this->hasMany('App\Like','F_BargID');
    }

    public function City()
    {
        return $this->belongsTo('App\City','F_CityID');
    }

    public function Media()
    {
        return $this->hasMany('App\Media','F_MediaID');
    }

    public function Festival()
    {
        return $this->hasMany('App\Festival','F_FestivalID');
    }

    public function OrderDetail()
    {

        return $this->belongsTo('App\OrderDetail','F_BargID');
    }

    public function ordercount()
    {

        return $this->belongsTo('App\OrderDetail','F_BargID');
    }

    public function Rate()
    {
        return $this->hasMany('App\Rate','F_BargID');
    }
    public function DocumentDetail()
    {
        return $this->hasMany('App\DocumentDetail','F_BargID');
    }















    
}
