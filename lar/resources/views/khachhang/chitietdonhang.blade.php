@extends('khachhang.master')
@section('content_dashboard')

<div class="profile">
        <h3>Quản lý đơn hàng <span style=" text-transform: initial;color: #999999;font-weight: normal;">/Chi tiết đơn hàng</span></h3>
        <div class="cont-order-detail">
          <div class="block-info-inprogress">
                <div class="first-block">
                    <span><span class="hide-mobile">Mã đơn hàng : </span> <b>#1496832644</b></span>
                     <span class="date-order"><span class="hide-mobile">Đặt hàng : </span> 28/03/2017</span>
                     
                </div>
              </div>
            <div class="detail-block">
                <div class="table-outer">
                    <div class="display-table-spacing">
		                <div class="block-left-detail">
		                    
		                    <div class="cols-left-detail">
		                        <h3>TÌNH TRẠNG VẬN CHUYỂN</h3>
		                           <p class="txt-inf">
		                            	<label>Nhà vận chuyển:</label>
		                            	<span class="senpay"><strong>VNPOST</strong></span>
		                        	</p>
		                            <p class="txt-inf">
		                            	<label>Tình trạng:</label>
		                            	<span><strong>Chưa thanh toán</strong></span>
		                        	</p>
		                        
		                    </div>
		                    
		                     
		                        <div class="cols-right-detail">
		                            <span>Đơn hàng chưa thanh toán</span>
		                        </div>
		                                                            
		                </div>
		                <div class="block-right-detail">
		                    <h3>THÔNG TIN NHẬN HÀNG</h3>
		                    <div class="address-inf">
		                        <span class="username"><strong>võ thị bích ly</strong></span>
		                        <span class="phone">-  0948938438</span>
		                        <p class="address">uiuhiuhi - Xã Lộc Ninh - Huyện Hồng Dân - Bạc Liêu</p>
		                        
		                    </div>
		                </div>
               </div>
                </div><!-- table-outer -->
                <div class="block-inner-detail">
                    <div class="inner-detail">
                    <p class="txt-inf">
                        <label>Shop:</label>
                        <a href="https://www.sendo.vn/shop/tranghandmade/" title="Eternal Beauty" class="shop-name"><span>Eternal Beauty</span></a> 
                    </p>
                   
       
                     <p class="txt-inf">
                            <label><span class="hide-mobile">|   </span>Hình thức thanh toán :</label>
                            <span class="senpay">Thanh toán Online</span>
                        </p>
                      <p class="txt-inf">
                        <label><span class="hide-mobile">|   </span>Trạng thái thanh toán</label>
                        <i>:</i>
                       <span class="status-payment">Chưa thanh toán</span>
                       </p>
                   
                    
                                                                                                                                                                                    
                </div>
                <div class="rg-detail">
                    <table class="tbl-items-list">
                        <tbody><tr class="tbl-header hide-mobile">
                            <th class="hide-mobile">Sản phẩm</th>
                            <th class="hide-mobile">Đơn giá</th>
                            <th class="hide-mobile">Số lượng</th>
                            <th class="hide-mobile">Thành tiền</th>
                        </tr>
                          <tr>
                            <td data-title="Sản Phẩm">
                                <div class="item-pr">
                                    <img src="https://media3.scdn.vn/img2/2017/3_28/IcLtVi_simg_3a7818_100x100_maxb.jpg" alt="">
                                    <div class="item-pr-info">
                                        <a href="https://www.sendo.vn/san-pham/chan-vay-tennis-skirt-xep-ly-mau-trang-vhs001-5259117" title="" class="pr-name">Son Amok</a> 
                                        <p class="size"><span class="title-size">Thương hiệu:</span> 
                                        <span class="display-color-product">Amok</span></p>
                                         <p class="price-mobile">1 <span>x</span> 165,000  đ
                                    </p>
                                    </div>
                                </div>
                            </td>
                              <td data-title="Giá" class="price hide-mobile">165,000 đ</td>
                            <td data-title="Số lượng" class="numb hide-mobile">1</td>
                            
                                <td data-title="Thành tiền" class="total-pr hide-mobile">165,000 đ</td>
                        </tr>
                      </tbody></table>
                    <div class="order-bill">
                        <div class="detail-order-bill">
                            <div class="row-inf">
                                <span class="lbl">Tổng tiền:</span><!-- 
                                <i class="pointer">:</i> -->
                                <span class="fee">165,000 đ</span>
                            </div>
                            <div class="row-inf">
                                <span class="lbl">Phí vận chuyển:</span><!-- 
                                <i class="pointer">:</i> -->
                                <span class="fee">
                                22,000 đ
                                </span>
                            </div>
                             <div class="row-inf last-child">
                                <span class="lbl"><b>Tổng thanh toán</b></span>
                                <span class="fee"><b>187,000</b> đ</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="user-address-block">
                  <div class="bt-block"> 
                      <a href="https://www.sendo.vn/sales/order/history/"><button class="bt back-order-list">Quay lại danh sách đơn hàng</button></a>
                       <button class="bt btn-huy" data-toggle="modal" data-target="#huydonhang_popup" onclick="removeError();">Hủy</button>
                                                                                                                                                 
                </div>
            </div>
    </div>
</div>


<form enctype="multipart/form-data" class="ng-pristine ng-valid" method="post" id="frmCancel">
	<div id="huydonhang_popup" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="false" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="caption">Hủy đơn hàng</span>
                            <button type="button" class="close4 btnclose" data-dismiss="modal" aria-hidden="true">x</button>
                        </div>
                        <div class="modal-body">
                            <div class="popup_content">
                            <div class="popup_small_content">
                                Bạn muốn hủy <span class="gray3_text_upper_b">đơn hàng số</span> <span class="red_text_upper_b">#1496832644</span> từ shop <strong>Eternal Beauty</strong>? Đơn hàng của bạn đang trong quá trình xử lý, bạn có thể hủy mà không mất phí.

                                <table width="100%" cellspacing="0" cellpadding="0">
                                    <tbody><tr>
                                        <td>
                                            <label><input type="radio" value="0" onclick="frmreasoncancel();" name="reasoncancel"><span>Hủy vì gộp hoặc đặt trùng đơn hàng</span></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label><input type="radio" value="1" onclick="frmreasoncancel();" name="reasoncancel"><span>Hủy vì thời gian giao hàng lâu</span></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label><input type="radio" value="2" onclick="frmreasoncancel();" name="reasoncancel"><span>Hủy vì phí vận chuyển cao</span></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label><input type="radio" value="3" onclick="frmreasoncancel();" name="reasoncancel"><span>Hủy do cần thay đổi thông tin đơn hàng (địa chỉ nhận, màu sắc, kích cỡ, số lượng vv…)</span></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label><input type="radio" value="4" onclick="frmreasoncancel();frmreasoncancelkhac();" name="reasoncancel" class="validate-one-required-by-name"><span>Hủy vì lý do khác</span></label>
                                        </td>
                                    </tr>

                                    <tr style="display: none;" class="lydokhac">
                                        <td style="padding-top:15px;"><textarea maxlength="150" placeholder="Lý do hủy? (không quá 150 ký tự)" style="padding:8px" rows="5" cols="77" name="reason" class="required-entry" id="cancel-reason"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="text-align: center; padding-top:15px;"><input type="submit" class="destroy_or_btn_popup" value="Hủy" name="btnCancel" id="btnCancel">
                                        </td>
                                    </tr>
                                </tbody></table>
                            </div>
                            <span class="error" style="display: none;"></span>
                        </div>
                        </div>
                    </div>
                </div>


        </div>
</form>

@endsection