<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = 'nhanvien';
    public function nhapxe(){
        return $this->belongsTo('App\nhapxe', 'nhanvien_id','id');

    }
}
