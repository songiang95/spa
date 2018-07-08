<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuaHang extends Model
{
    protected $table = "cuahang";
    
    public function cuahang_quangcao()
    {
        return $this->hasMany('App\QuangCao','cuahang_id','id_cuahang');
    }
      public function cuahangkhuyenmai()
    {
        return $this->hasMany('App\KhuyenMai','cuahang_id','id_cuahang');
    }
    public static function join_khuyenmai()
        {
           return \DB::table('cuahang')
            ->join('khuyenmai','cuahang.id_cuahang','=','khuyenmai.cuahang_id')
            ->join('khuyenmai_url','khuyenmai.id_khuyenmai','=','khuyenmai_url.khuyenmai_id')
            ;
        }
}
