<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhuyenMai;
use App\QuangCao;
use App\CuaHang;
use App\DichVu;
class DetailProDuctController extends Controller
{
    public function getdetail(Request $requset)
    {
        /*
     //  $data['id']=$id;
        $ct_dichvu = KhuyenMai::join_km_url()->where('id_khuyenmai',$req->id)->first();
      // dd($ct_dichvu);
      */
        $spKhuyenMai = KhuyenMai::find($requset->id);
        $dichVu = $spKhuyenMai->dichvu;
        $cuaHang = $spKhuyenMai->cuahang;
        return view('detail',compact('spKhuyenMai','dichVu','cuaHang'));


        
    }
     public function getsanphamcuahang($id)
     {
        $sp_cuahang=CuaHang::join_khuyenmai()->where('cuahang_id',$id)->get();
        $ten=$sp_cuahang->first();
        //$ten=CuaHang::where('id_cuahang',$id)->get();
        //dd($ten);
        return view('sp_dichvu',compact('id','sp_cuahang','ten'));
     }

   
 }
