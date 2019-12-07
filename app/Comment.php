<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'F_CommentID';
    public $timestamps = false;
    protected $table = 't_comment';

    public function Barg()
    {
        return $this->belongsTo('App\Barg','F_BargID');
    }


}
