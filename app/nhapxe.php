<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhapxe extends Model
{
    protected $fillable = [
        'somay', '	nhacc','ngaynhan','	mahd','ngayhd','maID','gianhap','kho_id','nhanvien_id','thongtinxe_id'
    ];
    public function kho(){
        return $this->hasOne('App\kho', 'kho_id','id');

    }
    public function nhanvien(){
        return $this->hasMany('App\nhanvien', 'nhanvien_id','id');
    }
    public function thongtinxe(){
        return $this->hasOne('App\thongtinxe', 'thongtinxe_id','id');
    }


}
