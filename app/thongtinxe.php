<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thongtinxe extends Model
{
    protected $fillable = [
        'loaixe', 'tenxe','	doixe','mauxe','sokhung','somay'
    ];
    public function nhapxe(){
        return $this->belongsTo('App\nhapxe', 'thongtinxe_id','id');

    }
    public function banxe(){
        return $this->belongsTo('App\banxe', 'thongtinxe_id','id');
    }
    public function congno(){
        return $this->belongsTo('App\congno', 'thongtinxe_id','id');
    }
    public function ktquatang(){
        return $this->belongsTo('App\ktquatang', 'thongtinxe_id','id');
    }


}
