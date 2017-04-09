<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//vd jquery
Route::get('jquery', function() {
   return view('vd_jquery');
});

//trang san pham index
Route::get('eternal-beauty','IndexController@create_index');
Route::get('/','IndexController@create');

Route::group(['prefix'=>'/'],function(){
	Route::get('taotaikhoan','UserController@get_signup');
	//Sign in
	Route::post('dangky','UserController@post_signup');

	//log in
Route::group(['middleware' => 'checkLogin'],function(){
	Route::get('dangnhap','UserController@get_login');
	Route::post('dangnhap', 'UserController@post_login');
});
	Route::get('dangxuat',function()
	{
		
		if(Auth::check())
		{
			Auth::logout();
			
		}
		
	 		return redirect('/dangnhap');
	 	
	});
	
});



//trang loai san pham
Route::get('loaisanpham',function(){
	return view('sanpham.sanpham');
});

//trang chi tiet san pham
Route::get('chitiet',function(){
	return view('sanpham.chitiet');
});
//trang gio hang
Route::get('giohang',function(){
	return view('sanpham.giohang');
});
//trang dathang
Route::get('thanhtoan', function() {
    return view('sanpham.thanhtoan');
});
//trang đặt hàng thanh cong bang thanh toán khi nhận hang
Route::get('dathang', function() {
    return view('sanpham.dathangthanhcong');
});
//trang kiem tra don hang
Route::get('kiemtradonhang', function() {
    return view('sanpham.kiemtradonhang');
});
//trang thong tin tai khoan
Route::get('thongtintaikhoan', function() {
    return view('khachhang.thongtintaikhoan');
});
//trang don hang
Route::get('donhang', function() {
    return view('khachhang.donhang');
});
//trang chi tiet don hang
Route::get('chitietdonhang', function() {
    return view('khachhang.chitietdonhang');
});
//trang doi tra hang
Route::get('doitrahang', function() {
    return view('khachhang.doitrahang');
});
//trang chủ admin
Route::group(['prefix' => 'admin', 'middleware' => 'checkLogin'], function () {
	Route::get('/','AdminController@index');
	Route::group(['prefix'=>'member'],function(){
		Route::get('/', 'MemberController@index');
		Route::post('add','MemberController@add_member');
		Route::get('/{id}', ['as'=>'getmember','uses'=>'MemberController@get_id']);
		Route::post('edit/{id}','MemberController@edit_member');
		Route::get('delete/{id}', 'MemberController@delete_member');
	});
});




