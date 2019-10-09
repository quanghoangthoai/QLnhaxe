<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banxi extends Model
{
    protected $fillable = [
        'soHD', 'gianhap','tinhtrang','	giaban','noixuat','	ngayxuat','	kho_id','thongtinxe_id'
    ];
    public function kho(){
        return $this->hasMany('App\kho', 'kho_id','id');
    }
    public function thongtinxe(){
        return $this->hasMany('App\thongtinxe', 'thongtinxe_id','id');
    }
}
