<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kho extends Model
{
    protected $table = 'kho';

    public function nhapxe(){
        return $this->belongsTo('App\nhapxe', 'kho_id','id');

}
}
