<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banxe extends Model
{
    protected $fillable = [
        'soHD', 'giaban','duatruoc','conlai','tinhtrang','Hovaten','ngaysinh','SDT','ngaymua','diachi','phuong','thanhpho',
        'tinh','thongtinxe_id','kho_id','tragop_id','nhanvien_id','quatang_id'
    ];


}
