@extends('khachhang.master')
@section('content_dashboard')

<div class="profile">
        <h3>Quản lý đơn hàng</h3>
        <div class="user-order-items first-child">
    <div class="order-inf1 util-clearfix">
        <div class="cols-order-inf">
            <div class=" order-code"><span class="hide-mobile">Mã đơn hàng: </span>
	             <a href="https://www.sendo.vn/sales/order/view/order_nr/1496832644/" title="Xem chi tiết đơn hàng"><span class="link-oder-detail">#1496832644</span></a> 
	             <a href="https://www.sendo.vn/sales/order/view/order_nr/1496832644/" title="Xem chi tiết đơn hàng"><span class="hide-mobile link-oder-detail"><b>|</b>  Chi tiết</span></a>
            </div>
            <div>
                <span class="hide-mobile">Đặt ngày: </span> 28/03/2017                        
            </div>
        </div>
        
        <div class="cols-order-inf cols-order-name">
            <div class="user-inf-status-dh"><span>Chờ xác nhận&nbsp;</span></div>
            <p class="cols-order-inf-name">Người nhận: </p>
            <span>võ thị bích ly </span>
            <div class="user-inf-add">
                uiuhiuhi - Xã Lộc Ninh - Huyện Hồng Dân - Bạc Liêu<br>
                0948938438           
            </div>
            
        </div>
        <div class="cols-order-inf cols-total-money"><span>Tổng tiền:</span> 187,000 VNĐ</div>
        <!--  -->
    </div>
    <div class="order-inf2 util-clearfix">
        <div class="order-inf2-rg"> 
            <div class="block-inprogress">
            	<div class="inner-steps ">
	                  <div class="icon-outer"><img class="icon icon-shoping-flow-xacnhan" src="images/icon1.png">
	                   </div>
	                    <img class="icon icon-line" src="images/icon-line.png">
	                    <p class="not-active"> Chờ xác nhận</p>
              </div>
            <div class="inner-steps ">
                
                  <div class="icon-outer"><img class="icon icon-shoping-flow-xacnhan" src="images/icon1.png">
                   </div>
                    <img class="icon icon-line" src="images/icon-line.png">
                    <p class="not-active"> Đã xác nhận</p>
                                 
            </div>
            <div class="inner-steps ">
                  
                  <div class="icon-outer"><img class="icon icon-shoping-flow-xacnhan" src="images/icon1.png">
                   </div>
                    <img class="icon icon-line" src="images/icon-line.png">
                    <p class="not-active">Đang vận chuyển</p>
                               
            </div>
            <div class="inner-steps ">
                   
                  <img class="icon icon-shoping-flow-xacnhan" src="images/icon1.png">
                   
                    <p class="not-active">Đã giao hàng</p>
                 
            </div> 
           </div>
       </div>
        <div class="order-inf2-lf feedback">
            <a href="https://www.sendo.vn/san-pham/chan-vay-tennis-skirt-xep-ly-mau-trang-vhs001-5259117/" title="" class="img"><img src="https://media3.scdn.vn/img2/2017/3_28/IcLtVi_simg_3a7818_100x100_maxb.jpg" alt=""></a>
            <a href="https://www.sendo.vn/san-pham/chan-vay-tennis-skirt-xep-ly-mau-trang-vhs001-5259117/" title="Son Amok" class="pr-name">Son Amok</a>
            <a href="https://www.sendo.vn/shop/tranghandmade/" title="TrangHandmade" class="shop-name">Shop: <span>Eternal Beauty</span></a>

            <span class="order-status">Đơn hàng chưa thanh toán</span>
            
        </div>
    </div>
    <div class="cols-order-inf cols-total-money-mobile"><span>Tổng tiền: </span> 187,000 Đ</div>
    <div class="block-btn-group">
                <!-- <button class="bt">Thanh toán lại</button> -->            
          <button class="bt btn-hdh" data-toggle="modal" data-target="#huydonhang_popup" onclick="getInfomation('1496832644__34813587_0');">Hủy </button>                                                                  <!-- <a href="https://www.sendo.vn/sales/order/view/order_nr/1496832644/" title="Xem chi tiết đơn hàng >>" class="view-detail">Xem chi tiết đơn hàng >></a> -->
    </div>
</div>
</div>
@endsection