<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    protected $table = "khuyenmai";
    
    public function khuyenmai_cuahang()
    {
        return $this->belongsTo('App\CuaHang','cuahang_id','id_cuahang');
    }
    
    public function khuyenmai_dichvu()
    {
        return $this->belongsTo('App\DichVu','dichvu_id','id_dichvu');
    }
    
      public function khuyenmai_url()
    {
        return $this->hasOne('App\KhuyenMai_HinhAnh','khuyenmai_id','id_khuyenmai');
    }
    
      public function khuyenmai_hoidap()
    {
        return $this->hasMany('App\HoiDap','khuyenmai_id','id_khuyenmai');
    }
    
      public function khuyenmai_nhanxet()
    {
        return $this->hasMany('App\NhanXet','khuyenmai_id','id_khuyenmai');
    }
    
      public function khuyenmai_daxem()
    {
        return $this->hasOne('App\KhuyenMai_Daxem','khuyenmai_id','id_khuyenmai');
    }
    public static function join_km_url()
        {
           return  $km_muc_desc = \DB::table('khuyenmai')
            ->join('khuyenmai_url','khuyenmai.id_khuyenmai','=','khuyenmai_url.khuyenmai_id')
            ->orderBy('muc_km','desc');
        }
    
    public static function join_nhanxet()
        {
           return  $km_muc_desc = \DB::table('khuyenmai')
            ->join('nhanxet','khuyenmai.id_khuyenmai','=','nhanxet.khuyenmai_id')
            ->get();
        }
        
    public static function join_km_daxem()
        {
           return  $km_muc_desc = \DB::table('khuyenmai')
            ->join('khuyenmai_daxem','khuyenmai.id_khuyenmai','=','Khuyenmai_daxem.khuyenmai_id')
            ->get();
        }
}
