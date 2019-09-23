<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thongtinxe extends Model
{
    protected $fillable = [
        'loaixe', 'tenxe','	doixe','mauxe'
    ];
    public function nhapxe(){
        return $this->belongsTo('App\nhapxe', 'thongtinxe_id','id');

    }
}
