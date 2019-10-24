<?php
namespace App;
use App\thongtinxe;
use App\kho;
use App\quatang;
use App\tragop;
use App\nhanvien;
use App\banxe;
use Illuminate\Database\Eloquent\Model;
class banxe extends Model
{
    protected $fillable = [
        'id', 'giaban','duatruoc','conlai','tinhtrang','Hovaten','ngaysinh','SDT','ngaymua','diachi','phuong','thanhpho',
        'tinh','thongtinxe_id','kho_id','tragop_id','nhanvien_id','quatang_id'
    ];
    public function quatang(){
        return $this->belongsTo('App\quatang', 'quatang_id','id');
    }
    public function thongtinxe(){
        return $this->belongsTo('App\thongtinxe', 'thongtinxe_id','id');
    }
    public function kho(){
        return $this->belongsTo('App\kho', 'kho_id','id');
    }
    public function tragop(){
        return $this->belongsTo('App\tragop', 'tragop_id','id');
    }
    public function nhanvien(){
        return $this->belongsTo('App\nhanvien', 'nhanvien_id','id');
    }
}
