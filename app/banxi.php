<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banxi extends Model
{
    protected $table='banxi';
    protected $fillable = [
        'soHD', 'gianhap','tinhtrang','	giaban','noixuat','	ngayxuat','	kho_id','thongtinxe_id'
    ];
    public function kho(){
        return $this->belongsTo('App\kho', 'kho_id','id');
    }
    public function thongtinxe(){
        return $this->belongsTo('App\thongtinxe', 'thongtinxe_id','id');
    }
}
