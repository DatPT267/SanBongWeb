<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $table = "thanhvien";
   
    public function caulacbo()
    {
        return $this->belongsTo('App\CauLacBo','id_clb');
    }
}
