<?php

namespace App;
use App\nhapxe;
use App\kho;
use App\quatang;
use App\tragop;
use App\nhanvien;
use Illuminate\Database\Eloquent\Model;

class banxe extends Model
{
    protected $fillable = [
        'soHD', 'giaban','duatruoc','conlai','tinhtrang','Hovaten','ngaysinh','SDT','ngaymua','diachi','phuong','thanhpho',
        'tinh','thongtinxe_id','kho_id','tragop_id','nhanvien_id','quatang_id'
    ];
    public function quatang(){
        return $this->hasMany('App\quatang', 'quatang_id','id');
    }
    public function thongtinxe(){
        return $this->hasMany('App\thongtinxe', 'thongtinxe_id','id');
    }
    public function kho(){
        return $this->hasMany('App\kho', 'kho_id','id');
    }
    public function tragop(){
        return $this->hasMany('App\tragop', 'tragop_id','id');
    }
    public function nhanvien(){
        return $this->hasMany('App\nhanvien', 'nhanvien_id','id');
    }

}
