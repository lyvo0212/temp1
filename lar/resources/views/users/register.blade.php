<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body style="background-color: #eee">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-4" style="width: 450px">
				<div class="panel panel-primary" style="margin-top: 10px">
					<div class="panel-heading" style="text-align: center;font-size: 30px;background-color: #c67bec;border-color: #eee">Sign In</div>
					<div class="panel-body">
						<form action="{{ url('users/sign_in') }}" method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" name="name" class="form-control" placeholder="Username" value="{{old('name')}}" />
							</div>

							<div class="form-group">
							<!-- sex -->
								<label class="radio-inline">
								  <input type="radio" name="gender" id="inlineRadio1" value="0"> Nam
								</label>
								<label class="radio-inline">
								  <input type="radio" name="gender" id="inlineRadio2" value="1"> Nữ
								</label>
							<!-- birthday-->
								<div class="form-group" style=" float: right;width: 250px">
									<label for="" style="float:left; padding: 4px;">Birthday</label>
									<input type="date" name="birthday" class="form-control" value="" style="float:left;width: 185px ;margin-top:-5px;"/>
								</div>
							</div>
						
							<div class="form-group">
									<label for="">Email</label>
									<input type="email" name="email" class="form-control" placeholder="email@gmail.com" value="" />
							</div>

							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password"  placeholder="ví dụ: 1234" class="form-control" />
							</div>

							<div class="form-group">
								<label for="">Confirm Password</label>
								<input type="password" name="password_confirmation"  placeholder="Password" class="form-control" />
							</div>

							<div class="form-group">
								<label for="">Address</label>
								<input type="text" name="address"  placeholder="Address" class="form-control" />
							</div>

							<div class="form-group">
								<label for="">Phone</label>
								<input type="tel" name="phone" placeholder="Phone" class="form-control" />
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
							<button type="submit" class="btn btn-primary pull-right" style="background-color: #c67bec; border-color:#c67bec">Sign in</button>
						</form>
					</div>
				</div>				
			</div>

		</div>
	</div>
</body>
</html>