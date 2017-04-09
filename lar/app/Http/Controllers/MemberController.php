<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Admin_member;
use Validator;
use Auth;
class MemberController extends Controller
{
     public function index(Request $request)
     {
        if(Auth::check())
        {
            $members=Admin_member::all();
            $auth=Auth::user();
              //dd($members);
             return view('admin.member.member',['members'=>$members,'auth'=>$auth]);
        }
        else
        {
          return redirect()->intended('/users/login');
        }
    }
    public function add_member(Request $request)
    {
    	$validate=Validator::make($request->all(),[
                'name'=>'required|max:254|unique:users|alpha',
                'gender'=> 'required| in:0,1',
                'birthday'=>'required|date',
                'email'=> 'required|regex:/^\w+\@gmail\.com$/|max:254|unique:users',
                'password' =>'required|between:6,12|',
                 'address'=>'required|max:256',
                'phone' =>'required|alpha_num|between:10,11|regex:/^0[0-9-+]+$/',
                'status'=>'required',
           ]);
        if($validate->fails())
        {
            return redirect('admin/member?add-new=true')->with(['errors'=>$validate->errors()]);
        }
        else
        {
            $members=new Admin_member();
            $members->name=$request->name;
            $members->gender=$request->gender;
            $members->birthday=$request->birthday;
            $members->email=$request->email;
            $members->password=bcrypt($request->password);
            $members->address=$request->address;
            $members->phone=$request->phone;
            $members->status=$request->status;
            $members->modified=$request->modified;
            $members->remember_token=$request->_token;
            $members->save();
            return redirect()->intended('admin/member')->with(['success'=>'success']);
        }
    }
    //get data by id
   public function get_id(Request $request){
      $id=$request->id; 
      $members=Admin_member::all();
      if(is_numeric($id) || intval($id !='0'))
      {
        $member=new Admin_member();
        $get= $member->get_id($id);//dd($get->toArray());
          if($get)
          {
            return view('admin.member.member',['members'=> $members ,'data_mem' => $get]);
          }
          else{
            return redirect('admin');
          }
        
      }
   }
//edit member by id
   public function edit_member(Request $request)
   {
      $id=$request->id;
      $validate=validator($request->all(),[
                'name'=>'required|max:254|unique:users|alpha',
                'gender'=> 'required| in:0,1',
                'birthday'=>'required|date',
                'email'=> 'required|regex:/^\w+\@gmail\.com$/|max:254|unique:users',
                'address'=>'required|max:256',
                'phone' =>'required|alpha_num|between:10,11|regex:/^0[0-9-+]+$/',
        ]);
      if($validate->fails())
      {
          return redirect()->route('getmember',[$id,'edit-new=true'])->with(['errors'=>$validate->errors()]);
      }
      else
      {

        $mem=Admin_member::find($id);
        if($mem)
        {
            $mem->name=$request->name;
            $mem->gender=$request->gender;
            $mem->birthday=$request->birthday;
            $mem->email=$request->email;
            $mem->address=$request->address;
            $mem->phone=$request->phone;
            $mem->status=$request->status;
            $mem->remember_token=$request->_token;
            $mem->save();
            return redirect()->intended('admin/member')->with(['success_up'=>'success']);
        }

      }
   }

   //delete theo id
   public function delete_member(Request $request){
      if(is_numeric($request->id))
      {
        $mem=new Admin_member();
       $mem->delete_id($request->id);
       return redirect()->intended('admin/member')->with(['success_de'=>'success']);
      }
   }
}
