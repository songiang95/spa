<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    protected $table = "nguoidung";
    
    public function loai_nguoi_dung()
    {
        return $this->belongsTo('App\LoaiNguoiDung','loainguoidung_id','id');
    }
    
      public function nhanxet()
    {
        return $this->hasMany('App\NhanXet','nguoidung_id','id');
    }
    
      public function datlich()
    {
        return $this->hasMany('App\DatLich','nguoidung_id','id');
    }
    
      public function khuyenmaidx()
    {
        return $this->hasMany('App\KhuyenMaiDaXem','nguoidung_id','id');
    }
}
