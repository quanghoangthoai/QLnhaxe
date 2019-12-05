<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khophukien extends Model
{
    protected $table='khophukien';
    protected $fillable=[
        'tenkho','dia_diem','tenphukien','soluongton','nhap','ngaynhap','conlai'
    ];
}
