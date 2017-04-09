<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideshow extends Model
{
    //
     protected $table = 'slideshow';
    public $timestamps = true;
    public function getslide()
    {
    	return Slideshow::where('TinhTrang',1)->get()->toArray();
    	//dd(Slideshow::where('TinhTrang',1)->get()->toArray());
    }
}
