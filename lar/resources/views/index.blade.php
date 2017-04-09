
<!DOCTYPE html>
<html lang="en">
<head>
<title>Eternal Beauty</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<!-- <meta name="keywords" content="Trending Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" /> -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{asset('css/layout_index/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{asset('css/layout_index/css/style.css')}}" type="text/css" media="all" />
<!--// css -->
<!-- light-box -->
<link rel="stylesheet" href="{{asset('css/layout_index/css/lightbox.css')}}">
<!-- //light-box -->
<!-- font-awesome icons -->
<link href="{{asset('css/layout_index/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="{{asset('css/layout_index/css/font.css')}}" rel="stylesheet">
<link href="{{asset('css/layout_index/css/font1.css')}}" rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{asset('js/layout_index/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/layout_index/js/bootstrap.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!-- animation -->
<link href="{{asset('css/layout_index/css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('js/layout_index/js/wow.min.js')}}"></script>
	<script>
		 new WOW().init();
	</script>
<!-- //animation --> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner" id="home" >
		<div class="agileinfo-dot"  >
			<div class="header">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
							<div class="agileits-logo">
								<h1><a href="#" ba><img src="{{asset('images/eternal-beauty-logo-600-bc.gif')}}" width="100px" height="55px"></a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li class="active"><a href="#">Trang chủ</a></li>
									<li><a href="#about" class="scro ll">Giới thiệu</a></li>
									<li><a href="{{url('/')}}">Sản phẩm</a></li>
									<li><a href="#gallery" class="scroll">Hướng dẫn mua hàng</a></li>
									<li><a href="#news" class="scroll">Góc làm đẹp</a></li>
									<li><a href="#mail" class="scroll">Liên hệ</a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="agileits-slider">
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides callbacks callbacks1" id="slider4">
								@if($slide)
									@foreach($slide as $slides)
									<li>
										<div class="agileits-banner-info" >

											{!!$slides['MoTa']!!} 

										</div>	
									</li>
									@endforeach
								@endif
								</ul>
							</div>
							<div class="clearfix"> </div>
							<script src="{{asset('js/layout_index/js/responsiveslides.min.js')}}"></script>
							<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:false,
											nav:true,
											speed: 500,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
							</script>
							<!--banner Slider starts Here-->
						</div>
					</div>
					<div class="w3-arrow bounce animated">
						<a href="#about" class="scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<div class="w3ls-about-grids">
				<div class="col-md-4 w3l-about-left">
					<h2>Giới thiệu</h2>
					<h5>Hân hạnh được phục vụ quý khách !!</h5>
					<p>Vẻ đẹp vĩnh cửu là nơi bạn đặt niềm tin vào việc chăm sóc để có một làn da hoàn hảo. Nó không chỉ mang lại cho bạn một vẻ đẹp hoàn mỹ mà còn là một người bạn đáng tin cậy.<span>Chúng tôi chuyên phân phối các sản phẩm chính hãng và xu hướng mới nhất trên thế giới với chất lượng đảm bảo và giá cả cạnh tranh.</span></p>
				</div>
				<div class="col-md-4 w3l-about-img" style=" background: url({{asset('images/about.jpg')}}) no-repeat 0px -60px; background-size: cover;">
				
				</div>
				<div class="col-md-4 w3l-about-right">
					<h3>Liên hệ</h3>
					<h5>Am hiểu làn da bạn @ @</h5>
					<p>Luôn luôn lắng nghe những tâm tư về làn da của khách hàng. Phản hồi, góp ý của khách hàng là món quà vô giá để hoàn thiện và nỗ lực hơn. Thường xuyên giữ liên lạc với khách hàng thông qua thẻ thành viên. Các chương trình khuyến mãi diễn ra thường xuyên để tri ân khách hàng.</p>
					<div class="w3l-button">
						<a href="#" data-toggle="modal" data-target="#myModal">Chi tiết</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						<h4 class="modal-title" style="color: rgb(251, 105, 135)">Eternal Beauty</h4>
					</div> 
					<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="{{asset('images/hinh1.jpg')}}" alt ="" style="background-size: cover;" />
						<p>Các sản phẩm của Eternal Beauty shop được sản xuất ở nhiều nơi đáng tin cậy, đặc biệt nhất là các mặt hàng của Hàn quốc được xách tay trực tiếp từ Store bên Hàn về, có xuất xứ nguồn gốc rõ dàng, khách có nhu cầu muốn xem hóa đơn mua tại Hàn sẽ cung cấp ngay. Chúng tôi tuyệt đối không bán hàng nhái, dập date. Shop chủ yếu bán sỉ bán lẻ các  hãng mỹ phẩm của Việt, Nhật, Hàn Quốc như Ohui-whoo, IOPE, Laneige, Skinfood, Thefaceshop, Innisfree, Missha, Etude, TonyMoly, Geo, 3CE ...</p>

						<p><span>Shop chân thành cảm ơn quý khách hàng đã ủng hộ Shop trong thời gian vừa qua và tiếp sau này!!!
						</span></p>
						<p><i class="fa fa-map-marker"></i><span>&nbsp;&nbsp;Đ/c: 567 Quang Trung - Gò Vấp - Hồ Chí Minh</span></p>
						<p><span class="fa fa-phone">&nbsp;&nbsp;Chi tiết: 19002222</span></p>
						<p><span class="fa fa-envelope">&nbsp;&nbsp;Email: lyvo0212@gmail.com</span></p>
						<p><span class="fa fa-envelope">&nbsp;&nbsp;Email: thuyettn@gmail.com</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="agile-heading">
				<h3>Thương Hiệu</h3>
			</div>
			<div class="wthree-services-grids">
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<img src="{{asset('images/thuong_hieu1.jpg')}}">
						</div>
						<div class="wthree-services-captn">
							<h4>Hàn Quốc</h4>
							<p>Hàn Quốc vốn được xem là cái nôi chuyên về làm đẹp và thẩm mỹ, chính vì vậy, các thương hiệu mỹ phẩm Hàn Quốc luôn được người tiêu dùng ưu ái, tin tưởng.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<img src="{{asset('images/thuong_hieu2.jpg')}}">
						</div>
						<div class="wthree-services-captn">
							<h4>Thái Lan</h4>
							<p>Là một nước Đông Nam Á, thị trường mỹ phẩm Thái Lan có nhiều nét tương đồng với thị trường Việt Nam cùng sự xuất hiện của L’Oréal, Shiseido, P&G…  Giá của các mỹ phẩm nội địa này cũng vừa phải với chất lượng tốt và bao bì bắt mắt.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<img src="{{asset('images/thuong_hieu3.jpg')}}">
						</div>
						<div class="wthree-services-captn">
							<h4>Nhật Bản</h4>
							<p>Tại đất nước hoa anh đào, Shiseido, Kosé, Kanebo, SK-II và Hadalabo là những thương hiệu mỹ phẩm Nhật Bản nổi tiếng và được nhiều phụ nữ yêu thích nhất. </p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<img src="{{asset('images/thuong_hieu4.jpg')}}">
						</div>
						<div class="wthree-services-captn">
							<h4>Mỹ</h4>
							<p> Mỹ phẩm từ Mỹ, chất lượng tốt, dùng an toàn và hiệu quả, nhất là có đa dạng mặt hàng, từ chăm sóc da đến trang điểm, làm đẹp,...</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree-services-grids services-grids1">
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<img src="{{asset('images/thuong_hieu5.jpg')}}">
						</div>
						<div class="wthree-services-captn">
							<h4>Pháp</h4>
							<p>Những sản phẩm làm đẹp lãng mạn từ nước Pháp luôn có sức quyến rũ mê hoặc mọi lứa tuổi. Dù là người không quan tâm tới làm đẹp, bạn cũng không thể không biết tới thương hiệu nổi tiếng của Pháp như Chanel hay Givenchy. </p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<img src="{{asset('images/thuong_hieu6.jpg')}}">
						</div>
						<div class="wthree-services-captn">
							<h4>Úc</h4>
							<p>Úc là cái nôi của vẻ đẹp thiên nhiên lẫn con người. Từ lâu đã khá nổi tiếng về các dòng mỹ phẩm cao cấp an toàn và hiệu quả. Hàng Úc hiện nay đang được rất nhiều người Việt Nam ưa chuộng.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info">
							<img src="{{asset('images/thuong_hieu7.jpg')}}">
						</div>
						<div class="wthree-services-captn">
							<h4>Việt Nam</h4>
							<p>Thị trường mỹ phẩm tại Việt Nam hiện nay bao gồm cả những dòng mỹ phẩm Việt Nam chất lượng cao. Cùng điểm danh 5 dòng mỹ phẩm chất lượng cao được nhiều người tiêu dùng ưa chuộng: ThoraKAO, Lana, X – men, Oriflame</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 wthree-services">
					<div class="wthree-services-grid">
						<div class="wthree-services-info" style="background:url({{asset('images/thuong_hieu8.jpg')}}) no-repeat; ">
							<img src="">
						</div>
						<div class="wthree-services-captn">
							<h4>Nước Hoa</h4>
							<p>Nước hoa hay dầu thơm thành phần chính là tinh dầu chiết xuất từ tự nhiên (hoa, nhựa cây, gỗ..). Sử dụng với mục đích tạo ra mùi thơm cho cơ thể, cảm giác dễ chịu, sự quyến rũ giới tính.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
			<div class="agile-heading">
				<h3>Sản phẩm bán chạy</h3>
			</div>
			<div class="agileinfo-gallery">
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a href="{{asset('images/Nuoc-hoa-Black-Opium-YSL-90ml.jpg')}}" data-lightbox="example-set" data-title="Nước hoa Black Opium YSL 90ml. Giá 1,900,000₫">
						<img src="{{asset('images/Nuoc-hoa-Black-Opium-YSL-90ml.jpg')}}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids">
					<a href="{{asset('images/skin1.jpg')}}" data-lightbox="example-set" data-title="Son Aritaum Color Live Tint #05 – Hollywood. Giá 135,000₫">
						<img src="{{asset('images/skin1.jpg')}}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids gallery-two wthree">
					<a href="{{asset('images/skin3.jpg')}}" data-lightbox="example-set" data-title="Bộ dưỡng táo xanh Skinfood cho da dầu - Fresh Apple Sparkling Pore. Giá 1,500,000đ ">
						<img src="{{asset('images/skin3.jpg')}}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				
				<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
					<a href="{{asset('images/skinfood_05.jpg')}}" data-lightbox="example-set" data-title="Bộ cà chua Premium Tomato Whitening Skinfood dưỡng trắng da. Giá 2,000,000đ">
						<img src="{{asset('images/skinfood_05.jpg')}}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids agileits-gallery-grids">
					<a  href="{{asset('images/bo_duong_trang_da_yuja_water_c.jpg')}}" data-lightbox="example-set" data-title="Bộ dưỡng trắng da Yuja Water C. Giá 250,000đ">
						<img src="{{asset('images/bo_duong_trang_da_yuja_water_c.jpg')}}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-6 w3-agileits-gallery-grids agileits-gallery-grids gallery-two">
					<a href="{{asset('images/skin2.jpg')}}" data-lightbox="example-set" data-title="Son 3CE x Lily Maymac Matte Lip Color #908 Warm & Rose. Giá 320,000đ ">
						<img src="{{asset('images/skin2.jpg')}}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>	
				
				<div class="col-md-6 w3-agileits-gallery-grids gallery-two w3agile-two">
					<a href="{{asset('images/mau_mat.jpg')}}" data-lightbox="example-set" data-title="Bảng Tạo Khối và Che Khuyết Điểm City Color Contour and Correct Cream Palette. Giá 190,000đ">
						<img src="{{asset('images/mau_mat.jpg') }}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>	
				<div class="col-md-3 w3-agileits-gallery-grids ">
					<a href="{{asset('images/kematnuoc.jpg')}}" data-lightbox="example-set" data-title="Bút Dạ Kẻ Mắt Nước Karadium Waterproof Brush Liner Black. Giá 80,000đ">
						<img src="{{asset('images/kematnuoc.jpg')}}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>
				<div class="col-md-3 w3-agileits-gallery-grids ">
					<a href="{{asset('images/kem-chong-nang-super-perfect-sun-cream-spf50-pa-thefaceshop.jpg')}}" data-lightbox="example-set" data-title="Chống nắng TFS Super Defense SPF 50 +. Giá 200,000đ">
						<img src="{{asset('images/kem-chong-nang-super-perfect-sun-cream-spf50-pa-thefaceshop.jpg')}}" class="img-responsive zoom-img" alt=""/>
						<div class="agile-b-wrapper">
							<i class="fa fa-search-plus" aria-hidden="true"></i>
						</div>
					</a>
				</div>	
				
				<div class="clearfix"> </div>
				<script src="{{asset('js/layout_index/js/lightbox_plus_jquery.min.js')}}"></script>
			</div>	
		</div>	
	</div>	
	<!--//gallery-->
	<!-- team -->
	<div class="team jarallax" id="team" style="background:url({{asset('images/hinh1.jpg')}}) no-repeat 0px 0px;background-size:cover;">
		<div class="team-dot"  style="background:url({{asset('images/dott.png')}}) repeat 0px 0px;">
			<div class="container">
				<div class="agile-heading team-heading">
					<h3>Quảng cáo thương hiệu</h3>
				</div>
				<div class="agile-team-grids">
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="{{asset('images/SongHyeGyo_FlashPink.jpg')}}" alt="" />
								</div>
								<div class="back">
									<h4>Song Hye Kyo</h4>
									<p>Gương mặt đại diện cho nhãn hiệu mỹ phẩm Laneige Hàn Quốc.</p>
									<div class="w3l-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="{{asset('images/Calvin Klein.jpg')}}" alt="" />
								</div>
								<div class="back">
									<h4>Doutzen Kroes</h4>
									<p>Gương mặt đại diện cho nước hoa của Calvin Klein</p>
									<div class="w3l-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="{{asset('images/kimhyunjoong.jpg')}}" alt="" />
								</div>
								<div class="back">
									<h4>Kim Hyun Joong</h4>
									<p>Người mẫu đại diện cho hãng Mỹ phẩm The Face Shop</p>
									<div class="w3l-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="{{asset('images/Dahlia Divin.jpg')}}" alt="" />
								</div>
								<div class="back">
									<h4>Alicia Keys</h4>
									<p> Gương mặt đại diện cho hãng nước hoa Dahlia Divin</p>
									<div class="w3l-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- news -->
	<div class="news" id="news">
		<div class="container">
			<div class="agile-heading">
				<h3>Góc làm đẹp</h3>
			</div>
			<div class="wthree-news-grids">
				<div class="col-md-4 agile-news-right-info">
					<div class="col-md-6 agile-news-img" style=" background: url({{asset('images/tintuc1.jpg')}}) no-repeat 0px 0px;
    background-size: cover;">
						
					</div>
					<div class="col-md-6 agile-news-img-info">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">5 Cách trị mụn hiệu quả tại nhà</a></h5>
						<div class="agileits-w3layouts-border"> </div>
						<p></p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th Dec,2016</h6>
						<a href="" style="color: white">Xem tiếp</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 agile-news-right-info">
					<div class="col-md-6 agile-news-img agile-news-img1" style=" background: url({{asset('images/tintuc2.jpg')}}) no-repeat 0px 0px;
    background-size: cover;	">
							
					</div>
					<div class="col-md-6 agile-news-img-info">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">5 Cách trang điểm mắt tự nhiên cho những dịp khác nhau</a></h5>
						<div class="agileits-w3layouts-border"> </div>
						<p></p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th Dec,2016</h6>
						<a href="" style="color: white">Xem tiếp</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 agile-news-right-info">
					<div class="col-md-6 agile-news-img agile-news-img2" style=" background: url({{asset('images/tintuc3.jpg')}}) no-repeat 0px 0px;
    background-size: cover;">
							
					</div>
					<div class="col-md-6 agile-news-img-info">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Những thỏi cam đất khiến chị em hao tiền tốn của nhất năm 2016</a></h5>
						<div class="agileits-w3layouts-border"> </div>
						<p></p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 13th Nov,2016</h6>
						<a href="" style="color: white">Xem tiếp</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="agile-heading">
				<h3>Liên Hệ</h3>
			</div>
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="w3layouts-contact-form-top">
						<h3>Chúng tôi</h3>
						<p>Shop Eternal Beauty hân hạnh được phục vụ các bạn. Hãy gọi điện tới shop sẽ tư vấn miễn phí cho bạn và đặt hàng theo yêu cầu.</p>
					</div>
					<div class="agileits-contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>19002222</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="mailto:example@email.com">eternalbeauty@gmail.com</a></span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>567 Quang Trung - quận Gò Vấp - Hồ Chí Minh.</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Gửi tin nhắn</h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Tên" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Telephone" placeholder="Điện thoại" required="">
							<textarea name="Message" placeholder="Tin nhắn" required=""></textarea>
							<button class="btn1">Gửi</button>
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="w3agile-map">
				<h3>Bản đồ</h3>
				<iframe src="https://www.google.com/maps/d/embed?mid=1sJfFNOyXuAxNuQqfX3NUee2_4ro" width="640" height="350"></iframe>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-3 w3-agile-footer-grid">
					<h3><img src="{{asset('images/eternal-beauty-logo-600-bc.gif')}}" width="100px" height="60px" style="margin-left: 50px" ></h3>
					<p>Nhà phân phối mỹ phẩm chính hãng</p>
					<p>&nbsp;   Luôn cập nhật xu hướng mới nhất</p>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Thông tin</h3>
					<ul>
						<li> <a href="#" data-toggle="modal" data-target="#myModal">Giới thiệu</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal">Hướng dẫn đặt hàng</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Menu</h3>
					<ul>
						<li><a href="#home">Trang chủ</a></li>
						<li><a href="#about" class="scroll">Liên hệ</a></li>
						<li><a href="#services" class="scroll">Trang điểm</a></li>
						<li><a href="#gallery" class="scroll">Chăm sóc da</a></li>
						<li><a href="#team" class="scroll">Nước hoa</a></li>
						<li><a href="#news" class="scroll">Thương hiệu</a></li>
						<li><a href="#mail" class="scroll">Góc làm đẹp</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Liên hệ</h3>
					<ul>
						<li> Địa chỉ 567 Quang Trung - Gò Vấp - Hồ Chí Minh</li>
						<li>Tư vấn: 19002222</li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>© 2017 Eternal Beauty. All Rights Reserved | Design by Eternal Beauty </p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="{{asset('js/layout_index/js/jarallax.js')}}"></script>
	<script src="{{asset('js/layout_index/js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="{{asset('js/layout_index/js/responsiveslides.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/layout_index/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/layout_index/js/easing.js')}}"></script>
	<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
</body>	
</html>