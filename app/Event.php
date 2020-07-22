<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{   
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = 'datphong';
    protected $fillable = ['title','color','start_date','end_date'];
    
    public function user()
    {
        return $this->belongsTo('App\ChiTietUser' ,'id_user','id');
    }
    public function phong(){
        return $this->belongsTo('App\PhongTN' ,'id_phongtn' ,'id' );
    }
}
