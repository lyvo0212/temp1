<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Baum\Node;
class LoaiMatHang extends Node
{
    //
    protected $table  = 'loaimathang';
    public $timestamps = true;

     public function products(){
        return $this->hasMany(MatHang::class);
    }
    function k()
    {
    	$products = LoaiMatHang::find(1)->products;
		dd($products);
    }
}
