<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageSmart extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'page_smart';
}
