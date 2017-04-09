@extends('sanpham.master')
@section('content')
<!--start-breadcrumbs-->

<link rel="stylesheet" type="text/css" href="{{asset('css/style-kiemtradonhang.css')}}">
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Kiểm tra đơn hàng</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
<div class="container-wrap -page">
	<div class="content">
	  <div class="container check-orders-wrap">
        <div class="tl">Chào bạn, dưới đây là thông tin đơn hàng của bạn:</div>
        <div class="cont-order-detail">
        <div class="block-info-inprogress">
            <div class="first-block">
                <span><span class="hide-mobile">Mã đơn hàng : </span> <b>#1496895814</b></span> 
                 <span class="date-order"><span class="hide-mobile">Đặt hàng : </span> 29/03/2017</span>
                 
            </div>
            <div class="block-inprogress">
				 <div class="inner-steps ">
                    <div class="icon-outer"><img class="icon icon-shoping-flow-xacnhan" src="images/icon1.png">
                        </div>
                    <img class="icon icon-line" src="images/icon-line.png">
                    <p> Chờ xác nhận</p>
                </div>
                 
                <div class="inner-steps ">
                    <div class="icon-outer"><img class="icon icon-shoping-flow-da-xac-nhan" src="images/icon2.png">
                     </div>
                    <img class="icon icon-line" src="images/icon-line.png">
                       
                    <p> Đã xác nhận</p>
                </div>
                 
                <div class="inner-steps ">
                    <div class="icon-outer"><img class="icon icon-shoping-flow-dangvanchueyn" src="images/icon3.png">
                        </div>
                        <img class="icon icon-line" src="images/icon-line.png">
                   
                    <p> Đang vận chuyển</p>
                </div>
                 
                <div class="inner-steps ">
                    <div class="icon-outer"><img class="icon icon-shoping-flow-dagiaohang" src="images/icon4.png">
                        </div>
                        <img class="icon icon-line" src="images/icon-line.png">
                    
                    <p> Đã giao hàng</p>
                </div>
                 
                <div class="inner-steps ">
                    <div class="icon-outer"><img class="icon icon-shoping-flow-hoantat" src="images/icon5.png">
                        </div>
                     
                    <p>Hoàn tất</p>
                </div>
            </div>
        </div>
        <div class="detail-block">
            <div class="table-outer">
                <div class="display-table-spacing">
                    <div class="block-left-detail">
                        <div class="cols-left-detail">
                            <h3>TÌNH TRẠNG VẬN CHUYỂN</h3>
                            <p class="txt-inf">
                                <label>Nhà vận chuyển</label>
                                <i>:</i>
                                <span class="senpay"><strong>VNPOST</strong></span>
                            </p>
                            <p class="txt-inf">
                                <label>Tình trạng</label>
                                <i>:</i>
                                <span><strong>Đã hủy</strong></span>
                            </p>
                        </div>
                             <a href="http://www.vnpost.vn/vi-vn/dinh-vi/buu-pham/key/CQ724476204VN" class="follow-dh not-support">Theo dõi đơn hàng<span class="follow-dh-info">Nhà vận chuyển không hỗ trợ theo dõi đơn hàng </span></a>
                    </div>
            <div class="block-right-detail">
                <h3>THÔNG TIN NHẬN HÀNG</h3>
                <div class="address-inf">
                    <span class="username"><strong>r4444 4444</strong></span>
                    <p class="address">Xã An Thới Đông - Huyện Cần Giờ - Hồ Chí Minh</p>
                </div>
            </div>
                </div>
            </div><!-- table-outer -->
            <div class="block-inner-detail">
                <div class="inner-detail">
                    <p class="txt-inf">
                        <label>Shop</label>
                        <i>:</i>
                        <a href="{{url('/index')}}" class="shop-name"><span>Eternal Beauty</span></a> 
                    </p>
                    <p class="txt-inf">
                        <label><span class="hide-mobile">|   </span>Hình thức thanh toán</label>
                        <i>:</i>
                        <span class="senpay">Thanh toán tận nơi</span>
                    </p>
                    <p class="txt-inf">
                        <label><span class="hide-mobile">|   </span>Trạng thái thanh toán</label>
                        <i>:</i>
                          <span class="status-payment">Chưa thanh toán</span>
                    </p>
                </div>
                <div class="rg-detail">
                    <table class="tbl-items-list">
                        <tbody>
                            <tr class="tbl-header hide-mobile">
                                <th class="hide-mobile">Sản phẩm</th>
                                <th class="hide-mobile">Đơn giá</th>
                                <th class="hide-mobile">Số lượng</th>
                                <th class="hide-mobile">Thành tiền</th>
                            </tr>
                            <tr>
                                <td data-title="Sản Phẩm">
                                    <div class="item-pr">
                                        <img src="https://media3.scdn.vn/img2/2017/3_5/Ccnh4V_simg_3a7818_100x100_maxb.jpg" alt="">
                                        <div class="item-pr-info">
                                            <a href="https://www.sendo.vn/san-pham/dong-ho-nu-5051845" title="" class="pr-name">ĐỒNG HỒ NỮ</a>                  
                                            	<p class="size"><span class="title-size">Màu sắc:</span><span class="display-color-product" style="background-color: #ffff00;"></span></p>
                                            	<p class="price-mobile"> 1 <span>x</span> 290,000  đ
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Giá" class="price hide-mobile">290,000 đ</td>
                                <td data-title="Số lượng" class="numb hide-mobile">1</td>
                                
                                  <td data-title="Thành tiền" class="total-pr hide-mobile">290,000 đ</td>
                            </tr>
                          </tbody>
                    </table>
                    <div class="order-bill">
                        <div class="detail-order-bill">
                            <div class="row-inf">
                                <span class="lbl">Tổng tiền:</span>
                                <span class="fee">290,000 đ</span>
                            </div>
                             <div class="row-inf">
                                <span class="lbl">Phí vận chuyển:</span><!-- 
                                <i class="pointer">:</i> -->
                                <span class="fee">
                                14,000 đ
                                </span>
                            </div> 
                             
                            <div class="row-inf last-child">
                                <span class="lbl"><b>Tổng thanh toán</b></span>
                                <span class="fee"><b>294,000</b> đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="user-address-block">
            <div class="bt-block">
                <a href="http://item.sendo.vn/sales/order/history/">
                    <button class="bt back-order-list">Quay lại danh sách đơn hàng</button>
                </a>
            </div>
        </div> -->
      </div>
    </div>
   </div>
</div>
@endsection