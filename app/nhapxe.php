<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhapxe extends Model
{
    protected $table = 'nhapxe';
    public function kho(){
        return $this->hasOne('App\kho', 'kho_id','id');

    }
    public function nhanvien(){
        return $this->hasOne('App\nhanvien', 'nhanvien_id','id');
    }
    public function thongtinxe(){
        return $this->hasOne('App\thongtinxe', 'thongtinxe_id','id');
    }


}
