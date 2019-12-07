<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'F_JobID';
    public $timestamps = false;
    protected $table = 't_job';

    public function Job()
    {
        return $this->belongsTo('App\Barg','F_BargID');
    }

}
