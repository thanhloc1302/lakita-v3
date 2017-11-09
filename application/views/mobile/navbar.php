<style>

    /*================== FOR MOBILE =====================*/
    .navbarsm{
        font-family: RobotoCondensed-Regular;
        font-size: 16px;
    }
    .navbarsm .navbar-collapse {
        padding-left: 0px;
    }
    .navbarsm .navbar-header{
        background-color: #2B9148;
/*       / min-height: 60px;*/
    }
    .navbarsm .navbar-header a.logo-header{
        display: inline-block;
        margin-left: 20px;
        margin-top: 10px;
    }
    .navbarsm #menu-navbar{
        width: 110%;
        background-color:  #2B9148;
    }
    .navbarsm #menu-navbar .btn-mobi{
        margin: 36px auto;
        text-align: center;
    }
    .navbarsm #menu-navbar .btn-mobi a{
        margin: 5px auto;
        color: #fff;
        text-decoration: none;
        background-color: #035D1D;
        padding: 13px 45px;
        border-radius: 3px;
    }
    .navbarsm #menu-navbar .btn-mobi a.register{
        padding: 13px 49px;
    }
    .navbarsm #menu-navbar .home{
        background-color: #2A8B46;
/*        padding-left: 20px;*/
    }
    .navbarsm #menu-navbar .home a{
        color:#fff;
        text-decoration: none;
        padding: 10px 0px;
        display: inline-block;
    }
    .navbarsm #menu-navbar .home a:hover{
        background-color: #035D1D;
    }
    .navbarsm #bs-example-navbar-collapse-2 .home a#drop1, .navbarsm #bs-example-navbar-collapse-2 .home a#drop2, .navbarsm #bs-example-navbar-collapse-2 .home a#drop3 {
        padding-left: 15px;
    }
    .navbarsm #menu-navbar .home li.list-odd{
        margin-left: -3px;
        background-color: #2A8B46;
    }
    .navbarsm #menu-navbar .home li.list-odd a{
        margin-left: 44px;
        display: block;
        padding: 13px 0px;
    }
    .navbarsm #menu-navbar .home li.list-even{
        background-color: #298542;
        margin-left: -3px;
    }
    .navbarsm #menu-navbar .home li.list-even a{
        margin-left: 44px;
        display: block;
        padding: 13px 0px;
    }
    .navbarsm #menu-navbar .course{
        background-color: #045D1E;
    }
    button.navbar-toggle {
        background-color: #1E7346;
    }
    .icon-bar {
        border: 1px solid #fff;
    }
    .avatar {
        width: 66px;
        height: 66px;
    }
    .my-btn {
        padding: 10px 30px;
        color: #fff;
        background-color: #2c944a;
        display: inline-block;
        margin-bottom: 0;
        font-weight: 400;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
    }
    .bgfb {
        background: #496397;
    }
    .social-login a {
        display: inline-block;
        width: 100%;
        margin-bottom: 10px;
        text-decoration: none;
    }
    .bggg {
        background: #dc493f;
    }
    .my-form-group-1 .my-form-control-1:nth-child(2) {
        padding-left: 10px;
    }
    .my-form-group-1 .border {
        border: 1px solid #d1d1d1;
    }
    #myModal4 input {
        border: none;
        height: 28px;
        padding-left: 10px;
    }
</style>
<div class="navbarsm hidden-lg hidden-md">
    <nav class="navbar" style="border:none;">
        <div class="container-fluid">
            <div class="navbar-header" style="width: 130%; margin-left: -6%; padding-left: 3%; padding-right: 21%;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo base_url(); ?>" class="logo-header"> <img src="<?php echo base_url(); ?>styles/v2.0/img/mobi/logo-header.png" /> </a>
            </div>

            <div class="collapse navbar-collapse" id="menu-navbar">
                <?php
                $user_id = $this->session->userdata('user_id');
                if (!isset($user_id)) {
                    ?>
                    <div class="btn-mobi">
                        <a href="" class="login_link_mobile" data-toggle="modal" data-target="#myModal4"> <i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập </a>
                    </div>
                    <div class="btn-mobi">
                        <a href="" class="register_link_mobile"> <i class="fa fa-user" aria-hidden="true">+</i> Đăng ký </a>
                    </div>
                <?php } else { ?>
                    <div class="row margintop10 marginbottom10">
                        <div class="col-xs-5 text-center">
                            <img src="<?php
                            if (!empty($student[0]['id_fb']))
                                echo 'https://graph.facebook.com/' . $student[0]['id_fb'] . '/picture?type=large';
                            else {
                                if (!empty($student[0]['thumbnail']))
                                    echo 'https://lakita.vn/' . $student[0]['thumbnail'];
                                else
                                    echo base_url() . 'styles/images/people/110/user.png';
                            }
                            ?>" class="img-circle avatar" />
                        </div>
                        <div class="col-xs-7">
                            <p class="margintop20"><strong class="white"> <?php echo $student[0]['name']; ?> </strong></p>
                        </div>
                    </div>
                <?php } ?>
                <div class="home">
                    <a href="">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-home" aria-hidden="true"></i>Trang chủ </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="home course dropdown"> 
                        <a href="#" class="dropdown-toggle" id="drop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CÁC KHÓA HỌC <span class="caret"></span> </a>
                        <ul class="dropdown-menu" aria-labelledby="drop1">
                            <li  class="list-odd"><a href="<?php echo base_url() . 'nhom-khoa-hoc/'; ?>nang-cao-nang-luc-van-phong-11.html"> <i class="fa fa-file-word-o" aria-hidden="true"></i> &nbsp;&nbsp;Nâng cao năng lực Văn phòng</a></li>
                            <li  class="list-even"><a href="<?php echo base_url() . 'nhom-khoa-hoc/'; ?>ke-toan-21.html"> <i class="fa fa-money" aria-hidden="true"></i> &nbsp;&nbsp;Kế toán</a></li>
                            <li  class="list-even"><a href="<?php echo base_url() . 'nhom-khoa-hoc/'; ?>hanh-chinh-22.html"> <i class="fa fa-line-chart" aria-hidden="true"></i> &nbsp;&nbsp;Hành chính</a></li>
                            <li  class="list-even"><a href="<?php echo base_url() . 'nhom-khoa-hoc/'; ?>nhan-su-23.html"> <i class="fa fa-user" aria-hidden="true"></i> &nbsp;&nbsp;Nhân sự</a></li>
                            <li  class="list-even"><a href="<?php echo base_url() . 'nhom-khoa-hoc/'; ?>cong-nghe-thong-tin-13.html"> <i class="fa fa-television" aria-hidden="true"></i> &nbsp;&nbsp;Công nghệ thông tin</a></li>
                        </ul>
                    </li>
                    <li class="home course dropdown"> 
                        <a href="#" class="dropdown-toggle" id="drop2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRANG CÁ NHÂN <span class="caret"></span> </a>
                        <ul class="dropdown-menu" aria-labelledby="drop2">
                            <li  class="list-odd"><a href="khoa-hoc-cua-toi.html"><i class="fa fa-leanpub" aria-hidden="true"></i> &nbsp; Khóa học của tôi </a></li>
                            <li  class="list-odd"><a href="student/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Thoát</a></li>
                            <li  class="list-odd"><a ><i class="fa fa-bar-chart" aria-hidden="true"></i> &nbsp;  Tiến độ học tập</a></li>
                            <li  class="list-even"><a ><i class="fa fa-leanpub" aria-hidden="true"></i> &nbsp; Bài tập luyện tập</a></li>
                            <li  class="list-odd"><a href="nap-tien-vao-tai-khoan.html"><i class="fa fa-usd" aria-hidden="true"></i> &nbsp; Nạp tiền vào tài khoản</a></li>
                            <li  class="list-even"><a href="kich-hoat-khoa-hoc.html"><i class="fa fa-compress" aria-hidden="true"></i> &nbsp; Kích hoạt khóa học</a></li>
                            <li  class="list-odd"><a ><i class="fa fa-list-alt" aria-hidden="true"></i> &nbsp; Đơn hàng của tôi</a></li>
                            <li  class="list-even"><a ><i class="fa fa-heart-o" aria-hidden="true"></i> &nbsp; Sản phẩm yêu thích</a></li>
                            <li  class="list-odd"><a ><i class="fa fa-qrcode" aria-hidden="true"></i> &nbsp; Mã voucher (mã giảm giá)</a></li>
                            <li  class="list-even"><a ><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;  Địa chỉ nhận hàng</a></li>
                            <li  class="list-odd"><a href="thong-tin-tai-khoan.html"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;  Thông tin tài khoản</a></li>
                            <li  class="list-even"><a href="lich-su-thanh-toan.html"><i class="fa fa-list-alt" aria-hidden="true"></i> &nbsp; Lịch sử thanh toán</a></li>
                            <li  class="list-odd"><a ><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; Quản lý bản tin (hộp thư)</a></li>
                            <li  class="list-even"><a ><i class="fa fa-weixin" aria-hidden="true"></i>&nbsp;  Hỏi đáp</a></li>
                            <li  class="list-odd"><a href="student/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Thoát</a></li>
                        </ul>
                    </li>
                    <li class="home course dropdown"> 
                        <a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THÔNG TIN KHÁC <span class="caret"></span> </a>
                        <ul class="dropdown-menu" aria-labelledby="drop3">
                            <li  class="list-even"><a href="khoa-hoc-cua-toi.html"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; Về chúng tôi </a></li>
                            <li  class="list-odd"><a href="#footer_link"><i class="fa fa-phone-square" aria-hidden="true"></i> &nbsp; Liên hệ</a></li>
                            <li  class="list-even"><a ><i class="fa fa-building" aria-hidden="true"></i> &nbsp; Cho doanh nghiệp</a></li>
                            <li  class="list-odd"><a href="nap-tien-vao-tai-khoan.html"><i class="fa fa-suitcase" aria-hidden="true"></i> &nbsp; Cơ hội nghề nghiệp</a></li>
                            <li  class="list-even"><a href="kich-hoat-khoa-hoc.html"><i class="fa fa-users" aria-hidden="true"></i> &nbsp; Trở thành giảng viên</a></li>
                            <li  class="list-odd"><a href="tin-tuc.html"><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp; Tin tức</a></li>
                            <li  class="list-even"><a href="https://www.facebook.com/lakita.vn" rel="nofollow"><i class="fa fa-facebook-official" aria-hidden="true"></i> &nbsp; Fanpage facebook</a></li>
                            <li  class="list-odd"><a ><i class="fa fa-link" aria-hidden="true"></i> &nbsp; Liên kết</a></li>
                            <li  class="list-even"><a href="https://www.youtube.com/channel/UCsm-mRkF75-SH1ErT4sEfWQ" rel="nofollow"><i class="fa fa-youtube" aria-hidden="true"></i> &nbsp; Youtube</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<?php
if (!isset($user_id)) {
    ?>
    <?php $this->load->view('template/login_modal_mobile'); ?>

    <?php
} ?>
<script>
</script>