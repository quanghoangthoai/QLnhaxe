<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kho extends Model
{
    protected $table = 'kho';
    protected $fillable = [
        'dia_diem', 'name'
    ];
    public function nhapxe(){
        return $this->belongsTo('App\nhapxe', 'kho_id','id');
}
    public function banxe(){
        return $this->belongsTo('App\banxe', 'kho_id','id');
    }
    public function banxi(){
        return $this->belongsTo('App\banxi', 'kho_id','id');
    }
}
