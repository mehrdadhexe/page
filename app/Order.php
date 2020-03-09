<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $primaryKey = 'F_OrderID';
    public $timestamps = false;
    protected $table = 't_order';


    public function OrderDetail()
    {
        return $this->hasMany('App\OrderDetail', 'F_OrderID');
    }

    public function Barg()
    {
        return $this->belongsToMany('App\Barg', 'F_BargID');
    }

    public function User()
    {
        return $this->belongsTo('App\User', 'id');
    }

}
