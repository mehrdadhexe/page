<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    

    protected $primaryKey = 'F_DocumentID';
    public $timestamps = false;
    protected $table = 't_document';

    public function Order()
    {
        return $this->belongsTo('App\Order','F_DocID');
    }

    public function User()
    {
        return $this->belongsTo('App\User','id');
    }

    public function DocumentDetail()
    {
        return $this->hasMany('App\DocumentDetail','F_DocumentDetailID');
    }


}
