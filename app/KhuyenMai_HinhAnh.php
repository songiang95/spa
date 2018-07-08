<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai_HinhAnh extends Model
{
    protected $table = "khuyenmai_url";
    
    public function url_khuyenmai()
    {
        return $this->belongsTo('App\KhuyenMai','khuyenmai_id','id_khuyenmai');
    }
}
