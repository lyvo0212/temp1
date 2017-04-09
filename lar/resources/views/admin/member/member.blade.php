@extends('admin.master')
@section('title','List Staff')
@section('btn-action')
   <div class="col-sm-6 btn-function">

	   <label class="btn btn-info" data-toggle="modal" data-target="#myModal" style="margin-left: 1px;">
	 		<a href="{{url('/')}}/admin/member?add-new=true" style="color: white; list-style: none; ">
	 			<i class="fa fa-plus-circle"></i>Add</a>
	 	</label>

 		<label class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="margin-left: 1px;">
	 		<a href="{{url('/')}}/admin/member?add-new=true" style="color: white; list-style: none; ">
	 			<i class="fa fa-trash-o"></i>Delete</a>
	 	</label>
    
</div>
@endsection
@section('content')
<div id="example_wrapper" class="dataTables_wrapper" style="padding-bottom: 5px";>

		<table id="example" class="display dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 98%; margin:3px 9px; border:1px solid #dddddd;padding-left: 17px; ">
 			<thead >
 				<tr>
 					<th ></th>
 					<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column descending" style="width: 90px;">Username</th>
 					<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 40px;">Gender</th>
 					<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 180px;">Email</th>
 					<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 90px;">Status</th>
 					<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Modified: activate to sort column ascending" style="width: 75px;">Modified by</th>
 					<th>Action</th>
 					<!-- <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 92px;">Start date</th>
							<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 79px;">Salary</th> -->
 				</tr>
 			</thead>
 			<tbody>
 			@if($members->count()>0)
 				@foreach($members as $member)
 				<tr role="row" class="even">
 					<td>
						 <label>
					     	 <input type="checkbox" class="cid" name="cid[]" value="' + {{$member->id}} +'"> 
					    </label>
					</td>
 					<td class="sorting_1" name="username">{{$member->name}}</td>
 					<td name="gender">
 						@if($member->gender=="0")
 							<label>
	   							 <p>Nam</p>
							 </label>
						@else 
							<label>
	   							 <p>Nữ</p>
							</label>
						@endif
					</td>
 					<td name="email">{{$member->email}}</td>
 					<td>
 						<div class="checkbox">
   							@if($member->status=="1")
	   							 <label>
	   							 		<p>Hoạt động</p>
								 </label>
							 @else 
								 <label>
								       	<p>Không hoạt động</p>
								 </label>
							@endif
  						</div>
 					</td>
 					<td name="modified">{{$member->modified}}</td>
 					<td>

 					<!-- Button trigger modal -->
					<!-- <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#myModal">Add</button> -->
 						<label class="btn btn-primary pull-left" data-toggle="modal" data-target="#myModal" style="margin-left: 1px;">
 							<a href="{{url('/')}}/admin/member?add-new=true" style="color: white; list-style: none; ">Add</a>
 						</label>
 						@include('admin.member.member_add')
 						
 						<label class="btn btn-primary pull-left"data-toggle="modal" data-target="#myModal"  style="margin-left: 1px;" >
 							<a href="{{url('/')}}/admin/member/{{$member->id}}?edit-new=true" style="color: white; list-style: none; ">Edit</a>
 						</label>
 						@if(isset($data_mem) && $data_mem->count()>0))
 							@include('admin.member.member_edit',['data_member' => $data_mem])
 						@endif

 						<label class="btn btn-primary pull-left" style="margin-left: 1px;">
 							<a href="{{url('/')}}/admin/member/delete/{{$member->id}}" style="color: white; list-style: none;">Delete</a>
 						</label>
 						
 					</td>
 				</tr>
 			@endforeach
 					@endif
 			</tbody>
 		</table>
 		
@endsection
@section('script')
<?php
	if(isset($_GET['add-new']) && $_GET['add-new']){
		echo '<script>jQuery("#add-member").modal("show")</script>';}
	if(isset($_GET['edit-new']) && $_GET['edit-new']){
		echo '<script>jQuery("#edit-member").modal("show")</script>';
}?>
@endsection

@if(!empty(session('success')) && session('success')=='success')
		<script type="text/javascript">
		window.onload = function(){
			alert('New data has been added');	
		}
		</script>
@endif
@if(!empty(session('success_up')) && session('success_up')=='success')
		<script type="text/javascript">
		window.onload = function(){
			alert('Data has successfully updated');	
		}
		</script>
@endif
@if(!empty(session('success_de')) && session('success_de')=='success')
		<script type="text/javascript">
			window.onload=function()
			{
				alert('Data has successfully deleted');
			}
		</script>
@endif
