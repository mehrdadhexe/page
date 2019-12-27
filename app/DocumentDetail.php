<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentDetail extends Model
{
    protected $primaryKey = 'f_DocumentDetailID';
    public $timestamps = false;
    protected $table = 't_documentdetail';

    public function Document()
    {
        return $this->belongsTo('App\Document','F_DocumentID');
    }

    public function Barg()
    {
        return $this->belongsTo('App\Barg','F_BargID');
    }

    public function User()
    {
        return $this->belongsTo('App\User','id');
    }
}
