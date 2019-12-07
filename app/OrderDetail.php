<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    
    protected $primaryKey = 'F_OrderDetailID';
    public $timestamps = false;
    protected $table = 't_orderdetail';

    public function Order()
    {
        return $this->belongsTo('App\Order','F_OrderID');
    }

}
