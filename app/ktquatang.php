<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ktquatang extends Model
{
    //

    protected $fillable = [
        'ngaynhan', 'quatang_id','khachhang_id','thongtinxe_id'
    ];
    public function khachhang(){
        return $this->hasMany('App\khachhang', 'khachhang_id','id');
    }
    public function quatang(){
        return $this->hasMany('App\quatang', 'quatang_id','id');
    }
    public function thongtinxe(){
        return $this->hasMany('App\thongtinxe', 'khachhang_id','id');
    }
}
