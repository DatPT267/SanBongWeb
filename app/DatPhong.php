<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatPhong extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = "datphong";
    public function user()
    {
        return $this->hasManyThrough('App\ChiTietUser', 'App\User');
    }
    public function phongtn()
    {
        return $this->hasOne('App\PhongTN' , 'id' ,'id_phongtn' );
    }
}
