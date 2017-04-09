<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
	
	public function get_signup()
	{
		if (Auth::check() || Auth::viaRemember()) {
    			return redirect()->intended('/');
    	}
    	else{
		return view('sanpham.dangky');
		}
	
	}
	public function post_signup(Request $request) 
	{
			$validate=Validator::make($request->all(),[
				'name'=>'required|max:254|unique:users|alpha',
				'email'=> 'required|regex:/^\w+\@gmail\.com$/|max:254|unique:users',
				'GioiTinh'=> 'required| in:Nam,Nữ',
				'NgaySinh'=>'required|date',
				'password' =>'required|between:6,12',
				'password_confirmation'=>'required|between:6,12|same:password',
				'DiaChi'=>'required|max:256',
				'DT' =>'required|alpha_num|between:10,11|regex:/^0[0-9-+]+$/'
				]);
			if($validate->fails())
			{
					return redirect()->back()->with(['errors'=> $validate->errors()]);
			}
			else{
				$params=$request->all();
				
		    	//gọi model User.php đã được tạo
					$user=new User();
					$user->name=$request->name;
		            $user->GioiTinh=$request->GioiTinh;
		            $user->NgaySinh=$request->NgaySinh;
		            $user->email=$request->email;
		            $user->password=bcrypt($request->password);
		            $user->DiaChi=$request->DiaChi;
		            $user->DT=$request->DT;
		            $user->status='1';
		            $user->id_LoaiNV='2';
		            $user->remember_token=$request->_token;
		            $user->save();
					Auth::login($user);
					return redirect()->intended('/')->with(['success-dangky'=>'success']);
				
		}
	}
	public function get_login()
	{
		if (Auth::check() || Auth::viaRemember()) {
    			return redirect()->intended('/');
    	}
    	else{
    		return view('sanpham.dangnhap');
    		}
	}

    public function post_login(Request $request)
    { 
    	$validate=Validator::make($request->all(),[
		    		'email'=>'required|regex:/^\w+\@gmail\.com$/|max:254',
		    		'password'=>'required|max:12|min:6']);
		    	if($validate->fails())
		    	{
		    		return redirect()->back()->with(['errors'=>$validate->errors()]);
		    	}
		    	else { // kiem tra du lieu input hop le hay ko vs csdl --ghi nhớ remember me ko
		    		// dd(User::all());
		    		// dd(bcrypt($request->password));

			    		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'status'=>'1'],$request->has('remember')))
			    		{ 
			    				
				    			return redirect()->intended('admin');
			    					
			    		}
			    		else
			    		{
				 					return redirect()->back()->with(['error'=>'fail']);
				    	}
		    	}
		    
    }  
}
