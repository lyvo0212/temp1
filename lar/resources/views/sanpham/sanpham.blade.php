@extends('sanpham.master');
@section('content')
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">New Products</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->

	<!-- start-sort -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="mens-toolbar">
                 <div class="sort">
               	   <div class="sort-by">
			            <label>Sắp xếp theo</label>
			            <select>
			                   <option value="">Tên </option>
			                    <option value="">Giá giảm dần </option>
			                    <option value="">Giá tăng dần </option>
			            </select>
			        </div>
	    		 </div>
		    	        <ul class="women_pagenation">
					     <li>Page:</li>
					     <li class="active"><a href="#">1</a></li>
					     <li><a href="#">2</a></li>
				  	    </ul>
	               		 <div class="clearfix"></div>		
			  </div>
		 </div>
	 </div>
	<!-- end-sort  -->
	<!--prdt-starts-->
	
	<div class="prdt"> 
		<div class="container">
			<div class="prdt-top">
			    <div class=" sap_tabs col-md-9 prdt-left">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Men's</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Women</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Handbags</span></li>	
						<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Cosmetics</span></li>			
					</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0">
						<span class="resp-arrow"></span>Men's
					</h2>
					<div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
						<div class="col-md-12 top-product-grids tp1 animated wow slideInUp product-one" data-wow-delay=".5s">
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-2.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>		
						<div class="clearfix"></div>
					</div>
					</div>

					<h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Women</h2>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="col-md-12 top-product-grids tp1 animated wow slideInUp product-one" data-wow-delay=".5s">
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>		
						<div class="clearfix"></div>
					</div>
					</div>
					
					<h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Handbags</h2>
					<div class="col-md-12 top-product-grids tp1 animated wow slideInUp product-one" data-wow-delay=".5s">
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-2.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>		
						<div class="clearfix"></div>
					</div>
					</div>						
						
					<h2 class="resp-accordion" role="tab" aria-controls="tab_item-3"><span class="resp-arrow"></span>Cosmetics</h2>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
						<div class="col-md-12 top-product-grids tp1 animated wow slideInUp product-one" data-wow-delay=".5s">
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>
							<div class="col-md-4 product-left p-left">
								<div class="product-main simpleCart_shelfItem">
									<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png" alt="" /></a>
									<div class="product-bottom">
										<h3>Smart Watches</h3>
										<p>Explore Now</p>
										<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
									</div>
									<div class="srch srch1">
										<span>-50%</span>
									</div>
								</div>
							</div>		
						<div class="clearfix"></div>
					</div>
					</div>					
				</div>
			</div>
			<script src="{{asset('js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});		
			</script>
		</div>
	<!-- end left -->

	<!-- right -->
				<div class="col-md-3 prdt-right">
					<div class="w_sidebar">
						<section  class="sky-form">
							<h4>Loại</h4>
							<div class="row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Tất cả sản phẩm</label>
								</div>
								<div class="col col-4">								
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Trang điểm</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Chăm sóc da</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nước hoa</label>			
								</div>
							</div>
						</section>
						<section  class="sky-form">
							<h4>Thương hiệu</h4>
							<div class="row1 row2 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sonata</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Titan</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casio</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Omax</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fastrack</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sports</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fossil</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Maxima</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yepme</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citizen</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diesel</label>									
								</div>
							</div>
						</section>
						
					</div>
					<div class="col col-4" style="margin-top: 20px;">
						
							<img src="{{asset('images/bia.jpg')}}" width="255px"/>	
							<img src="{{asset('images/bia1.jpg')}}" width="255px"/>	
					</div>			
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--product-end-->
@endsection