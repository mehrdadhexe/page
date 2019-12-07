<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $primaryKey = 'F_ZoneID';
    public $timestamps = false;
    protected $table = 't_zone';

}
