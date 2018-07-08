<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatLich extends Model
{
    protected $table = "datlich";
    
    public function datlich_khuyenmai()
    {
        return $this->belongsTo('App\KhuyenMai','khuyenmai_id','id_khuyenmai');
    }
    
    public function datlich_nguoidung()
    {
        return $this->belongsTo('App\NguoiDung','nguoidung_id','id_nguoidung');
    }
}
