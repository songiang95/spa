<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    protected $table = "nguoidung";
    
    public function nguoidung_loai()
    {
        return $this->belongsTo('App\LoaiNguoiDung','loainguoidung_id','id_loainguoidung');
    }
    
      public function nguoidung_nhanxet()
    {
        return $this->hasMany('App\NhanXet','nguoidung_id','id_nguoidung');
    }
    
      public function nguoidung_datlich()
    {
        return $this->hasMany('App\DatLich','nguoidung_id','id_nguoidung');
    }
    
      public function nguoidung_khuyenmaidx()
    {
        return $this->hasMany('App\KhuyenMaiDaXem','nguoidung_id','id_nguoidung');
    }
}
