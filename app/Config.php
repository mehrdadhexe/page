<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $primaryKey = 'F_CommentID';
    public $timestamps = false;
    protected $table = 't_config';

    public function Get($key)
    {
        return DB::table('t_config')->where('F_Key',$key)->first();
    }
}
