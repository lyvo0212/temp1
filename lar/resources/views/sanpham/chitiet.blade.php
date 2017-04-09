@extends('sanpham.master')
@section('content')
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Nước hoa</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-9 single-main-left">
				<form action="/action_page.php" id="ProductDetailsForm">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							  <ul class="slides">
								<li data-thumb="{{asset('images/sanpham1.png')}}">
									<div class="thumb-image"> <img src="{{asset('images/sanpham1.png')}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="{{asset('images/sanpham2.png')}}">
									 <div class="thumb-image"> <img src="{{asset('images/sanpham2.png')}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li>
								<li data-thumb="{{asset('images/sanpham3.png')}}">
								   <div class="thumb-image"> <img src="{{asset('images/sanpham3.png')}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li> 
							  </ul>
						</div>
						<!-- FlexSlider -->
						
					</div>	
					<div class="col-md-7 single-top-right">
						<div class="single-para simpleCart_shelfItem">
						<h2>Nước Hoa Cam Christian Lenart Eau Aromatisée De Fleurs D’ Oranger</h2>
							<h5 class="item_price">285.000 VND</h5>
							<p>Nước Hoa Cam Christian Lenart Eau Aromatisée De Fleurs D’ Oranger – “Cô nàng” hoa luôn “đi guốc trong da” chị em để “đáp ứng” tức thì, cho làn da tươi sáng láng mịn cả khi “mặt mộc” lẫn khi “mặt phấn”.</p>
						
							 <div class="available">
							
								<!-- <ul>
									<li>Số lượng
										<input type="number" name="quantity" min="1" max="100" value="1">
									</li>
									<div class="clearfix"> </div>
								</ul> -->
								
								<div class="quantity product-quantity clearfix col-md-6 col-xs-12 noleftpadding">
									<div class="nums-choose-box">
										<span class="fleft">Chọn số lượng</span>
										<div class="nums-choose fleft">
											<button type="button" class="desc-btn fleft minus">-</button>
											<input type="text" id="product_quantity" min="1" name="quantity" value="1" title="Qty" class="nums-show qty fleft" size="4">
											<button type="button" class="asc-btn fleft plus">+</button>
										</div>
									</div>
								</div>
						<!-- xu ly cong tru  -->
						<script>
							document.addEventListener('DOMContentLoaded', function() 
							{
									var quantity = parseInt($('#ProductDetailsForm .product-quantity input.qty').val());

									$('#ProductDetailsForm .minus').click(function()
									 {
										if (quantity > 1) 
											{ quantity -= 1; }
											$('#ProductDetailsForm .product-quantity input.qty').val(quantity);
									});
									$('#ProductDetailsForm  .plus').click(function() {
											quantity += 1;
											$('#ProductDetailsForm .product-quantity input.qty').val(quantity)
										});
							})
						</script>
							</div>
								<ul class="tag-men">
									<li><span>Thương hiệu</span>
									<span class="women1">: Hàn</span></li>
								</ul>
								<input type="submit" class="add-cart item_add" value="Thêm vào giỏ hàng">
									
							
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				</form>
		<div class="tabs">
			<ul class="menu_drop">
				<li class="item1"><a href="#"><img src="images/arrow.png" alt="">Description</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images/arrow.png" alt="">Additional information</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images/arrow.png" alt="">Reviews (10)</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images/arrow.png" alt="">Helpful Links</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item5"><a href="#"><img src="images/arrow.png" alt="">Make A Gift</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
	 		</ul>
				</div>
				<div class="latestproducts">
					<h3 style="text-align: center; font-family: 'Comic Sans MS', sans-serif; color: #f06d9b">Sản phẩm liên quan</h3>
					<div class="product-one">
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham2.png')}}" alt="" /></a>
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
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham2.png')}}" alt="" /></a>
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
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham2.png')}}" alt="" /></a>
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

				<div class="product-one">
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham2.png')}}" alt="" /></a>
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
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham2.png')}}" alt="" /></a>
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
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="{{asset('images/sanpham2.png')}}" alt="" /></a>
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
				<div class="col-md-3 single-right">
					<div class="w_sidebar">
						<marquee scrollamount="6" direction="down" scrolldelay="0">
							<div>
								<img src="{{asset('images/qc1.jpg')}}" width="245px" height="190px" /></div>
							<div style="margin: 5px 0 0 3px">	
								<img src="{{asset('images/qc2.jpg')}}" width="245px" height="190px"/></div>
							<div style="margin: 5px 0 0 3px">	
								<img src="{{asset('images/qc3.jpg')}}" width="245px" height="190px" /></div>
							<div style="margin: 5px 0 0 3px">	
								<img src="{{asset('images/qc4.jpg')}}" width="245px" height="190px" /></div>
							<div style="margin: 5px 0 0 3px">	
								<img src="{{asset('images/qc5.jpg')}}" width="245px"  height="190px0px"/></div>
							<div style="margin: 5px 0 0 3px">	
								<img src="{{asset('images/qc6.jpg')}}" width="245px" height="190px"/></div>
							<div style="margin: 5px 0 0 3px">	
								<img src="{{asset('images/qc7.jpg')}}" width="245px" height="190px"/></div>
							<div style="margin: 5px 0 0 3px">	
								<img src="{{asset('images/qc8.jpg')}}" width="245px" height="190px"/></div>
							
						</marquee>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
@endsection