@extends('sanpham.master')
@section('content')
<!--banner-starts-->
@if(!empty(session('success-dangky')) && session('success-dangky')=='success')
		<script type="text/javascript">
		window.onload = function(){
			alert('Đăng ký thành công');	
		}
		</script>
@endif

	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider4">
			    <li>
					<img src="{{asset('images/slide1.jpg')}}" alt=""/>
				</li>
				<li>
					<img src="{{asset('images/slide2.jpg')}}" alt=""/>
				</li>
				<li>
					<img src="{{asset('images/slide3.jpg')}}" alt=""/>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
	<!--Slider-Starts-Here-->
				<script src="{{asset('js/responsiveslides.min.js')}}"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
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
			<!--End-slider-script-->
	<!--about-starts-->
	<div class="about"> 
		<div class="container">
			<div class="nbs-flexisel-container">
				<div class="nbs-flexisel-inner">
					<ul id="flexiselDemo3" class="nbs-flexisel-ul" style="display: block; left: -294.12px;">
						
				   		<li class="nbs-flexisel-item" style="width: 220px;">
				   			<a href="single.html"><img src="{{asset('images/logo1.jpg')}}" class="img-responsive" alt=""></a>
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo2.jpg')}}" class="img-responsive" alt=""></a>
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo3.jpg')}}" class="img-responsive" alt=""></a>
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo4.jpg')}}" class="img-responsive" alt=""></a>
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo5.jpg')}}" class="img-responsive" alt=""></a>			
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo6.jpg')}}" class="img-responsive" alt=""></a>
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo7.jpg')}}" class="img-responsive" alt=""></a>
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo3.jpg')}}" class="img-responsive" alt=""></a>
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo3.jpg')}}" class="img-responsive" alt=""></a>
						</li>
						<li class="nbs-flexisel-item" style="width: 220px;">
							<a href="single.html"><img src="{{asset('images/logo3.jpg')}}" class="img-responsive" alt=""></a>			
						</li>
					</ul>
					<div class="nbs-flexisel-nav-left" style="top: 210px;"></div>
					<div class="nbs-flexisel-nav-right" style="top: 210px;"></div>

				</div></div>
						   <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
		</div>
	</div>
	<!--about-end-->
	<!--product-starts-->
	<div class="product"> 
		<h3 class="like text-center">Trang điểm</h3>
		<div class="container">
			<div class="product-top">
				<div class="product-one">
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham1.png')}}" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham1.png')}}" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham1.png')}}"  alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham1.png')}}" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
		</div>
	</div>

	<!-- product 2 -->
	<div class="product"> 
		<h3 class="like text-center">Chăm sóc da</h3>
		<div class="container">
			<div class="product-top">
				<div class="product-one">
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham1.png')}}" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham1.png')}}" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham1.png')}}"  alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham1.png')}}" alt="" /></a>
							<div class="product-bottom">
								<h3>Smart Watches</h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
		</div>
	</div>
	<!--product-end-->
@endsection