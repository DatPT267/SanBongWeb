<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truong extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $table = "truong";
   
    public function phongtn()
    {
        return $this->hasMany('App\PhongTN','id_truong','id');
    }
}
