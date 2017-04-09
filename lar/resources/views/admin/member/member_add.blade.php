 
<!-- Modal -->
					<div class="modal fade" id="add-member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header" style="background-color: #c67bec;">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h3 class="modal-title" id="myModalLabel" style="font-family: fantasy; color: white; text-align: center;">Add Members</h3>
					      </div>
					      <div class="modal-body">
					       <form action="{{url('admin/member/add')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
							{{ csrf_field() }}
							<div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Username" value="{{old('name')}}">
							    </div>
							 </div>

							<div class="form-group">
							<!-- sex -->
								 <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
							    <div class="col-sm-10">
									<label class="radio-inline">
									  <input type="radio" name="gender" id="inlineRadio1" value="0"> Nam
									</label>
									<label class="radio-inline">
									  <input type="radio" name="gender" id="inlineRadio2" value="1"> Nữ
									</label>
								</div>
							</div>
							<!-- birthday-->
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label" {{old('birthday')}}>Birthday</label>
									<div class="col-sm-10">
										<input type="date" name="birthday" class="form-control" value=""/>
									
									</div>
								</div>
						
							<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" name="email" class="form-control" placeholder="email@gmail.com" value="{{old('email')}}" />
									</div>
							</div>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password"  placeholder="Password" class="form-control" value="{{old('password')}}" />
								</div>
							</div>

							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Address</label>
								<div class="col-sm-10">
									<input type="text" name="address"  placeholder="Address" class="form-control" value="{{old('address')}}" />
								</div>
							</div>

							<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
								<div class="col-sm-10">
									<input type="tel" name="phone" placeholder="Phone" class="form-control" value="{{old('phone')}}" />
								</div>
							</div>

							<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
								<div class="col-sm-10">
									 <label>
				                        <input type="radio" name="status" id="optionsRadios1" value="1">Hoạt động
				                        </label>
				                         <label>
				                        <input type="radio" name="status" id="optionsRadios1" value="0" >Không hoạt động
				                        </label>
								</div>
							</div>
							<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Modified_by</label>
								<div class="col-sm-10">
									<input type="tel" name="modified" disabled class="form-control" value="{{$auth->name or ''}}" />
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
						        <button type="submit" class="btn btn-default" style="background-color: #c67bec; color: white" >Save changes</button>
						     </div>
						</form>
					      </div>  
					    </div>
					  </div>
					</div>