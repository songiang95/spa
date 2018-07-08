<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai_DaXem extends Model
{
    protected $table = "khuyenmai_daxem";
    
    public function khuyenmaidx_khuyenmai()
    {
        return $this->hasMany('App\KhuyenMai','khuyenmai_id','id_khuyenmai');
    }
    
    public function khuyenmaidx_nguoidung()
    {
        return $this->hasMany('App\NguoiDung','nguoidung_id','id_nguoidung');
    }
    
    public static function join_khuyenmai()
        {
           return  $km_muc_desc = \DB::table('khuyenmai_daxem')
            ->join('khuyenmai','khuyenmai.id_khuyenmai','=','Khuyenmai_daxem.khuyenmai_id')
            ->join('khuyenmai_url','khuyenmai.id_khuyenmai','=','khuyenmai_url.khuyenmai_id')
            ->get();
        }
}
