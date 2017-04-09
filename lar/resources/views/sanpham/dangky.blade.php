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
	
	<h2 style=" font-weight: 600;text-transform: uppercase;color: #000;
    ">Đăng Ký</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					<form action="{{ url('/dangky') }}" method="post">
							{{ csrf_field() }}
						 <ul>
							 <li class="text-info">Tên: </li>
							 <li><input name="name" type="text"></li>
						 </ul>
						 <ul>
							 <li class="text-info">Email: </li>
							 <li><input placeholder="email@gmail.com" name="email" type="email"></li>
						 </ul>				 
						<ul>
							 <li class="text-info">Giới Tính: </li>
							 <li><input type="radio" name="GioiTinh" id="inlineRadio1" value="Nam"> Nam
								<input type="radio" name="GioiTinh" id="inlineRadio2" value="Nữ"> Nữ</li>
						 </ul>
						 <ul>
							 <li class="text-info">Ngày Sinh: </li>
							 <li><input type="date" name="NgaySinh">
							</li>
						 </ul>
						 <ul>
							 <li class="text-info">Mật khẩu:</li>
							 <li><input name="password" type="password">	</li>
						 </ul>
						 <ul>
							 <li class="text-info">Nhập lại mật khẩu:</li>
							 <li><input name="password_confirmation" type="password"></li>
						 </ul>	
						  <ul>
							 <li class="text-info">Địa chỉ:</li>
							 <li><input type="text" name="DiaChi" ></li>
						 </ul>	
						  <ul>
							 <li class="text-info">Điện thoại:</li>
							 <li><input type="text" name="DT"  ></li>
						 </ul>	
						 					
						<!--hien thị lỗi validator-->
							@if($errors->any())
								<div class="form-group">
									<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<strong>Lỗi!</strong> {{ $errors->first() }}
									</div>
								</div>
							@endif
							<button type="submit" class="btn btn-primary pull-right" style="background-color: #286090; border-color:#286090;margin-bottom: 15px">Tạo tài khoản</button>
					 </form>
				 </div>
			</div>
		</div>
		<div class="reg-right">
				 <h3><font><font class="">Tài khoản hoàn toàn miễn phí</font></font></h3>
				 <div class="strip"></div>
				 <p><font><font class="">Eternal cung cấp những sản phẩm mỹ phẩm hàng đầu hãy có một tài khoản để hưởng các chế độ yêu đãi của shop</font></font></p>
				 <p><font><font class="">Chào mừng, vui lòng nhập các chi tiết sau để tiếp tục.</font></font></p>
				 <p><font><font>Nếu trước đây bạn đã đăng ký với chúng tôi, </font></font><a href="{{url('/dangnhap')}}"><font><font>bấm vào đây</font></font></a>
				 <font><font>hoặc đến </font></font><a href="{{url('/')}}"><font><font>trang chủ</font></font></a>
				 </p>
			</div>
											
	<!-- header modal -->
</body>
</html>