<!DOCTYPE html>
<html>
<head>
<title>Eternal Beauty</title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="{{asset('js/layout_index/js/jquery-1.11.1.min.js')}}"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="{{asset('css/style_sanpham.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eternal Beauty,Mỹ phẩm làm đẹp da, mỹ phẩm hàn quốc" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/simpleCart.min.js')}}"> </script>
<link href="{{asset('css/memenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/memenu.js')}}"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="{{asset('js/jquery.easydropdown.js')}}"></script>	
<!-- chitiet san pham -->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>	
<!-- trang chi tiet san pham	 -->
<script src="{{asset('js/imagezoom.js')}}"></script>
<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>	
<!-- ket thuc trang chi tiet	 -->

<!-- gio hang -->
<link href="{{asset('css/style-giohang.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">

<!-- ket thuc gio hang -->

<!-- dang ky- dang nhap -->

<!-- ket thuc dang ky-nhap -->
<!-- font-awesome icons -->
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.min.css')}}" rel='stylesheet' type='text/css'>
<!-- //font-awesome icons -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head>
<body> 

	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<div class="w3l_login">
						
							<a class="active"><span class="glyphicon glyphicon-user" aria-hidden="true"></a></span>
								
							@if(Auth::check() || Auth::viaRemember())
							<ul class="tk-box sub-link-show">
							
								<li class="k1" style="padding-left: 5px;padding-top: 5px;background: darkgray;color: whitesmoke;">
									&nbsp;Chào,{{Auth::user()->name}}</li>
								<li class="tttk">
									<a title="Thông tin tài khoản Eternal Beauty" href="">Thông tin tài khoản </a></li>
							
								<li class="thoat"><a title="Thoát" href="dangxuat">Đăng xuất</a></li>
								</ul>
							@else
								<script type="text/javascript">
									$(document).ready(function(){
										$('a.active').attr('href','{{url("/taotaikhoan")}}');
									});
								</script>
								
							@endif
						
						</div>
						
						
					
					<div class="w3l_order">
							
							<a class="active1">Kiểm tra đơn hàng</a>
								<ul class="sub-bar-top sub-ktdh tk-box sub-link-show1">
								<p id="ktdt-no"></p>
							
								<div class="sub-ktdh-f">
									<form name="frmViewOrder" class="frmCheckOrder" method="get" onsubmit="return frmCheckOrdersSubmit()">
										<label><input type="text" name="increment_id" value="" placeholder="Nhập mã đơn hàng" id="increment_id" onkeypress="return isNumberKey(event)"></label>
										<label><input type="text" autocomplete="off" name="order_flag" value="" placeholder="Nhập số điện thoại hoặc email" id="order_flag"></label>
										<label><button id="btnKiemTraDH" type="submit">Kiểm tra</button></label>
									</form>
								</div>
						</div>

						<div class="w3l_order">
							
							<a class="active1" style="margin-left: -30px" href="{{url('/doitrahang')}}">Đổi trả hàng</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<script type="text/javascript">
					$(document).ready(function()
					{
						$('.active').click(function(){
							$('.sub-link-show').toggle(200);
						});
						 $('.active1').click(function(){
							$('.sub-link-show1').toggle(200);
						});
					});
				</script>
<script type="text/javascript">
   
    $('.frmCheckOrderLogin').submit(function (event) {
      var id = $.trim($('#increment_id').val());
      if (id  === null) {
        $('#increment_id').addClass('validation-failed');
        $('.sub-ktdh #ktdt-no').show();
        $('.sub-ktdh #ktdt-no').html('Mã đơn hàng không được để trống');
        $('#increment_id').focus();
        return false;
      }
      if(isNaN(id)){
        $('.sub-ktdh #ktdt-no').show();
        $('.sub-ktdh #ktdt-no').html('Mã đơn hàng không được là chữ1');
        $('#increment_id').focus();
        $('#increment_id').addClass('validation-failed');
        return false;
      }
    });

    function isNumberKey(evt){
      var theEvent = evt || window.event;
      var key = theEvent.keyCode || theEvent.which;
      var backspace = key;

      key = String.fromCharCode( key );
      var regex = /[0-9]|\./;
      if( !regex.test(key) && backspace != 8) {
          theEvent.returnValue = false;
          if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }

    function isPhone(evt){
      var patern09 = /^09[0-9]{8}?$/;
      var patern01 = /^01[0-9]{9}?$/;
      var patern088 = /^088[0-9]{7}?$/;
      var patern086 = /^086[0-9]{7}?$/;

      if(!patern09.test(evt) && !patern01.test(evt) && !patern088.test(evt) && !patern086.test(evt))
        return false;
      else
        return true;
    }

    function isEmail(evt){
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,3})?$/;
      if(!emailReg.test(evt))
        return false;
      else
        return true;
    }

    function checkOrderFlag(evt){
      var a = isEmail(evt) || isPhone(evt);
      if(a){
        return true;
      }
      else
        return false;
    }

    //submit form ktđh đăng nhập
    $( "#increment_id" ).change(function() {
      var id = $.trim($('#increment_id').val());
      if(isNaN(id)){
        $('.sub-ktdh #ktdt-no').show();
        $('.sub-ktdh #ktdt-no').html('Mã đơn hàng không được là chữ2');
        $('#increment_id').focus();
        $('#increment_id').addClass('validation-failed');
        return false;
      }
    });

    //submit form ktđh ko đăng nhập
    function frmCheckOrdersSubmit() {
      var id = $.trim($('#increment_id').val());
      if (id  === '') {
        $('#increment_id').addClass('validation-failed');
        $('.sub-ktdh #ktdt-no').show();
        $('.sub-ktdh #ktdt-no').html('Mã đơn hàng không được để trống');
        $('#increment_id').focus();
        return false;
      }
      var order_flag = $.trim($('#order_flag').val());
      if (order_flag  === '') {
        $('#order_flag').addClass('validation-failed');
        $('.sub-ktdh #ktdt-no').show();
        $('.sub-ktdh #ktdt-no').html('Email hoặc số điện thoại không được để trống');
        $('#order_flag').focus();
        return false;
      }
      if(!checkOrderFlag(order_flag)){
        $('#order_flag').addClass('validation-failed');
        $('#ktdt-no').show();
        $('#ktdt-no').html('Địa chỉ email hoặc số điện thoại không hợp lệ.');
        $('#order_flag').select();
        return false;
      }
      $('#btnKiemTraDH').html("Đang kiểm tra ...");
      $("#btnKiemTraDH").attr("disabled", "disabled");
      $("#order_flag").attr("disabled", "disabled");
      $("#increment_id").attr("disabled", "disabled");
      var DOMAIN="{{url('')}}"
      var url = DOMAIN + '?increment_id=' + $('#increment_id').val();
      if(isEmail(order_flag))
        url = url + '&email=' + $('#order_flag').val();
      if(isPhone(order_flag))
        url = url + '&phone=' + $('#order_flag').val();

      jQuery.ajax({
        type:"GET",
        url:url,
        success:function(res){
          if(res == 0){
            $('#order_flag').removeClass('validation-failed');
            $('#increment_id').removeClass('validation-failed');
            $('.sub-ktdh #ktdt-no').show();
            $('.sub-ktdh #ktdt-no').html('Hệ thống không tìm thấy đơn hàng, vui lòng nhập lại.');
            $('#btnKiemTra').html("Kiểm Tra");
            $("#order_flag").removeAttr("disabled");
            $("#btnKiemTra").removeAttr("disabled");
            $("#increment_id").removeAttr("disabled");
            $('#increment_id').select();
            return false;
          }
          else{
            //chuyển tới trang chi tiết đơn hàng ko đăng nhập
            $('.sub-ktdh #ktdt-no').html('Đang chuyển về trang chi tiết đơn hàng...');
            var toUrl = DOMAIN + '/kiemtradonhang?increment_id=' + $('#increment_id').val() + '&';
            if(isEmail(order_flag))
              toUrl = toUrl + 'email=' + $('#order_flag').val();
            else{
              if(isPhone(order_flag))
                toUrl = toUrl + 'phone=' + $('#order_flag').val();
            }
            window.location=toUrl;
          }
        }
      });
      return false;
    }
 

</script>
			<!-- gio hang-->
				<div class="col-md-6 top-header-left" style="margin-top: 10px">
					<div class="cart box_1">
						<a href="checkout.html">
							 <div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="{{asset('images/cart-1.png')}}" alt="" />
						</a>
						<div class="beta-select">
							<a  href="#" class="simpleCart_empty">Giỏ hàng</a>
						
							<div class="beta-dropdown cart-body">
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="images/logo1.jpg" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/2.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="assets/dest/images/products/cart/3.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> 	
						</div>

					
<script type="text/javascript">
$(document).ready(function(){
$(".simpleCart_empty").click(function(e){
	 		e.preventDefault();
	 		if($(".beta-dropdown").hasClass('active_cart')){
	 			$(".beta-dropdown").addClass('inactive_animate');
	 			$(".beta-dropdown").removeClass('active_animate');	
	 			setTimeout(function(){
	 				$(".beta-dropdown").removeClass('active_cart');
	 			},800)
	 		}else{
	 			$(".beta-dropdown").removeClass('inactive_cart');
	 			$(".beta-dropdown").addClass('active_cart active_animate');
	 		}
});});
</script>
					<!-- end gio hang -->

						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="index.html"><h1>Eternal Beauty</h1></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="{{url('/eternal-beauty')}}">Trang chủ</a></li>
						<li class="grid"><a href="{{url('/chitiet')}}">Trang điểm</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.html">New Arrivals</a></li>
											<li><a href="products.html">Blazers</a></li>
											<li><a href="products.html">Swem Wear</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Handbags</a></li>
											<li><a href="products.html">T-Shirts</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">My Shopping Bag</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<li><a href="products.html">Shoes</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">Brands</a></li>
											<li><a href="products.html">Coats</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Trousers</a></li>
										</ul>	
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<li><a href="products.html">499 Store</a></li>
											<li><a href="products.html">Fastrack</a></li>
											<li><a href="products.html">Casio</a></li>
											<li><a href="products.html">Fossil</a></li>
											<li><a href="products.html">Maxima</a></li>
											<li><a href="products.html">Timex</a></li>
											<li><a href="products.html">TomTom</a></li>
											<li><a href="products.html">Titan</a></li>
										</ul>		
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Chăm sóc da</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.html">New Arrivals</a></li>
											<li><a href="products.html">Blazers</a></li>
											<li><a href="products.html">Swem Wear</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Handbags</a></li>
											<li><a href="products.html">T-Shirts</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">My Shopping Bag</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<li><a href="products.html">Shoes</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">Brands</a></li>
											<li><a href="products.html">Coats</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Trousers</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<li><a href="products.html">499 Store</a></li>
											<li><a href="products.html">Fastrack</a></li>
											<li><a href="products.html">Casio</a></li>
											<li><a href="products.html">Fossil</a></li>
											<li><a href="products.html">Maxima</a></li>
											<li><a href="products.html">Timex</a></li>
											<li><a href="products.html">TomTom</a></li>
											<li><a href="products.html">Titan</a></li>
										</ul>	
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Nước hoa</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.html">New Arrivals</a></li>
											<li><a href="products.html">Blazers</a></li>
											<li><a href="products.html">Swem Wear</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Handbags</a></li>
											<li><a href="products.html">T-Shirts</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">My Shopping Bag</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<li><a href="products.html">Shoes</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">Brands</a></li>
											<li><a href="products.html">Coats</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Trousers</a></li>
										</ul>	
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<li><a href="products.html">499 Store</a></li>
											<li><a href="products.html">Fastrack</a></li>
											<li><a href="products.html">Casio</a></li>
											<li><a href="products.html">Fossil</a></li>
											<li><a href="products.html">Maxima</a></li>
											<li><a href="products.html">Timex</a></li>
											<li><a href="products.html">TomTom</a></li>
											<li><a href="products.html">Titan</a></li>
										</ul>	
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="typo.html">Thương hiệu</a>
						</li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Tìm kiếm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
	
	<!-- content -->
		@yield('content')
	<!-- end content -->

	<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Thông Tin</h3>
					<ul>
						<li><a href="#"><p>Trang Chủ</p></a></li>
						<li><a href="contact.html"><p>Liên Hệ</p></a></li>
						<li><a href="#"><p>Hướng Dẫn Mua Hàng</p></a></li>
						
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Tài Khoản</h3>
					<ul>
						<li><a href="account.html"><p>Đăng Nhập</p></a></li>
						<li><a href="#"><p>Đăng Ký</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Thông Tin Cửa Hàng</h3>
					<h4>Am hiểu làn da bạn,
						<span>Eternal Beauty,</span>
						567 Quang Trung, Gò Vấp, Hồ Chí Minh.</h4>
					<h5>19002222</h5>	
					<p><a href="mailto:lyvo0212@gmail.com">eternalbeauty@gmail.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2017 Eternal Beauty. All Rights Reserved | Design by  <a href="#" target="_blank">Eternal Beauty</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://localhost/lar/public/js/layout_index/js/move-top.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<a href="#" id="toTop">To Top</a>
	<!--footer-end-->	
</body>
</html>