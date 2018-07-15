<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table = "dichvu";
    public $timestamps = false;
    
      public function khuyenmai()
    {
        return $this->hasMany('App\KhuyenMai','dichvu_id','id');
    }
    
    public static function join_khuyenmai()
    {
       return  \DB::table('dichvu')
                        ->join('khuyenmai', 'dichvu.id_dichvu', '=', 'khuyenmai.dichvu_id')
                        ;
    }
    
}

