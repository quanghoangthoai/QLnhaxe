<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $fillable = [
        'name', 'sdt'
    ];
    public function nhapxe(){
        return $this->belongsTo('App\nhapxe', 'nhanvien_id','id');

    }
    public function banxe(){
        return $this->belongsTo('App\nhanvien', 'nhanvien_id','id');
    }
}
