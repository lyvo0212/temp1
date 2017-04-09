<!DOCTYPE html>
<html>
<head>
  <title>Thanh toan</title>
  <!-- thanh toan -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style-thanhtoan.css')}}" rel="stylesheet">
<script src="https://static.scdn.vn/js/ecom/jquery-ui-1.10.4.custom.min.js?v=20170328150326"></script>
<script src="{{asset('js/layout_index/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/checkout.js')}}"></script>
<script type="text/javascript" src="{{asset('js/checkout-v2.js')}}"></script>
<script>
    jQuery(document).ready(function(){
        showBlock();/* show block step */
        //addNewAddres();/* add new address */
        selectPhuongXa();/* select phuong xa */
        //selectPayment();/* check hinh thuc thanh toan */
        //showBank();/* show bank group */
        //activeLogoBank();/* active logo bank */
    });
    function showBlock(){
        jQuery('.ic-minus').click(function(){
            jQuery(this).toggleClass('hide');
            jQuery(this).parent().next('.box-step').slideToggle(100);
        });
    }
  

    function selectPhuongXa(){
        jQuery(document).on('click touchstart','.option-ward',function(){
            jQuery('.select-option-ward').slideToggle('fast');
        });
        // jQuery('.select-option-ward span').on('click ',function(){
        //     jQuery('.option-ward .shipping_ward_show').val(jQuery(this).html());
        //     jQuery('.option-ward .shipping_ward').val(jQuery(this).html());
        //     //jQuery('.select-option-ward').slideToggle('fast');
        // });
        jQuery(document).click(function(ev){
            var tar = jQuery(ev.target);
            if(tar.parent('.option-ward').length ==0){jQuery('.select-option-ward').hide();}
        });
    }

    </script>
<!-- ket thuc thanh toan -->
</head>
<body>
	<!--start-breadcrumbs-->
	<header id="header" class="">
  <div class="header-content">
      <div class="logo">
        <h1 class="logo-sendo"> <a href="" ><img itemprop="logo" src="images/eternal-beauty-logo-600-bc.gif" alt="" width="142" height="auto">        
        </a> </h1>
      </div>
      <div class="checkout-step-bar">
        <div class="step-bar">
          <!-- <div class="step step1 active"><span>Đăng nhập</span></div> -->
          <div class="step step2 active"><span>Thông tin nhận hàng</span></div>
          <div class="step step3 active"><span>Hình thức thanh toán</span></div>
          <div class="step step4 active current"><span>Chọn nhà vận chuyển</span></div>
          <div class="step step5"><span>Đặt hàng</span></div>
        </div>
      </div>
  </div>
</header>
	<!--end-breadcrumbs-->

<!-- thanh toan -->
	<div class="checkout-swap">
<form action="" method="post">
<div class="content_checkout_page">
    <div id="ajax_loader" class="ajax-load-qa" style="display: none;">&nbsp;</div>
  <div class="checkout-content util-clearfix">
    <div class="checkout-colt-left">
    <div class="checkout-status hide">
      <div class="left"><span class="img-status-check"></span></div>
      <div class="right">
        <span id="checkout-status-text"></span>
        <ul id="list-pr-off">
        </ul>
        <span class="note" style=" display: none;"><a class="note"></a></span>
      </div>
    </div>
      <!-- dia chi nhan hang -->
      <div id="block_shipping" class="block-shipping">
      <div id="opc-shipping" class="block-info section">
   <div class="step-title ttl-box"><span class="tl">Thông tin người nhận</span></div>
   <div id="checkout-step-shipping" class="box-step">
            <!--box-cols-info-->
            <script type="text/javascript">
        jQuery(document).ready(function(){
          checkBtnSaveOrder(false);
       });
      </script>
    <div class="require_s" style="display: none;">
     </div>
      <!--checkout-step-shipping-->
         <div class="add-new-address " id="shipping-new-address-form" style="display:block;">
            <div class="box_add_newaddress">
               <div class="box_modal_address">
                  <div class="box">
                     <div class="title">Họ và tên đệm <span class="red_star">*</span></div>
                     <div class="text">
                        <div class="col1 address">
                           <input class="txt shipping_firstname required-entry validate-firstname" type="text" name="firstname" placeholder="Họ và tên đệm">
                           <span>Tên <span class="red_star">*</span></span>
                           <input class="txt shipping_lastname required-entry validate-lastname" type="text" name="lastname" placeholder="Tên" >
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="title">Địa chỉ đường <span class="red_star">*</span></div>
                     <div class="text">
                        <input type="text" name="street-address" class="txt shipping_address validate-street required-entry" placeholder="Địa chỉ" >
                     </div>
                  </div>
                  
                  <div class="box">
                      <div class="text">
                        <div class="col1">
                            
                           <select name="region" class="shipping_region required-entry" autocomplete="on">
                              <option value="">Tỉnh / Thành</option>
                                    <option value="2" title="Hà Nội">Hà Nội</option>
                                    <option value="1" title="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="3" title="An Giang">An Giang</option>
                                    <option value="58" title="Bà Rịa–Vũng Tàu">Bà Rịa–Vũng Tàu</option>
                                    <option value="6" title="Bắc Giang">Bắc Giang</option>
                                    <option value="5" title="Bắc Kạn">Bắc Kạn</option>
                                    <option value="7" title="Bạc Liêu">Bạc Liêu</option>
                                    <option value="8" title="Bắc Ninh">Bắc Ninh</option>
                                    <option value="9" title="Bến Tre">Bến Tre</option>
                                    <option value="11" title="Bình Định">Bình Định</option>
                                    <option value="61" title="Bình Dương">Bình Dương</option>
                                    <option value="12" title="Bình Phước">Bình Phước</option>
                                    <option value="13" title="Bình Thuận">Bình Thuận</option>
                                    <option value="14" title="Cà Mau">Cà Mau</option>
                                    <option value="15" title="Cần Thơ">Cần Thơ</option>
                                    <option value="16" title="Cao Bằng">Cao Bằng</option>
                                    <option value="17" title="Đà Nẵng">Đà Nẵng</option>
                                    <option value="18" title="Đắk Lắk">Đắk Lắk</option>
                                    <option value="62" title="Đắk Nông">Đắk Nông</option>
                                    <option value="19" title="Điện Biên">Điện Biên</option>
                                    <option value="20" title="Đồng Nai">Đồng Nai</option>
                                    <option value="63" title="Đồng Tháp">Đồng Tháp</option>
                                    <option value="21" title="Gia Lai">Gia Lai</option>
                                    <option value="22" title="Hà Giang">Hà Giang</option>
                                    <option value="23" title="Hà Nam">Hà Nam</option>
                                    <option value="25" title="Hà Tĩnh">Hà Tĩnh</option>
                                    <option value="26" title="Hải Dương">Hải Dương</option>
                                    <option value="27" title="Hải Phòng">Hải Phòng</option>
                                    <option value="24" title="Hậu Giang">Hậu Giang</option>
                                    <option value="28" title="Hòa Bình">Hòa Bình</option>
                                    <option value="52" title="Huế">Huế</option>
                                    <option value="64" title="Hưng Yên">Hưng Yên</option>
                                    <option value="30" title="Khánh Hòa">Khánh Hòa</option>
                                    <option value="56" title="Kiên Giang">Kiên Giang</option>
                                    <option value="65" title="Kon Tum">Kon Tum</option>
                                    <option value="32" title="Lai Châu">Lai Châu</option>
                                    <option value="33" title="Lâm Đồng">Lâm Đồng</option>
                                    <option value="34" title="Lạng Sơn">Lạng Sơn</option>
                                    <option value="35" title="Lào Cai">Lào Cai</option>
                                    <option value="36" title="Long An">Long An</option>
                                    <option value="37" title="Nam Định">Nam Định</option>
                                    <option value="38" title="Nghệ An">Nghệ An</option>
                                    <option value="66" title="Ninh Bình">Ninh Bình</option>
                                    <option value="39" title="Ninh Thuận">Ninh Thuận</option>
                                    <option value="40" title="Phú Thọ">Phú Thọ</option>
                                    <option value="41" title="Phú Yên">Phú Yên</option>
                                    <option value="42" title="Quảng Bình">Quảng Bình</option>
                                    <option value="43" title="Quảng Nam">Quảng Nam</option>
                                    <option value="44" title="Quảng Ngãi">Quảng Ngãi</option>
                                    <option value="45" title="Quảng Ninh">Quảng Ninh</option>
                                    <option value="46" title="Quảng Trị">Quảng Trị</option>
                                    <option value="47" title="Sóc Trăng">Sóc Trăng</option>
                                    <option value="67" title="Sơn La">Sơn La</option>
                                    <option value="48" title="Tây Ninh">Tây Ninh</option>
                                    <option value="49" title="Thái Bình">Thái Bình</option>
                                    <option value="50" title="Thái Nguyên">Thái Nguyên</option>
                                    <option value="51" title="Thanh Hóa">Thanh Hóa</option>
                                    <option value="53" title="Tiền Giang">Tiền Giang</option>
                                    <option value="54" title="Trà Vinh">Trà Vinh</option>
                                    <option value="55" title="Tuyên Quang">Tuyên Quang</option>
                                    <option value="60" title="Vĩnh Long">Vĩnh Long</option>
                                    <option value="57" title="Vĩnh Phúc">Vĩnh Phúc</option>
                                    <option value="59" title="Yên Bái">Yên Bái</option>
                            </select>
                        </div>
                    <div class="col2">
                      <select id="shippingdistrict" name="locality" class="shipping_district required-entry" autocomplete="on">
                           <option value="">Quận / Huyện</option>
                           <option value="20">Huyện Bình Chánh</option>
                           <option value="704">Huyện Cần Giờ</option>
                           <option value="705">Huyện Củ Chi</option>
                           <option value="703">Huyện Hóc Môn</option>
                           <option value="713">Huyện Nhà Bè</option>
                           <option value="1">Quận 1</option>
                           <option value="2">Quận 2</option>
                           <option value="3">Quận 3</option>
                           <option value="4">Quận 4</option>
                           <option value="5">Quận 5</option>
                           <option value="6">Quận 6</option>
                           <option value="7">Quận 7</option>
                           <option value="8">Quận 8</option>
                           <option value="9">Quận 9</option>
                           <option value="10">Quận 10</option>
                           <option value="11">Quận 11</option>
                           <option value="12">Quận 12</option>
                           <option value="19">Quận Bình Tân</option>
                           <option value="14">Quận Bình Thạnh</option>
                           <option value="17">Quận Gò Vấp</option>
                           <option value="13">Quận Phú Nhuận</option>
                           <option value="15">Quận Tân Bình</option>
                           <option value="16">Quận Tân Phú</option>
                           <option value="18">Quận Thủ Đức</option>
                      </select>
                    
                      
                        </div>
                        <div class="col3 col-shipping-ward">
                          <div class="box-ward">
                              <select id="shippingdistrict">
                              		<option value="">Phường / Xã</option>
                                 <option value="20">Huyện Bình Chánh</option>
		                             <option value="19">Phường Tây Thạnh</option>
		                       </select>
                             
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="title">Số điện thoại di động<span class="red_star">*</span></div>
                     <div class="text">
                        <input type="text" name="phone" value="" class="txt shipping_telephone required-entry validate-phone" id="shipping:telephone" onkeypress="return Checkout.onlyNumberKey(event)" onkeyup="Checkout.check_telephone(this)" onblur="Checkout.checkGaTagManager(this);Checkout.update_shipping();" onclick="Checkout.calculateTime();" autocomplete="on" maxlength="11">
                     </div>
                  </div>
                   <div class="box">
                     <div class="rw-checkout-voucher" style=" border-style: none;">
                        <div class="caption-rw-checkout ttl-voucher">
                            <label>
                                <span>Thêm địa chỉ người nhận</span>
                                <span class="ic-collape">&nbsp;</span>
                            </label>
                        </div>
          <!-- dia chi khac -->
              <div class="checkout-voucher01 ">
                    <div class="bt-add" >
                     <div class="box">
                     <div class="title">Họ và tên đệm <span class="red_star">*</span></div>
                     <div class="text">
                        <div class="col1 address">
                           <input class="txt shipping_firstname required-entry validate-firstname" type="text" name="firstname" placeholder="Họ và tên đệm">
                           <span>Tên <span class="red_star">*</span></span>
                           <input class="txt shipping_lastname required-entry validate-lastname" type="text" name="lastname" placeholder="Tên" >
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="title">Địa chỉ đường <span class="red_star">*</span></div>
                     <div class="text">
                        <input type="text" name="street-address" class="txt shipping_address validate-street required-entry" placeholder="Địa chỉ" >
                     </div>
                  </div>
                  
                  <div class="box">
                      <div class="text">
                        <div class="col1">
                            
                           <select name="region" class="shipping_region required-entry" autocomplete="on">
                              <option value="">Tỉnh / Thành</option>
                                    <option value="2" title="Hà Nội">Hà Nội</option>
                                    <option value="1" title="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="3" title="An Giang">An Giang</option>
                                    <option value="58" title="Bà Rịa–Vũng Tàu">Bà Rịa–Vũng Tàu</option>
                                    <option value="6" title="Bắc Giang">Bắc Giang</option>
                                    <option value="5" title="Bắc Kạn">Bắc Kạn</option>
                                    <option value="7" title="Bạc Liêu">Bạc Liêu</option>
                                    <option value="8" title="Bắc Ninh">Bắc Ninh</option>
                                    <option value="9" title="Bến Tre">Bến Tre</option>
                                    <option value="11" title="Bình Định">Bình Định</option>
                                    <option value="61" title="Bình Dương">Bình Dương</option>
                                    <option value="12" title="Bình Phước">Bình Phước</option>
                                    <option value="13" title="Bình Thuận">Bình Thuận</option>
                                    <option value="14" title="Cà Mau">Cà Mau</option>
                                    <option value="15" title="Cần Thơ">Cần Thơ</option>
                                    <option value="16" title="Cao Bằng">Cao Bằng</option>
                                    <option value="17" title="Đà Nẵng">Đà Nẵng</option>
                                    <option value="18" title="Đắk Lắk">Đắk Lắk</option>
                                    <option value="62" title="Đắk Nông">Đắk Nông</option>
                                    <option value="19" title="Điện Biên">Điện Biên</option>
                                    <option value="20" title="Đồng Nai">Đồng Nai</option>
                                    <option value="63" title="Đồng Tháp">Đồng Tháp</option>
                                    <option value="21" title="Gia Lai">Gia Lai</option>
                                    <option value="22" title="Hà Giang">Hà Giang</option>
                                    <option value="23" title="Hà Nam">Hà Nam</option>
                                    <option value="25" title="Hà Tĩnh">Hà Tĩnh</option>
                                    <option value="26" title="Hải Dương">Hải Dương</option>
                                    <option value="27" title="Hải Phòng">Hải Phòng</option>
                                    <option value="24" title="Hậu Giang">Hậu Giang</option>
                                    <option value="28" title="Hòa Bình">Hòa Bình</option>
                                    <option value="52" title="Huế">Huế</option>
                                    <option value="64" title="Hưng Yên">Hưng Yên</option>
                                    <option value="30" title="Khánh Hòa">Khánh Hòa</option>
                                    <option value="56" title="Kiên Giang">Kiên Giang</option>
                                    <option value="65" title="Kon Tum">Kon Tum</option>
                                    <option value="32" title="Lai Châu">Lai Châu</option>
                                    <option value="33" title="Lâm Đồng">Lâm Đồng</option>
                                    <option value="34" title="Lạng Sơn">Lạng Sơn</option>
                                    <option value="35" title="Lào Cai">Lào Cai</option>
                                    <option value="36" title="Long An">Long An</option>
                                    <option value="37" title="Nam Định">Nam Định</option>
                                    <option value="38" title="Nghệ An">Nghệ An</option>
                                    <option value="66" title="Ninh Bình">Ninh Bình</option>
                                    <option value="39" title="Ninh Thuận">Ninh Thuận</option>
                                    <option value="40" title="Phú Thọ">Phú Thọ</option>
                                    <option value="41" title="Phú Yên">Phú Yên</option>
                                    <option value="42" title="Quảng Bình">Quảng Bình</option>
                                    <option value="43" title="Quảng Nam">Quảng Nam</option>
                                    <option value="44" title="Quảng Ngãi">Quảng Ngãi</option>
                                    <option value="45" title="Quảng Ninh">Quảng Ninh</option>
                                    <option value="46" title="Quảng Trị">Quảng Trị</option>
                                    <option value="47" title="Sóc Trăng">Sóc Trăng</option>
                                    <option value="67" title="Sơn La">Sơn La</option>
                                    <option value="48" title="Tây Ninh">Tây Ninh</option>
                                    <option value="49" title="Thái Bình">Thái Bình</option>
                                    <option value="50" title="Thái Nguyên">Thái Nguyên</option>
                                    <option value="51" title="Thanh Hóa">Thanh Hóa</option>
                                    <option value="53" title="Tiền Giang">Tiền Giang</option>
                                    <option value="54" title="Trà Vinh">Trà Vinh</option>
                                    <option value="55" title="Tuyên Quang">Tuyên Quang</option>
                                    <option value="60" title="Vĩnh Long">Vĩnh Long</option>
                                    <option value="57" title="Vĩnh Phúc">Vĩnh Phúc</option>
                                    <option value="59" title="Yên Bái">Yên Bái</option>
                            </select>
                        </div>
                    <div class="col2">
                      <select id="shippingdistrict" name="locality" class="shipping_district required-entry" autocomplete="on">
                           <option value="">Quận / Huyện</option>
                           <option value="20">Huyện Bình Chánh</option>
                           <option value="704">Huyện Cần Giờ</option>
                           <option value="705">Huyện Củ Chi</option>
                           <option value="703">Huyện Hóc Môn</option>
                           <option value="713">Huyện Nhà Bè</option>
                           <option value="1">Quận 1</option>
                           <option value="2">Quận 2</option>
                           <option value="3">Quận 3</option>
                           <option value="4">Quận 4</option>
                           <option value="5">Quận 5</option>
                           <option value="6">Quận 6</option>
                           <option value="7">Quận 7</option>
                           <option value="8">Quận 8</option>
                           <option value="9">Quận 9</option>
                           <option value="10">Quận 10</option>
                           <option value="11">Quận 11</option>
                           <option value="12">Quận 12</option>
                           <option value="19">Quận Bình Tân</option>
                           <option value="14">Quận Bình Thạnh</option>
                           <option value="17">Quận Gò Vấp</option>
                           <option value="13">Quận Phú Nhuận</option>
                           <option value="15">Quận Tân Bình</option>
                           <option value="16">Quận Tân Phú</option>
                           <option value="18">Quận Thủ Đức</option>
                      </select>
                    
                      
                        </div>
                        <div class="col3 col-shipping-ward">
                          <div class="box-ward">
                              <select id="shippingdistrict">
                                  <option value="">Phường / Xã</option>
                                 <option value="20">Huyện Bình Chánh</option>
                                 <option value="19">Phường Tây Thạnh</option>
                           </select>
                             
                          </div>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="title">Số điện thoại di động<span class="red_star">*</span></div>
                     <div class="text">
                        <input type="text" name="phone" value="" class="txt shipping_telephone required-entry validate-phone" id="shipping:telephone" onkeypress="return Checkout.onlyNumberKey(event)" onkeyup="Checkout.check_telephone(this)" onblur="Checkout.checkGaTagManager(this);Checkout.update_shipping();" onclick="Checkout.calculateTime();" autocomplete="on" maxlength="11">
                     </div>
                  </div>
                  
              </div>
        <!-- ket thuc them dia chi -->
  </div></div>
            </div>
                  </div>
                  <div class="message_error" style="color: rgb(255, 0, 0); display: none;"></div>
                        <div class="require_s" style="display: none;">
                            <span>(<span class="red_star">*</span>)Vui lòng nhập đầy đủ thông tin yêu cầu</span>
                    </div>
                  
               </div>
               <!--box_modal_address-->
            </div>
         </div>
   </div>


<style>
   .validation-failed,.validation-email-failed{border: 1px dashed #FF0000 !important;}
</style>
      </div>
      <!-- chon nha van chuyen -->
      <div id="opc-review" class="block-info block-total-info opc-review">
    <div class="title step-title ttl-box"><span class="tl">Chọn nhà vận chuyển</span></div>
    <div id="checkout-step-review" class="box-step a-item">
        <div id="checkout-review-choose-supplier">
        	<script type="text/javascript">
				$(document).ready(function(){
				    $('.tooltip-checkout').tooltip();

				});
		</script>
<div class="shippingfee">
<div class="choice_supplier">


<label>Vận chuyển toàn quốc: </label>
    <div class="box-vc">
        <div class="shipto">
            Giao hàng đến
             <a title="Hồ Chí Minh" data-toggle="modal" data-target="#cart_shipping_method98036" class="usr_locale" >
                <strong>Hồ Chí Minh </strong>
             </a>
           
                <span>với phí</span>
                 <strong>39.000 đ</strong>
                    <p class="txt-transport">Thời gian giao hàng <strong>
                     8.4 ngày  </strong>
                     </p>
              <div class="fix_table_cell full">
                <div class="note-txt">
                     <!-- <p class="noshippingfee">Tiết kiệm <span class="green-mp"><b> đ</b></span> phí vận chuyển khi thanh toán qua <strong>Senpay</strong></p> -->
                </div>
            </div>
          </div>
    </div>
    </div>
</div>
<script>
    function rdHandleChange(ele) {
        console.log(123);
        $(ele).closest('.table-shipping-fee').find('tr').removeClass('active');
        $(ele).closest('tr').addClass('active')
    }
</script>
</div>
    </div>
</div>
      <!-- hinh thuc thanh toan -->
      <div id="opc-payment" class="block-info section allow opc-payment">
    <div class="step-title ttl-box"><span class="tl">Hình thức thanh toán</span></div>
    <div id="checkout-step-payment" class="box-step util-clearfix" >
          <style>
        .logo-bank-in.img-bank-in {
            position: relative;
            display: inline-block;
            border: 1px solid transparent;
        }
        .logo-bank-in.img-bank-in.active {
            border-color: red;
        }
            .logo-bank-in.img-bank-in input {
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
            opacity: 0;
            width: 100%;
            height: 100%;
        }
        </style>

    <div class="cod-payment">
        <label class="title" for="p_method_cod_payment">
            <span class="cod_payment_no_display">
                <input type="radio" id="p_method_cod_payment" value="cod_payment" name="payment[method]" class="radio check-pay">
                <span class="bg">&nbsp;</span>
                <span class="txt">Thanh toán khi nhận hàng</span>
            </span>
              
        </label>
        
    </div>
    <div class="online-payment">
        <!-- online-payment -->
        <label class="title" for="p_method_ecom_payment">
        <span class="ecom_payment_no_display">
            <input type="radio" id="p_method_ecom_payment" value="ecom_payment" name="payment[method]" class="radio check-pay" checked="checked">
            <span class="bg">&nbsp;</span>
            <span class="txt">Thanh toán trực tuyến</span>
        </span>
        </label>
       <div class="online-step">
            <div class="box-online online-atm">
                <label class="tl">
                <input type="radio" name="card_type" value="atm" class="check-online" >
                <span>Online bằng thẻ ATM ngân hàng</span>
                </label>
                <div class="bank-group logo-bank-group">
                    <div class="check_wallet box-opa">
                        <p>Vui lòng chọn tài khoản ngân hàng.</p>
                    </div>
                         <div class="logo-bank img-bank" id="vietcombank">
                            <input type="radio" name="card" value="1">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/1-Vietcombank.jpg" alt="vietcombank" title="vietcombank">
                        </div>
                        <div class="logo-bank img-bank" id="eximbank">
                            <input type="radio" name="card" value="2">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/2-Eximbank.jpg" alt="eximbank" title="eximbank">
                        </div>
                        <div class="logo-bank img-bank" id="techcombank">
                            <input type="radio" name="card" value="4">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/4-Techcombank.jpg" alt="techcombank" title="techcombank">
                        </div>                                                <div class="logo-bank img-bank" id="vibbank">
                            <input type="radio" name="card" value="5">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/5-Vibbank.jpg" alt="vibbank" title="vibbank">
                        </div>                                                         
                        <div class="logo-bank img-bank" id="agribank">
                            <input type="radio" name="card" value="7">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/7-Agribank.jpg" alt="agribank" title="agribank">
                        </div>                                                        
                         <div class="logo-bank img-bank" id="tienphongbank">
                            <input type="radio" name="card" value="8">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/27-tienphongbank.jpg" alt="tienphongbank" title="tienphongbank">
                        </div>                                                         
                        <div class="logo-bank img-bank" id="vietinbank">
                            <input type="radio" name="card" value="9">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/9-Vietinbank.jpg" alt="vietinbank" title="vietinbank">
                        </div>
                        <div class="logo-bank img-bank" id="marintimebank">
                            <input type="radio" name="card" value="10">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/10-Marintimebank.jpg" alt="marintimebank" title="marintimebank">
                        </div>                                                         
                         <div class="logo-bank img-bank" id="sacombank">
                            <input type="radio" name="card" value="11">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/11-Sacombank.jpg" alt="sacombank" title="sacombank">
                        </div>                                                              <div class="logo-bank img-bank" id="12acb">
                            <input type="radio" name="card" value="12">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/12-Acb.jpg" alt="12acb" title="12acb">
                        </div>                                                        <div class="logo-bank img-bank" id="mbbank">
                            <input type="radio" name="card" value="13">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/13-Mbbank.jpg" alt="mbbank" title="mbbank">
                        </div>                                                        
                         <div class="logo-bank img-bank" id="hdbank">
                            <input type="radio" name="card" value="14">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/14-Hdbank.jpg" alt="hdbank" title="hdbank">
                        </div>
                        <div class="logo-bank img-bank" id="vpbank">
                            <input type="radio" name="card" value="15">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/15-Vpbank.jpg" alt="vpbank" title="vpbank">
                        </div>
                        <div class="logo-bank img-bank" id="bidv_bank">
                            <input type="radio" name="card" value="21">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/21-bidv_bank.jpg" alt="bidv_bank" title="bidv_bank">
                        </div>
                        <div class="logo-bank img-bank" id="bacabank">
                            <input type="radio" name="card" value="23">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/23-Bacabank.jpg" alt="bacabank" title="bacabank">
                        </div>                                                         
                        <div class="logo-bank img-bank" id="abbank">
                            <input type="radio" name="card" value="51">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/24-abbank.jpg" alt="abbank" title="abbank">
                        </div>
                        <div class="logo-bank img-bank" id="gpbank">
                            <input type="radio" name="card" value="27">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/27-Gpbank.jpg" alt="gpbank" title="gpbank">
                        </div>
                        <div class="logo-bank img-bank" id="klg">
                            <input type="radio" name="card" value="31">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/31-Klg.png" alt="klg" title="klg">
                        </div>
                        <div class="logo-bank img-bank" id="navibank">
                            <input type="radio" name="card" value="34">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/34-Navibank.jpg" alt="navibank" title="navibank">
                        </div>
                        <div class="logo-bank img-bank" id="oceanbank">
                            <input type="radio" name="card" value="35">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/35-Oceanbank.jpg" alt="oceanbank" title="oceanbank">
                        </div>                                                        <div class="logo-bank img-bank" id="ocbbank">
                            <input type="radio" name="card" value="38">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/38-Ocbbank.jpg" alt="ocbbank" title="ocbbank">
                        </div>
                        <div class="logo-bank img-bank" id="shb_bank">
                            <input type="radio" name="card" value="42">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/42-shb_bank.jpg" alt="shb_bank" title="shb_bank">
                        </div>
                        <div class="logo-bank img-bank" id="vieta">
                            <input type="radio" name="card" value="44">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/44-Vieta.jpg" alt="vieta" title="vieta">
                        </div>                                                         
                         <div class="logo-bank img-bank" id="seabank">
                            <input type="radio" name="card" value="41">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/41-Seab.jpg" alt="seabank" title="seabank">
                        </div>
                        <div class="logo-bank img-bank" id="dongabank">
                            <input type="radio" name="card" value="3">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/3-DongAbank.jpg" alt="dongabank" title="dongabank">
                        </div>
                        <div class="logo-bank img-bank" id="lienvietpostbank">
                            <input type="radio" name="card" value="53">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/32-Lienvietpostbank.jpg" alt="lienvietpostbank" title="lienvietpostbank">
                        </div>
                        <div class="logo-bank img-bank" id="baovietBank">
                            <input type="radio" name="card" value="58">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/58-BaovietBank.jpg" alt="baovietBank" title="baovietBank">
                        </div>
                        <div class="logo-bank img-bank" id="scb">
                            <input type="radio" name="card" value="40">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/40-SCB.jpg" alt="scb" title="scb">
                        </div>
                        <div class="logo-bank img-bank" id="namabank">
                            <input type="radio" name="card" value="16">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/16-NamABank.jpg" alt="namabank" title="namabank">
                        </div>                                                         
                        <div class="logo-bank img-bank" id="vrb">
                            <input type="radio" name="card" value="59">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/59-VRB.jpg" alt="vrb" title="vrb">
                        </div>
                        <div class="logo-bank img-bank" id="publicbank">
                            <input type="radio" name="card" value="60">
                            <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/60-Publicbank.jpg" alt="publicbank" title="publicbank">
                        </div>
                  </div>
            </div>
            <div class="box-online online-visa">
                <label class="tl">
                <input type="radio" name="card_type" value="visamaster" class="check-online">
                <span>Visa/Master Card/JCB</span>
                </label>
                <div class="bank-group visamastercard ">
                    <div class="check_wallet box-opa">
                        <p>Vui lòng chọn loại thẻ cần thanh toán.</p>
                    </div>
                         <div class="logo-bank img-bank" id="17visa">
                                <input type="radio" name="card" value="61">
                                <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/17-Visa.jpg" alt="17visa" title="17visa">
                            </div>
                         <div class="logo-bank img-bank" id="18master">
                                <input type="radio" name="card" value="62">
                                <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/18-Master.jpg" alt="18master" title="18master">
                            </div>                                                  
                         <div class="logo-bank img-bank" id="19jcb">
                                <input type="radio" name="card" value="63">
                                <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/19-JCB.jpg" alt="19jcb" title="19jcb">
                            </div>
                  </div>
            </div>
            <div class="box-online online-transfer ">
                <label class="tl">
                <input type="radio" name="card_type" value="transfer" class="check-online check-senpay" id="online-transfer">
                <span>Chuyển khoản ngân hàng</span>
                </label>
                <div class="bank-group bank-transfer">
                    <label class="logo-bank img-bank" id="">
                        <input type="hidden" name="card_type_tranfer" value="transfer">
                        <img src="https://static.scdn.vn/images/ecom/checkout/bank-list/bank-tranfer.jpg" alt=" Chuyển khoản ngân hàng" title="">
                    </label>
                </div>
            </div>
            
        <input type="hidden" id="current_form_input_shipping" value="0">
    </div>
    <script>
            var arrCardIdInstallment = [64,65,66];
            var cod = true;
            var is_login =true;Checkout.no_senpay = false;            // var is_login =true;Checkout.no_senpay = false;
            jQuery(document).ready(function(){
                paymentSelect(); //chon hinh thuc thanh toan
                paymentMethodSelect ('.online-atm'); //chon cac buoc thanh toan online
                    paymentMethodSelect ('.online-visa');
                    paymentMethodSelect ('#online-transfer');
                    paymentMethodSelect ('#check-wallet');
                    paymentMethodSelect ('.installment-visa');
                                                                  
                });
        </script>
    
    </div>
</div>

  </div>    
    </div>
<div class="checkout-colt-right">
   <div class="bgline">&nbsp;</div>
    <div id="block_order">
     <div class="block-order">
    <div class="title step-title ttl-box"><span class="tl">Thông tin đơn hàng</span></div>
    <div id="checkout-step-review" class="box-step a-item">
      <div class="product_in_order">
        <div class="title">
  <div class="name_shop">Shop : <a title="Edo" href="javascript:void(0);">Eternal Beauty</a></div>
  <div class="shippingfee">
      </div>
</div>
<div class="product_box id-4781363">
    <div class="img_product">
        <div class="img">
            <img class="product-image" src="https://media3.scdn.vn/img2/2017/1_9/aUldzI_simg_3a7818_100x100_maxb.jpg" alt="micro kiêm loa">
        </div>
                <div class="name_attr">
            <div class="name">micro kiêm loa</div>
            <div class="attr">
               <dl>
                  <dt>Màu sắc: </dt>
                    <dd class="box-choose color">
                     <span class="attri attr-color" style="background-color:#ff8040">&nbsp;</span>
                     <div class="box-choose-abs">
                        <div class="box ">
                           <input type="radio" name="optionsColor[]" id="26530418" value="26530418">
                              <label title="Trắng" for="26530418">
                                 <span class="label" style="background-color:#ffffff">&nbsp;</span>
                              </label>
                        </div>
                        <div class="box">
                           <input type="radio" name="optionsColor[]" id="26842301" value="26842301">
                              <label title="Xanh đen" for="26842301">
                                  <span class="label" style="background-color:#112c4e">&nbsp;</span>

                               </label>
                         </div>
                          <div class="box">
                              <input type="radio" name="optionsColor[]" id="28304684" value="28304684" checked="checked">
                              <label title="Họa tiết" for="28304684">
                                  <span class="label" style="background-image:url('https://media3.scdn.vn/img/2014/3_6/hoa_tiet_2ikqk5hs9c204_simg_edf1ce_120x160_max.gif')">&nbsp;</span>

                              </label>
                           </div>
                          <div class="box">
                              <input type="radio" name="optionsColor[]" id="22842301" value="22842301">
                              <label title="Đỏ" for="22842301">
                                  <span class="label" style="background-color:#c00">&nbsp;</span>
                              </label>
                          </div>
                    </div>
                </dd>
                </dl>
            </div>
        </div>
    </div>
    <script type="text/javascript">
            var quantity_4425323 = 0;
        </script>
     <div class="box-sl">
        <span class="tl">Số lượng: </span>
                <input type="number" name="qty" maxlength="4" value="2"  onkeypress="return Checkout.onlyNumberKey(event)">
                <span class="xg"> x <b>159.000</b>&nbsp;đ</span>
    </div>
   
       
</div><input type="hidden" id="list_product_qty" value="4781363,1">
        <div class="tt-in-order">
        <span class="fl"><strong>Tổng đơn hàng:</strong></span>
        <span class="fr"><strong>450.000&nbsp;đ</strong></span>
    </div>
</div>


  </div>
      <div class="wrap-loyalty box-step a-item">
    <div class="rw-checkout-loyalty" style="">
        <div class="caption-rw-checkout ttl-loyalty">
             <input type="hidden" value="use_loyalty_point" name="action">
            <label>             
              <span>Sử dụng tích xu</span>
              <span class="ic-collape">&nbsp;</span>
            </label>
        </div>
        <div class="box-sen-p">
            <div class="cur-sen-point">
                            <span>Số xu hiện có: <b>0</b></span>
            </div>
            <div class="box-ds">
                   <div class="input_sen_point" style="display:block;">
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="5" checked>
                            5 xu(3%)
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="10" checked>
                            10 xu(5%)
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="15" checked>
                            15 xu(10%)
                          </label>
                        </div>
                    </div>
                    
                    <div class="h_sen_point" >
                     <span>
                        Số xu còn lại: <b class="loyalty-free">0</b>
                    </span>
                    </div>
                
            </div>
        </div>
    </div>

</div>
      <div id="checkout-review-load">
        <div class="shippingfee_total util-clearfix box-step a-item">
        <div class="block_pay"> 
          <ul class="cash">
		            
		    <!--<li>
		        <span class="fl">
		        Phí thực trả:
		        </span>
		        <span class="fr">&nbsp;đ</span>
		    </li>-->
     <li>
        <span class="fl">Phí vận chuyển(PVC)
        </span>
        <i class="points">:</i>
        <span class="fr">39.000&nbsp;đ</span>
    </li>
    
      <li>
        <span class="fl red basegrandtotal label"><strong>Tổng thành tiền</strong></span>
        <i class="points">:</i>
        <span class="fr red basegrandtotal"><strong>503.000&nbsp;đ</strong></span>
    </li>
    
   <li class="bt-payment">
                                 
           <div class="buttons-set buttons-set-fixed" id="review-buttons-container">
               <button type="submit" id="btn_save_order" title="Thanh toán" class="button btn-checkout">Đặt hàng</button>
                </div>
   
 
              <span class="please-wait" id="review-please-wait">
                <img src="https://static.scdn.vn/images/ecom/opc-ajax-loader.gif" alt="Submitting order information...'" title="Submitting order information..." class="v-middle">Submitting order information...
            </span>
            </li>
          </ul>
                  </div><!-- block_pay -->
          <div class="note">
            <span>Ghi chú:</span>
            <textarea name="review_note" id="review_note" onblur="Checkout.checkGaTagManager(this);Checkout.update_note()" onclick="Checkout.calculateTime();"></textarea>
          </div>
        
        </div><!--shippingfee_total-->
      </div>
    </div>
         	<script>
        			jQuery(document).ready(function(){
        			})
        		</script>
</div>
</div>
          <script>
          	jQuery(document).ready(function(){
          	})
          </script>       
 </div>
    </div>

</form></div>

<!-- ket thuc thanh toan -->
</body>
</html>