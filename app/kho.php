<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kho extends Model
{

    protected $fillable = [
        'dia_diem', 'name'
    ];
    public function nhapxe(){
        return $this->belongsTo('App\nhapxe', 'kho_id','id');
}
}
