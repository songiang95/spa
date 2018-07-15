<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanXet extends Model
{
    protected $table = "nhanxet";
    
    public function khuyenmai()
    {
        return $this->belongsTo('App\KhuyenMai','khuyenmai_id','id');
    }
    
    public function nguoidung()
    {
        return $this->belongsTo('App\NguoiDung','nguoidung_id','id');
    }
    
    public static function join_khuyenmai_km_url()
        {
           return  $km_muc_desc = \DB::table('nhanxet')
            ->join('khuyenmai','khuyenmai.id_khuyenmai','=','nhanxet.khuyenmai_id')
            ->join('khuyenmai_url','khuyenmai.id_khuyenmai','=','khuyenmai_url.khuyenmai_id')
            ->get();
        }
    
}
