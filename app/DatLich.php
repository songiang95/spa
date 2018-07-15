<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatLich extends Model
{
    protected $table = "datlich";
    
    public function khuyenmai()
    {
        return $this->belongsTo('App\KhuyenMai','khuyenmai_id','id');
    }
    
    public function nguoidung()
    {
        return $this->belongsTo('App\NguoiDung','nguoidung_id','id');
    }
}
