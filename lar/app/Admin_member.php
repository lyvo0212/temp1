<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class Admin_member extends Model
{
    protected $table='members';
     public $timestamps = true;
   function get_id($id)
   {
   		if($id>0)
   		{
   			return Admin_member::where('id',$id)->first();
   		}
   }
   function delete_id($id)
   {
   		if(is_int($id))
   		{
   			Admin_member::where('id',$id)->delete();
  		}
  		else
  		{
  			Admin_member::WhereIn('id',explode(',',$id))->delete();
  		}
   }
}
