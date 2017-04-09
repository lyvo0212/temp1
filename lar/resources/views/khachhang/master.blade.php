@extends('sanpham.master')
@section('content')
<!--start-breadcrumbs-->
<link rel="stylesheet" type="text/css" href="{{asset('css/style-tttaikhoan.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/style-donhang.css')}}">
<!-- chi tiet don hang -->
<link rel="stylesheet" type="text/css" href="{{asset('css/style-chitietdonhang.css')}}">

<script type="text/javascript">
    function removeError(){
        jQuery("#frmCancel .error").hide();
    }
</script>
<script type="text/javascript">
    function frmreasoncancel(){
        var reason = jQuery("input[name='reasoncancel']:checked").val();
        jQuery(".lydokhac").css('display','none');
    }
    function frmreasoncancelkhac(){
        jQuery(".lydokhac").css('display','block');
    }
    jQuery(document).ready(function(){
        jQuery('#btnCancel').click(function(event){
            var radio = jQuery("#frmCancel input[name='reasoncancel']");
            if(!radio.is(':checked')){
                jQuery("#frmCancel .error").html('Vui lòng chọn lý do hủy đơn hàng!').css({color:'red', 'margin-left':'3px'}).show();
                event.preventDefault();
            }
            else{
                 var radio_last = jQuery("#frmCancel input[name='reasoncancel']:last");
                if(radio_last.is(':checked')){
                    var cancel_reason = jQuery('#cancel-reason').val();
                    if(cancel_reason == ""){
                        jQuery("#frmCancel .error").empty().html('Bạn chưa điền lý do hủy đơn hàng!').css({color:'red', 'margin-left':'3px'}).show();
                        event.preventDefault();
                    }
                }
            }
        });
    });
</script>
<!-- ket thuc chi tiet don hang -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active" style="background: none">Thong tin tai khoan</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
<!-- master -->
    <div class="container">
        <div class="row" style="margin-left: 0px; margin-top: 15px;">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2 dashboard_user">
                <div class="infomation">
                    <a href="#">
                            <img src="https://media3.scdn.vn/img/2014/7_23/avatar_user_2jb6apgefrjn9_simg_3a7818_100x100_maxb.gif" alt="avatar">
                        
                        <p><strong class="text-capitalize">Ly</strong></p>
                        <p>Chỉnh sửa tài khoản</p>
                    </a>
                </div>
                <div class="manager">
                    <h3>Quản lý giao dịch</h3>
                    <ul class="sub-manager">
                        <li id="orders" ><a href="#">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            <span>Đơn hàng</span>
                        </a></li>
                        
                       
                    </ul>
                </div>
                <div class="manager">
                    <h3>Quản lý tài khoản</h3>
                    <ul class="sub-manager">
                        <li id="account_info"><a href="{{url('/thongtintaikhoan')}}">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <span>Thông tin tài khoản</span>
                        </a></li>
                        <li id="bag"><a href="#">
                           <i class="fa fa-usd" aria-hidden="true"></i>
                            <span>Tích xu</span>
                        </a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10 content_dashboard">
                @yield('content_dashboard')
            </div>
        </div>
    </div>
@endsection
