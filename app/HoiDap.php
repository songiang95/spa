<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoiDap extends Model
{
    protected $table = "hoidap";
    
    public function hoidap_khuyenmai()
    {
        return $this->belongsTo('App\KhuyenMai','khuyenmai_id','id_khuyenmai');
    }
}
