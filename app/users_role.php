<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users_role extends Model
{
    protected $fillable = [
        'name', 'note','users_id'
    ];
    public function user(){
        return $this->hasMany('App\user', 'users_id','id');
    }

}
