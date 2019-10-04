<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class congno extends Model
{

    protected $fillable = [
        'ngaymua', 'giaban','tratruoc','tralan1','conlai','tientra','ngaytra','thongtinxe_id','	khachhang_id'
    ];
    public function thongtinxe(){
        return $this->hasMany('App\thongtinxe', 'thongtinxe_id','id');
    }
    public function khachhang(){
        return $this->hasMany('App\khachhang', 'khachhang_id','id');
    }

}
