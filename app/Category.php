<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $primaryKey = 'F_CategoryID';
    public $timestamps = false;
    protected $table = 't_category';



    public function Barg()
    {
        return $this->hasMany('App\Barg','F_CategoryID');
    }

   
}
