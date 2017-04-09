
<!-- Modal -->
					<div class="modal fade" id="edit-member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Edit Members</h4>
					      </div>
					      <div class="modal-body">
					    <!-- @if(isset($data_member) && $data_member->count()>0)  -->
					       <form action="{{url('/')}}/admin/member/edit/{{ $data_member->id }}" class="form-horizontal" enctype="multipart/form-data" method="post">
							{{ csrf_field() }}
						
							<div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
							    <div class="col-sm-10">
							  	
							      <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Username" value="{{ $data_member->name or '' }} ">
							    </div>
							</div>
					
							<div class="form-group">
							<!-- sex -->
								 <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
							    <div class="col-sm-10">
							    @if($data_member->gender=="0")
									<label class="radio-inline">
										<input type="radio" name="gender" id="inlineRadio1" value="0" checked="true"> Nam
									</label>
									<label class="radio-inline">
										<input type="radio" name="gender" id="inlineRadio1" value="1"> Nữ
									</label>
								@else
									<label class="radio-inline">
									  	<input type="radio" name="gender" id="inlineRadio1" value="0"> Nam
									  </label>
									  <label class="radio-inline">
									 	 <input type="radio" name="gender" id="inlineRadio2" value="1" checked="true"> Nữ
									  </label>
								@endif
								</div>
							</div>
							<!-- birthday-->
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label" >Birthday</label>
									<div class="col-sm-10">
										<input type="date" name="birthday" class="form-control" value="{{$data_member->birthday}}"/>
									
									</div>
								</div>
						
							<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" name="email" class="form-control" placeholder="email@gmail.com" value="{{$data_member->email}}" />
									</div>
							</div>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Address</label>
								<div class="col-sm-10">
									<input type="text" name="address"  placeholder="Address" class="form-control" value="{{$data_member->address}}" />
								</div>
							</div>

							<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
								<div class="col-sm-10">
									<input type="tel" name="phone" placeholder="Phone" class="form-control" value="{{$data_member->phone}}" />
								</div>
							</div>

							<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
								<div class="col-sm-10">
								@if($data_member->status=="1")
									 <label>
				                      	  <input type="radio" name="status" id="optionsRadios1" value="1" checked="true">
				   											Hoạt động
				                      </label>
				                      <label>
				                        	<input type="radio" name="status" id="optionsRadios1" value="0">
				   											Không hoạt động
				                       </label>
				                 @else
				                 		 <label>
				                        <input type="radio" name="status" id="optionsRadios1" value="1">
				   											Hoạt động
				                        </label>
				                         <label>
				                        <input type="radio" name="status" id="optionsRadios1" value="0" checked="true">
				   										 Không hoạt động
				                        </label>
				                 @endif
								</div>
							</div>
						
						
							<!--hien thị lỗi validator-->
							@if($errors->any())
							<div class="form-group">
									<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Error !</strong> {{ $errors->first() }}
									</div>
							</div>
							@endif
							<div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary" >Save changes</button>
						     </div>
							<!-- @endif	 -->
						</form>
				
					      </div>  
					    </div>
					  </div>
					</div>