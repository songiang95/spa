<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuangCao extends Model
{
    protected $table = "quangcao";
    
    public function quangcao_cuahang()
    {
        return $this->belongsTo('App\CuaHang','id_cuahang','id_cuahang');
    }
    public static function join_cuahang_km_url()
        {
           return \DB::table('quangcao')
            ->join('cuahang','quangcao.cuahang_id','=','cuahang.id_cuahang')
            //->join('khuyenmai','cuahang.id_cuahang','=','khuyenmai.cuahang_id')
            //->join('khuyenmai_url','khuyenmai.id_khuyenmai','=','khuyenmai_url.khuyenmai_id')
            ;
        }
    
}
