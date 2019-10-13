<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{

    protected $table = 'khachhang';
    protected $fillable = [
        'hovaten', 'ngaysinh','sdt','diachi'
    ];
    public function congno(){
        return $this->belongsTo('App\congno', 'khachhang_id','id');
    }
    public function ktquatang(){
        return $this->belongsTo('App\ktquatang', 'khachhang_id','id');
    }
}
