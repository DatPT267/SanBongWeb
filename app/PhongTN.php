<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongTN extends Model
{   
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = "phongtn";
    public function loaiphong()
    {
        return $this->hasOne('App\LoaiPhong' ,'id' , 'id_loai');
    }
    public function truong()
    {
        return $this->hasOne('App\Truong' , 'id' ,'id_truong' );
    }
   
}
