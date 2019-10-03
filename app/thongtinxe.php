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
}
