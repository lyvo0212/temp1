<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký - đăng nhập</title>
	<link href="{{asset('css/style-dangky_nhap.css')}}" rel="stylesheet" type="text/css" media="all" />	
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	
	<script src="{{asset('js/layout_index/js/jquery-1.11.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
	<!-- header modal -->
<div>
	<img src="{{asset('images/login_header.jpg')}}" style="width: 100%; height: 250px;position: relative;">
</div>
<div>
	<img src="{{asset('images/eternal-beauty-logo-600-bc.gif')}}" style="width: 150px;height: 90px;position: absolute;margin-top: -190px;
	margin-left: 150px">
</div>
<div class="container" style="border: 1px solid #337ab7;margin-top: 60px;margin-bottom: 60px;border-radius: 4px;">
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg" style="margin-left: 80px">
					<h2><font><font>NHỮNG KHÁCH HÀNG MỚI</font></font></h2>
					<p><font><font>Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể di chuyển qua quá trình thanh toán nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi các đơn đặt hàng trong tài khoản của bạn và hơn thế nữa.</font></font></p>
					<a class="acount-btn" href="{{url('dangky')}}"><font><font>Tạo một tài khoản</font></font></a>
					<a class="acount-btn" href="{{url('/')}}"><font><font>Trang chủ</font></font></a>
				 </div>
			</div>
		</div>
<div class="reg-right">
<h2 style=" font-weight: 600;text-transform: uppercase;color: #000; padding-left: 130px;">Đăng Nhập</h2>
				<div class="reg1" style="width: 70%;margin-left: 130px" >
					 <form action="{{ url('/dangnhap') }}" method="post">
							{{ csrf_field() }}
						<input name="email" placeholder="Email" type="email" style="width: 80%" value="{{old('email')}}">			
						<input name="password" placeholder="Mật khẩu" type="password" value="{{old('password')}}" style="width: 80%">		
						<div class="checkbox">
						    <label>
						      <input type="checkbox" name="remember"> Ghi nhớ
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
										<strong>Lỗi!</strong> Sai email hoặc mật khẩu
									</div>
								</div>
							
							@endif

						<button type="submit" class="btn btn-primary pull-right" style="background-color: #286090; border-color:#286090; margin-right: 80px; margin-bottom: 15px;">Đăng nhập</button>
						
					</form>	
</div>
</div></div>
</body>
</html>