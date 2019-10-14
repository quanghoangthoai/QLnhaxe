<?php

namespace App;
use App\banxe;

use Illuminate\Database\Eloquent\Model;

class quatang extends Model
{

    protected $table='quatang';
    protected $fillable = [
        'tenquatang'
    ];
    public function banxe(){
        return $this->belongsTo('App\banxe', 'quatang_id','id');
    }
    public function ktquatang(){
        return $this->belongsTo('App\ktquatang', 'quatang_id','id');
    }
}
