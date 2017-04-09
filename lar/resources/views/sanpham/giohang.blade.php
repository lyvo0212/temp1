@extends('sanpham.master')
@section('content')
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Giỏ hàng</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-ckeckout-->
	<div class="container clearfix" style="margin-top: 20px">
			<form action="/cart" method="post" id="cartformpage">
				<div class="table-responsive">
					<table class="table cart">
						<thead>
							<tr>
								<th class="cart-product-thumbnail hidden-xs">&nbsp;</th>
								<th class="cart-product-name hidden-xs">Sản phẩm</th>
								<th class="cart-product-name hidden-lg hidden-md hidden-sm" colspan="2">Sản phẩm</th>
								<th class="cart-product-price">Đơn giá</th>
								<th class="cart-product-quantity">Số lượng</th>
								<th class="cart-product-subtotal">Thành tiền</th>
								<th class="cart-product-remove">Xoá</th>
							</tr>
						</thead>
						<tbody>
							
							<tr class="cart_item">
								<td class="cart-product-thumbnail" style="width: 132px !important">
									<a href="/dot-mo-giam-can-muscletech-hydroxycut?variantid=4403699"><img src="images/kematnuoc.jpg" alt="Muscletech Hydroxycut"></a>
								</td>

								<td class="cart-product-name">
									<a href="/dot-mo-giam-can-muscletech-hydroxycut?variantid=4403699">Muscletech Hydroxycut</a>
									<p style="margin-bottom: 0;">Default Title</p>
								</td>

								<td class="cart-product-price">
									<span class="amount">1.200.000₫</span>
								</td>

								<td class="cart-product-quantity">
									<div class="quantity clearfix" style="width: 150px !important">
										<input type="button" onclick="minus_quantity(2191393,&quot;desktop_product-quantity2updates_2191393&quot;)" value="-" class="minus">
										<input type="text" name="Lines" value="1" class="qty" id="desktop_product-quantity2updates_2191393">
										<input type="button" value="+" class="plus" onclick="plus_quantity(2191393,&quot;desktop_product-quantity2updates_2191393&quot;)">
									</div>
								</td>

								<td class="cart-product-subtotal">
									<span class="amount">2.400.000₫</span>
								</td>
								<td class="cart-product-remove">
									<a href="/cart/change?line=1&amp;quantity=0" class="remove" title="Remove this item"><i class="fa fa-trash-o"></i></a>
								</td>

							</tr>
							
							<tr class="cart_bottom" style="text-align:center;">
								<td class="hidden-xs">&nbsp;</td>
								<td class="hidden-xs">&nbsp;</td>
								<td class="hidden-xs">&nbsp;</td>
								<td class="hidden-xs">&nbsp;</td>
								<td><h4 style="margin-bottom:0px;">Tổng tiền </h4></td>
								<td class="hidden-xs"><span class="amount color lead"><strong>2.400.000₫</strong></span></td>
								<td class="hidden-lg hidden-md hidden-sm" colspan="2"><span class="amount color"><strong>2.400.000₫</strong></span></td>
							</tr>
						</tbody>
					</table>

				</div>
				<div class="row clearfix">
					<!--div class="col-md-6 col-sm-6 col-xs-12 nopadding" style = 'margin-top:-20px!important'>
						<div class="checkout-buttons clearfix">
							<button class="cart_continous button" type="button" onclick="window.location.href='/collections/all'"><i class="fa fa-reply"></i>Tiếp tục mua sắm</button>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 topmargin nopadding">
						<button name="update" class="cart_update_btn button button-3d nomargin fright">CẬP NHẬT GIỎ HÀNG</button>
						<button class="button button-3d notopmargin fright cart_checkout_btn" type="button" onclick="window.location.href='/checkout'">THANH TOÁN </button>
					</div-->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<button class="cart_continous button" type="button" onclick="window.location.href='/collections/all'"><i class="fa fa-reply"></i>TIẾP TỤC MUA HÀNG</button>
						<button class="cart_checkout_btn button fright" title="Tiến hành đặt hàng" type="button" onclick="window.location.href='/checkout'"><i class="fa fa-money"></i>THANH TOÁN</button>
						<button name="update" class="cart_update_btn button fright"><i class="fa fa-refresh"></i> CẬP NHẬT GIỎ HÀNG</button>	
					</div>
				</div>
			</form>
			<script type="text/javascript">
				function minus_quantity(item_id,desktop_mobile) {
					var quantity = parseInt($('#'+desktop_mobile).val());
					if (quantity > 0) {
						quantity -= 1;
					}
					else {
						quantity = 0;
					}
					$('#'+desktop_mobile).val(quantity);
				}
				function plus_quantity(item_id,desktop_mobile) {
					var quantity = parseInt($('#'+desktop_mobile).val());
					if (quantity < 100) {
						quantity += 1;
					}
					else {
						quantity = 100;
					}
					$('#'+desktop_mobile).val(quantity);
				}
			</script>
		</div>
	<!--end-ckeckout-->
	<!--information-starts-->
@endsection	