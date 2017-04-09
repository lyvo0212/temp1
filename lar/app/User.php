<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','GioiTinh','NgaySinh','DiaChi','DT','status','TongXu','ChucVu','id_LoaiNV','remember_token','updated_at','created_at',
    ];
    protected $hidden = [
         'password', 'remember_token',
     ];
     public $timestamp = true;


}
