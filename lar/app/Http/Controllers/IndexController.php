<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slideshow;use App\LoaiMatHang;
use Illuminate\Support\Facades\View;
class IndexController extends Controller
{
    //
    public function create_index()
	{
		$slide=Slideshow::all();
    	return view('index',['slide'=>$slide]);

	}
	public function create()
	{
		$g=new LoaiMatHang();
		$g->k();
		return view('sanpham.index');

	}
}
