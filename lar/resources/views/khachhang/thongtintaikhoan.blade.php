@extends('khachhang.master')
@section('content_dashboard')

    <div class="profile">
        <h3>Thông tin tài khoản</h3>
    <form action="" method="post" id="formProfile" enctype="multipart/form-data">
        <div class="image avatar">
                <img src="https://media3.scdn.vn/img/2014/7_23/avatar_user_2jb6apgefrjn9_simg_3a7818_100x100_maxb.gif" alt="images" class="img-responsive" id="change_avatar">
           
            <input type="file" name="avatar" id="avatar">
            <p class="errors"></p>
        </div>
        <div class="infomation">
            <label for="name">Họ tên</label>
            <div class="form-profile name">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" id="name" name="name" autocomplete="off" placeholder="Họ tên" value="">
                    <p class="errors"></p>
            </div>
            <label for="email">Địa chỉ email</label>
            <div class="form-profile email">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="text" id="email" name="email" disabled="disabled" value="">
            </div>
            <label for="phone">Số điện thoại</label>
            <div class="form-profile phone">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" id="phone" name="phone" disabled="disabled" value="">
            </div>
            <label for="birthday">Ngày - tháng - năm sinh</label>
            <div class="form-profile birthday">
                    <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                    <input type="date" id="birthday" name="birthday" autocomplete="off" maxlength="12" value="">
            </div>
            <label for="sex">Giới tính</label>
            <div class="form-profile sex">
              <label for="sexboy">Nam</label>
              <input type="radio" name="sex" id="sexboy" autocomplete="off" value="2" >

              <label for="sexgirl">Nữ</label>
              <input type="radio" name="sex" id="sexgirl" autocomplete="off" value="1" >
            </div>
            <a data-toggle="collapse" href="#change_password">Thay Đổi Mật Khẩu</a>
            <div class="collapse" id="change_password">
                <div class="passwordOld">
                        <i class="fa fa-lock"></i>
                        <input type="password" id="passwordOld" autocomplete="off" name="passwordOld" placeholder="Mật khẩu cũ">
                         <p class="errors"></p>
                </div>
                <div class="password">
                        <i class="fa fa-lock"></i>
                        <input type="password" id="password" autocomplete="off" name="password" placeholder="Mật khẩu mới">
                         <p class="errors"></p>
                </div>
                <div class="confirm">
                        <i class="fa fa-lock"></i>
                        <input type="password" id="confirm" autocomplete="off" name="confirm" placeholder="Xác nhận mật khẩu">
                         <p class="errors"></p>
                </div>
            </div>
           
            <p class="success"></p>
            <div class="btn_save">
                <button type="submit">Lưu thông tin</button>
            </div>
        </div>
    </form>
    </div>

@endsection
