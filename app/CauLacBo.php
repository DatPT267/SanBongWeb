<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauLacBo extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $table = "caulacbo";
   
    public function thanhvien()
    {
        return $this->hasMany('App\ThanhVien','id_clb','id');
    }
    public function users() {
        return $this->hasManyThrough('App\User', 'App\ThanhVien');
    }

}
