<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{

    protected $fillable = [
        'Hovaten', 'ngaysinh','sdt','diachi'
    ];
}
