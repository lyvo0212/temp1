<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</head>
<body style="background-color: #eee">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-md-offset-4" style="width: 360px;margin-top: 90px">
				<div class="panel panel-primary" style="margin-top: 30px;">
					<div class="panel-heading" style="text-align: center;font-size: 30px;background-color: #c67bec;border-color: #eee">Login Form</div>
					<div class="panel-body">
						<form action="{{ url('users/login') }}" method="post">
							{{ csrf_field() }}
							
							<div class="form-group">
								<label for="">Email</label>
									<input type="email" name="email" class="form-control" placeholder="email@gmail.com" value="" />
							</div>

							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password"  placeholder="Password" class="form-control" />
							</div>
  							<div class="checkbox">
						    <label>
						      <input type="checkbox" name="remember"> Remember me
						    </label>
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
							<!-- hiển thị lỗi đăng nhập-->
							@if(!empty(session('error')) && session('error')=='fail')
							
								<div class="form-group">
									<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Error !</strong>  user or password is invalid 
									</div>
								</div>
							
							@endif

						<button type="submit" class="btn btn-primary pull-right" style="background-color: #c67bec; border-color:#c67bec">Login</button>
						
						</form>
					</div>
				</div>				
			</div>

		</div>
	</div>
</body>
</html>