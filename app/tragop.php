<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tragop extends Model
{

    protected $fillable = [
        'loaitragop'
    ];
    public function banxe(){
        return $this->belongsTo('App\banxe', 'tragop_id','id');
    }
}
