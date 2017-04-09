<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatHang extends Model
{
	protected $table  = 'mathang';
    public $timestamps = true;
    //
    public function cate()
    {
        return $this->belongsTo('LoaiMatHang');
    }
}
