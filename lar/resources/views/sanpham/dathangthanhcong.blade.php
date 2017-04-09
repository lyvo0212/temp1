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

<link rel="stylesheet" type="text/css" href="{{asset('css/style-dathang.css')}}">	
<div class="container-page-cs container">
  <div class="checkout-success ">   
	<h2 class="ttl-checkout">Đặt hàng thành công</h2>
	<div class="checkout-success-cont">      
	   <div class="checkout-success-cont-bg">        

		   <div class="content-order">
		    <span class="ic-check"></span>
		    <p>Chào <strong><span class="yel">Ly</span></strong></p>
		    <p>Quý khách vừa đặt thành công sản phẩm của shop <a title="tuongvy90" class="shopName" href="https://www.sendo.vn/shop/tuongvy90/">Eternal Beauty</a>, mã đơn hàng của quý khách là:
		        <a title="Xem đơn hàng 1496895814" href="https://www.sendo.vn/kiem-tra-don-hang/?increment_id=1496895814&amp;email=ggg@gmail.com"><strong><span class="yel">1496895814</span></strong></a>.
		    </p>


		    <p>Sau khi shop xác nhận có hàng, sản phẩm sẽ được giao hàng đến địa chỉ của quý khách tại <strong>Hồ Chí Minh</strong> trong 2.7 ngày.</p>     <p class="g-link">
		            <a href="https://www.sendo.vn/kiem-tra-don-hang/?increment_id=1496895814&amp;email=ggg@gmail.com" title="Chi tiết đơn hàng">Chi tiết đơn hàng</a>
		            <a href="https://www.sendo.vn/checkout/cart/" title="Giỏ hàng">Giỏ hàng</a>
		            <a href="https://www.sendo.vn/dong-ho-phu-kien/dong-ho-nu/dong-ho-thoi-trang/" title="Tiếp tục mua sắm">Tiếp tục mua sắm</a>
		            <!-- <a id="share-fb" class="box-s fb" href="http://www.facebook.com/sharer.php?u=" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=570,height=700');">
		            <span><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg>Share</span>
		            </a> -->
		    </p>
		        <p>Mọi thông tin về đơn hàng sẽ được gửi tới email của quý khách, vui lòng kiểm tra email để biết thêm chi tiết.</p>
		        <br>
		        <br>
		        <p>Cảm ơn quý khách đã tin tưởng và giao dịch tại <a title="www.sendo.vn" href="http://www.sendo.vn/"><span class="red">eternalbeauty.com</span></a></p>
		        <p>Ban quản trị eternalbeauty.com</p>
		    <div class="contact-info">
		        <div>Mọi thắc mắc vui lòng liên hệ: <strong>1900 2222</strong></div>        
		    </div>
		</div>
		<div class="block_buy_product ">
		<h2><svg class="icon icon-facebook"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg> Chia sẻ facebook</h2>
		<p class="author"><span>Ly</span> vừa mua thành công sản phẩm:</p>
		            <div class="product_">
		            <a title="ĐỒNG HỒ NỮ" href="https://www.sendo.vn/san-pham/dong-ho-nu-5051845/">
		                <img width="50" height="50" alt="ĐỒNG HỒ NỮ" title="ĐỒNG HỒ NỮ" src="https://media3.scdn.vn/img2/2017/3_5/Ccnh4V_simg_02d57e_50x50_maxb.jpg">
		                <span class="name">ĐỒNG HỒ NỮ</span>
		            </a>
		            
		        </div>
		       

		        <div class="box-share-fb">
		        <a class="share-fb" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fwww.sendo.vn%2Fcheckout%2Fshare-order%2F%3Fids%3D5051845%26date%3D1490799653%26user_id%3D703226%26checksum%3D6836b94390aa3b51c9280d43ca5a1c36" target="_blank" onclick="window.open(this.href,'sharer','toolbar=0,status=0,width=570,height=700'); return false;">Chia sẻ ngay</a>    
		    </div>
		    
		</div> 
		<script>
		    var productId_js = '{(5051845,1,V\u00e0ng)}';
		    var time_srv = '1490799654';
		    var ip_client = '42.112.95.163';
		    var admin_id = '41265'
		    var cookies = getCookiesArray();
		    var arrPush = [];

		    if (cookies["browserid"]) {
		        arrPush.push('"browserid":"' + cookies["browserid"] +'"');
		    }
		    jQuery.merge( arrPush, data_login );

		    arrPush.push('"productId":"' + productId_js + '"','"shopId":"' + admin_id + '"', '"ipClient":"' + ip_client + '"', '"time":"' + time_srv + '"');
		    arrPush.push('"userId":"' + tracking_id + '"');

		    if (!cookies["s_c_id_type"]) {
		        arrPush.push('"login_type":" "');
		    }
		    if (arrPush.length > 0) {
		        var deviceName = isMobile();
		        arrPush.push('"u_agent":"' + navigator.userAgent.replace(/\;/g, ',') + '"', '"os_info":"' + navigator.platform + '"', '"time_client":"' + jQuery.now() + '"', '"screen_size":"' + jQuery(window).width() + "x" + jQuery(window).height() + '"', '"device_name":"' + deviceName + '"');
		//        GLOBAL_JS.callFunctionWithParameter('pushTrackingBoughtView', 'BasicReady', GLOBAL_JS.basicJs, [arrPush, 'boughtView']);
		        pushTrackingBoughtView(arrPush, 'boughtview');
		    }
		    $(document).ready(function() {
		        trackBoughtView();
		    });
		    function trackBoughtView() {
		        var data_push= {"shipping_fee":14000,"shipper":"VNPOST","ship_to":"hhh Xã An Thới Đông, Huyện Cần Giờ Hồ Chí Minh","ship_time":233280,"voucher_code":"","lotus_points_used":0,"payment_type":["cod_payment"],"products":[{"id":"5051845","name":"ĐỒNG HỒ NỮ","price":"290000","final_price":"290000","quantity":"1","belong_shop_id":"41265","belong_shop_name":"tuongvy90","belong_shop_reputation":{"num_lotuses":"3","lotus_type":"red"},"brand":"","variants":{"mau_sac":{"attribute_value":"Vàng","attribute_id":"284"}},"source_block_id":"listing_products","source_page_id":"cate2_vasup_desc","source_url":"https%3A%2F%2Fwww.sendo.vn%2Fdong-ho-phu-kien%2Fdong-ho-nu%2F","belong_cate_lvl1_id":"1366","belong_cate_lvl2_id":"1372","belong_cate_lvl3_id":"1374","belong_cate_lvl1_name":null,"belong_cate_lvl2_name":"","belong_cate_lvl3_name":""}],"sendo_platform":"desktop"};
		        if(saq_user_data) {
		            data_push['userid']         = saq_user_data.fpt_id;
		            data_push['email']          = saq_user_data.email;
		            data_push['login_type']     = saq_user_data.login_type;
		        } else {
		            data_push['userid']         = null;
		            data_push['email']          = null;
		            data_push['login_type']     = null;
		        }
		        data_push['client_time']        = Date.now();
		        data_push['domain']             = 'www.sendo.vn';
		        data_push['u_agent']            = navigator.userAgent.replace(/\;/g, ',');
		        data_push['ip_client']          = '42.112.95.163';
		        data_push['screen_size']        = jQuery(window).width() + "x" + jQuery(window).height();
		        data_push['event']              = "trackBoughtView";
		        dataLayer.push(data_push);
		    }
		</script>
	</div>
	</div>
  </div>
</div>			
@endsection
