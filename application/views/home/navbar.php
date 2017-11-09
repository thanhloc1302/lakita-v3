<?php $user_id = $this->session->userdata('user_id'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/navbar.css" />
<div class="navBar">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul>
                    <li role="presentation" class="left"> <a href="<?php echo base_url(); ?>"> TRANG CHỦ </a></li>
                    <li role="presentation" class="left dropdown group-course-li dropdown_hover"> 
                        <a href="<?php echo base_url(); ?>khoa-hoc/xem-tat-ca.html" role="button" class="dropdown-toggle" data-toggle="dropdown" id="a_dropdown_group_course"> 
                            CÁC KHÓA HỌC <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-header-1 dropdown-courses" role="menu" aria-labelledby="drop1">
                            <?php
                            $group_courses = $this->lib_mod->load_all('group_courses', 'id,name,slug', array('status' => 1), 5, '', array('sort' => 'asc'));
                            foreach ($group_courses as $value) {
                                ?>
                                <li> <a href="<?php echo base_url() . 'nhom-khoa-hoc/' . $value['slug'] . '-' . $value['id'] . '.html'; ?>"> <?php echo $value['name']; ?> </a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li role="presentation" class="left"> <a href="#footer_link"> LIÊN HỆ </a></li>
                    <li role="presentation" class="left show-more-li dropdown dropdown_hover"> 
                        <a href="" id="a_show_more" role="button" class="dropdown-toggle" data-toggle="dropdown"> THÊM <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-header-1 dropdown-courses" role="menu" aria-labelledby="drop1">
                            <li> 
                                <a> Về chúng tôi </a>
                            </li>
                            <li> 
                                <a href="<?php echo base_url(); ?>dich-vu-excel.html"> Dịch vụ excel </a>
                            </li>
                            <li> 
                                <a> Trở thành giảng viên </a>
                            </li>
                            <li> 
                                <a> Tiếp thị liên kết </a>
                            </li>
                            <li> 
                                <a> Blog </a>
                            </li>
                            <li> 
                                <a href="<?php echo base_url(); ?>tin-tuc.html"> Tin tức </a>
                            </li>
                            <li> 
                                <a> Cơ hội nghề nghiệp </a>
                            </li>
                            <li> 
                                <a> Chủ đề </a>
                            </li>
                            <li> 
                                <a> Hỗ trợ </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 height-66">
                <?php
                if (isset($user_id)) {
                    ?>
                    <a href="<?php echo base_url(); ?>khoa-hoc/xem-tat-ca.html" class="logo-link">
                    </a>
                    <?php
                } else {
                    ?>
                    <a href="" class="logo-link">
                    </a>
                    <?php
                }
                ?>
            </div>
            <div class="col-md-5">
                <ul style="min-width: 500px;">
                    <li role="presentation" class="icon-bar paddingleft56 show-more-li dropdown"> 
                        <!--                      <a href="" id="a_show_more" role="button" class="dropdown-toggle" data-toggle="dropdown">  
                                                  <i class="fa fa-bell-o" aria-hidden="true"></i> 
                                              </a>-->
                        <a href="" id="a_show_more" role="button" class="dropdown-toggle" data-toggle="dropdown">  
                            <?php
                            /* locnt xóa tạm chỗ này
                              //                            $have_news = 0;
                              //                            if (isset($user_id)) {
                              //                                if (isset($have_news4) || isset($have_news5)) {
                              //                                    if (is_null(get_cookie('read_news_4')) && is_null(get_cookie('read_news_5')) && is_null(get_cookie('read_news_5')))
                              //                                        $have_news = 3;
                              //                                    else if (!is_null(get_cookie('read_news_4')) && !is_null(get_cookie('read_news_5')) && !is_null(get_cookie('read_news_5')))
                              //                                        $have_news = 0;
                              //                                    else if (!is_null(get_cookie('read_news_4')) && is_null(get_cookie('read_news_5')) && is_null(get_cookie('read_news_5')))
                              //                                        $have_news = 2;
                              //                                    else if (is_null(get_cookie('read_news_4')) && !is_null(get_cookie('read_news_5')) && is_null(get_cookie('read_news_5')))
                              //                                        $have_news = 2;
                              //                                    else if (is_null(get_cookie('read_news_4')) && is_null(get_cookie('read_news_5')) && !is_null(get_cookie('read_news_5')))
                              //                                        $have_news = 2;
                              //                                    else
                              //                                        $have_news = 1;
                              //                                }
                              //                            }
                              hết chỗ xóa */
                            ?>
                            <i id="notification" class="fa fa-bell-o" aria-hidden="true"></i> 
                            <?php if (isset($have_news)) { ?>
                                <input id="csrf_test_name_noti" type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div id="num_noti" >
                                    <span id="notification_num" class="badge">
                                        <?php echo $have_news; ?>
                                    </span>
                                </div>
                            <?php } ?>
                        </a>
                        <ul class="dropdown-menu dropdown-header-1 dropdown-courses" role="menu" aria-labelledby="drop1">

                            <?php
                            if (isset($noti)) {
                                foreach ($noti as $key1 => $value1) {
                                    if ($value1['type'] == 'comment') {
                                        ?>
                                        <li> 
                                            <a href="<?php echo $value1['url']; ?>"> 
                                                <i class="fa fa-comments fa-5x" aria-hidden="true"></i>
                                                <?php
                                                foreach ($creator_infor as $key2 => $value2) {
                                                    if ($value1['creator'] == $value2['id']) {
                                                        $a = $value2['name'];
                                                    }
                                                    echo '&nbsp;&nbsp;&nbsp; ' . $a . ' đã trả lời bình luận của bạn ';
                                                    echo date('H:i:s d/m/Y', $value1['time']);
                                                }
                                                ?>
                                            </a>
                                        </li>
                                        <?php
                                    } elseif ($value1['type'] == 'exercise') {
                                        ?>
                                        <li> 
                                            <a href="<?php echo $value1['url']; ?>"> 
                                                <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                                                <?php
                                                echo '&nbsp;&nbsp;&nbsp; Giảng viên Lakita đã chữa bài tập của bạn ';
                                                echo date('H:i:s d/m/Y', $value1['time']);
                                                ?>
                                            </a>
                                        </li>
                                        <?php
                                    } elseif ($value1['type'] == 'invite') {
                                        ?>
                                        <li> 
                                            <a href="<?php echo $value1['url']; ?>"> 
                                                <i class="fa fa-gift fa-5x" aria-hidden="true"></i>
                                                <?php
                                                foreach ($creator_infor1 as $key2 => $value2) {
                                                    if ($value1['creator'] == $value2['id']) {
                                                        $b = $value2['name'];
                                                    }

                                                    echo '&nbsp;&nbsp;&nbsp; ' . $b . ' đã sử dụng mã giới thiệu của bạn';
                                                    echo ' bạn được cộng ' . $value1['value'] . ' vào tài khoản ';
                                                }
                                                ?>
                                            </a>
                                        </li>
                                        <?php
                                    } else {
                                        ?>
                                        <li> 
                                            <a href="<?php echo $value1['url']; ?>"> 
                                                <i class="fa fa-newspaper-o fa-5x" aria-hidden="true"></i>
                                                <?php
                                                echo '&nbsp;&nbsp;&nbsp; [LAKITA.VN] đã đăng 1 tin mới vào ngày ';
                                                echo date('H:i:s d/m/Y', $value1['time']);
                                                ?>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                }
                            } else {
                                ?>
                                <li>
                                    <a><p>Hiện tại không có thông báo mới để hiển thị</p></a>
                                </li>
                                <?php
                            }
                            ?> 
                            <li>
                                <a style="text-align: center; background-color: #d5eadb; color: #000" href="<?php echo base_url(); ?>thong-bao.html"> 
                                    Xem những thông báo cũ hơn
                                </a>
                            </li>
                            <!--locnt-->



                        </ul>
                    </li>
                    <li role="presentation" class="icon-bar paddingleft56"> 
                            <?php $data = null; ?>
                        <a data-toggle="modal" data-target="#modal_course_love" class="pointer"> 
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            <?php
                            if (isset($user_id)) {
                                $courses_love = $this->lib_mod->detail('love', array('user_id' => $user_id));
                                if (count($courses_love)) {
                                    ?>
                                <!--                                    <span class="badge">
                                    <?php echo count($courses_love); ?>
                                                                    </span>-->

                                    <?php
                                    $courses_detail = [];
                                    foreach ($courses_love as $key => $value) {
                                        $courses_detail[$key] = $this->lib_mod->detail('courses', array('id' => $value['course_id']))[0];
                                    }
                                    $data['courses_love'] = $courses_detail;
                                }
                            }
                            ?>
                        </a>
                    </li>

                    <li role="presentation" class="icon-bar paddingleft56"> <a href="" class="commingsoon"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                    <?php
                    if (!isset($user_id)) {
                        ?>
                        <li role="presentation" class="icon-bar paddingleft56"> <a href="" id="menu_register"> ĐĂNG KÝ </a></li>
                        <li role="presentation" class="icon-bar paddingleft53"> <a href="" id="menu_login"> ĐĂNG NHẬP </a></li>
                        <?php
                    } else {
                        ?>
                        <li class="dropdown login-bar paddingleft35 avatar-li dropdown_hover">
                            <a id="drop1" href="#" role="button" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="<?php
                                if (!empty($student[0]['id_fb']))
                                    echo 'https://graph.facebook.com/' . $student[0]['id_fb'] . '/picture?type=large';
                                else {
                                    if (!empty($student[0]['thumbnail']))
                                        echo 'https://lakita.vn/' . $student[0]['thumbnail'];
                                    else
                                        echo base_url() . 'styles/images/people/110/user.png';
                                }
                                ?>" alt="" class="img-circle avatar" />
                                &nbsp;&nbsp;&nbsp;
    <?php echo $student[0]['name']; ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-header-1" role="menu" aria-labelledby="drop1">
                                <li> <a href="<?php echo base_url(); ?>khoa-hoc-cua-toi.html"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> &nbsp; Khóa học của tôi </a></li>
                                <li> <a href="<?php echo base_url(); ?>kich-hoat-khoa-hoc.html"> <i class="fa fa-compress" aria-hidden="true"></i> &nbsp; Kích hoạt khóa học </a></li>
                                <li> <a href="<?php echo base_url(); ?>nap-tien-vao-tai-khoan.html"> <i class="fa fa-usd" aria-hidden="true"></i> &nbsp; Nạp tiền vào tài khoản </a> </li>
                                <li> <a href="<?php echo base_url(); ?>thong-tin-tai-khoan.html"> <i class="fa fa-user" aria-hidden="true"></i> &nbsp; Tài khoản </a> </li>
                                <li> <a href="<?php echo base_url(); ?>lich-su-thanh-toan.html"> <i class="fa fa-list-alt" aria-hidden="true"></i> &nbsp; Lịch sử thanh toán </a> </li>
                                <li> <a href="student/logout"> <i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Đăng xuất </a> </li>
                            </ul>
                        </li>
<?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php if (!isset($user_id)) { ?>
    <link type="text/css" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/login_modal.css" />
    <!-- ==============================================MODAL ĐĂNG NHẬP - ĐĂNG KÝ ================================================-->
    <button data-toggle="modal" data-target="#myModal3" class="btn btn-block btn-success hidden" id="show_modal"> ĐĂNG NHẬP </button>
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content fontOpenSans">
                <div class="modal-body">
                    <div class="pull-right required"> <span style="display: inline-block; margin-top: 11px;"> Dấu * là bắt buộc &nbsp;&nbsp;&nbsp;&nbsp; </span> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>
                    <div class="row">
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#login" aria-controls="home" role="tab" data-toggle="tab" id="tab_login"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"> </span> &nbsp; Đăng nhập</a></li>
                                <li role="presentation"><a href="#register" aria-controls="profile" role="tab" data-toggle="tab" id="tab_register"><i class="fa fa-user" aria-hidden="true">+</i> Đăng ký</a></li>
                                <li role="presentation"><a href="#forgetPassword" aria-controls="messages" role="tab" data-toggle="tab" id="tab_forgetpassword"> <i class="fa fa-key" aria-hidden="true"></i> Quên mật khẩu</a></li>
    <!--                                <li role="presentation"><a href="#activeCOD" aria-controls="settings" role="tab" data-toggle="tab"> <i class="fa fa-check" aria-hidden="true"></i> Kích hoạt khóa học</a></li>-->
                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <!-- ****************************************ĐĂNG NHẬP********************************************-->
                                <div role="tabpanel" class="tab-pane fade in active" id="login">
                                    <div class="my-container-1">
                                        <p> <strong> Hãy đăng nhập vào hệ thống học trực tuyến Lakita để nhận nhiều ưu đãi </strong> </p>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="my-form-group-1 marginbottom15">
                                                    <div class="my-form-control-1">Email*</div>
                                                    <div class="my-form-control-1 border">
                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                        <span class="vr"></span>
                                                        <input type="email" name="email" id="login_email" placeholder="Nhập Email">
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom15">
                                                    <div class="my-form-control-1">Mật khẩu*</div>
                                                    <div class="my-form-control-1 border">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                        <span class="vr"></span>
                                                        <input type="password" name="password" id="login_password" placeholder="Nhập mật khẩu">
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom0">
                                                    <div class="my-form-control-1 remember">  <input type="checkbox" class="checkbox1" name="is_remember" id="is_remember" /> </div>
                                                    <div class="my-form-control-1 paddingleft0">
                                                        Ghi nhớ tài khoản
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 hidden-sm hidden-xs">
                                                    <div class="my-form-control-1"></div>
                                                    <div class="my-form-control-1 paddingleft0">
                                                        Quên mật khẩu? <a href="#" class="lakita" id="link_forgetpassword">Click vào đây để lấy lại mật khẩu</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom10 margintop10">
                                                    <div class="my-form-control-1 hidden-xs"></div>
                                                    <div class="my-form-control-1 paddingleft0">
                                                        <button value="login" class="click_login btn btn-primary my-btn"> <i class="fa fa-sign-in" aria-hidden="true"></i> ĐĂNG NHẬP VÀO HỆ THỐNG</button>
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 hidden-sm hidden-xs">
                                                    <div class="my-form-control-1"></div>
                                                    <div class="my-form-control-1 paddingleft0">
                                                        Bạn chưa có tài khoản? <a href="#" id="link_register">Đăng ký</a>
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="hidden-sm hidden-xs">
                                                    <input type="checkbox" name="remember_password" value="remember_password"/> Tôi muốn nhận khuyến mại đặc biệt và giảm giá qua email.
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12 social-login">
                                                <p> Hoặc đăng nhập bằng tài khoản sau: </p>
                                                <a href="<?php echo $facebook_login_url; ?>" class="my-btn bgfb"> <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; Đăng nhập qua Facebook </a>
                                                <a id="customBtn" class="my-btn bggg" href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=125422840079-ars8uilref93d7jaic148nkqm41vao9u.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flakita.vn%2Fplugin%2Fgg.php&state&scope=email%20profile&approval_prompt=auto"> <i class="fa fa-google-plus" aria-hidden="true"></i> &nbsp; Đăng nhập qua Google+ </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ****************************************ĐĂNG KÝ********************************************-->
                                <div role="tabpanel" class="tab-pane fade" id="register">
                                    <div class="my-container-1">
                                        <p> <strong> Hãy đăng ký tài khoản tại Lakita để nhận nhiều ưu đãi </strong> </p>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="my-form-group-1 marginbottom15">
                                                    <div class="my-form-control-1">Họ và tên*</div>
                                                    <div class="my-form-control-1 border">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span class="vr"></span>
                                                        <input type="text" name="name" id="signup_name" placeholder="Nhập họ tên">
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom15">
                                                    <div class="my-form-control-1">Email*</div>
                                                    <div class="my-form-control-1 border">
                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                        <span class="vr"></span>
                                                        <input type="email" name="email" id="signup_email" placeholder="Nhập Email">
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom15">
                                                    <div class="my-form-control-1">Điện thoại*</div>
                                                    <div class="my-form-control-1 border">
                                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                                        <span class="vr"></span>
                                                        <input type="phone" name="phone" id="signup_phone"placeholder="Nhập số điện thoại">
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom15">
                                                    <div class="my-form-control-1">Mật khẩu*</div>
                                                    <div class="my-form-control-1 border">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                        <span class="vr"></span>
                                                        <input type="password" name="password" id="signup_password" placeholder="Nhập mật khẩu">
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom15">
                                                    <div class="my-form-control-1">Nhập lại*</div>
                                                    <div class="my-form-control-1 border">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                        <span class="vr"></span>
                                                        <input type="password" name="re_password" id="signup_repassword" placeholder="Nhập lại mật khẩu">
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom0">
                                                    <div class="my-form-control-1 remember">  
                                                        <input type="checkbox" class="checkbox1" id="agree_term" /> 
                                                    </div>
                                                    <div class="my-form-control-1 paddingleft0">
                                                        Tôi đồng ý với <a class="lakita" data-toggle="modal" href="#modal-terms"> Điều khoản & dịch vụ </a> của Lakita
    <?php $this->load->view('home/terms'); ?>
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="my-form-group-1 marginbottom10 margintop10">
                                                    <div class="my-form-control-1 hidden-xs"></div>
                                                    <div class="my-form-control-1 paddingleft0">
                                                        <button value="signup" class="click_login btn btn-primary my-btn">  <i class="fa fa-user" aria-hidden="true">+</i> &nbsp;ĐĂNG KÝ TÀI KHOẢN</button>
                                                    </div>
                                                    <div class="clr"></div>
                                                </div>
                                                <div class="hidden-sm hidden-xs">
                                                    <input type="checkbox" name="remember_password" value="remember_password"/> Tôi muốn nhận khuyến mại đặc biệt và giảm giá qua email.
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-5 col-xs-12 social-login">
                                                <p> <strong> Nếu bạn đã có tài khoản hãy <a href="#" class="lakita" id="link_login"> Đăng nhập </a></strong></p>
                                                <p> Hoặc đăng nhập bằng tài khoản sau: </p>
                                                <a href="<?php echo $facebook_login_url; ?>" class="my-btn bgfb"> <i class="fa fa-facebook" aria-hidden="true"></i> &nbsp; Đăng nhập qua Facebook </a>
                                                <a id="customBtn2" class="my-btn bggg" href="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=125422840079-ars8uilref93d7jaic148nkqm41vao9u.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flakita.vn%2Fplugin%2Fgg.php&state&scope=email%20profile&approval_prompt=auto"> <i class="fa fa-google-plus" aria-hidden="true"></i> &nbsp; Đăng nhập qua Google+ </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ****************************************QUÊN MẬT KHẨU********************************************-->
                                <div role="tabpanel" class="tab-pane fade" id="forgetPassword">
                                    <div class="my-container-1 textaligncenter" id="forgetPasswordHTML1">
                                        <p> <strong> Khôi phục mật khẩu </strong> </p>
                                        <p> Mời bạn nhập email của bạn vào ô dưới đây để tiếp tục </p>
                                        <hr>
                                        <div class="my-form-group-1 marginbottom15">
                                            <div class="my-form-control-1">Email*</div>
                                            <div class="my-form-control-1 border">
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <span class="vr"></span>
                                                <input type="email" id="forgetPasswordEmail" name="forgetPasswordEmail" placeholder="Nhập Email">
                                            </div>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="my-form-group-1 marginbottom10 margintop10">
                                            <div class="my-form-control-1 return">
                                                <button style="width: 50%;" class="my-btn" id="back_to_login"> <i class="fa fa-arrow-left" aria-hidden="true"></i> QUAY LẠI</button>
                                            </div>
                                            <div class="my-form-control-1 confirm">
                                                <button style="width: 50%;" class="my-btn" id="forgetPassBtn"> XÁC NHẬN <i class="fa fa-arrow-right" aria-hidden="true"> </i></button>
                                            </div>
                                            <div class="clr"></div>
                                        </div>
                                    </div>
                                    <div class="my-container-1 textaligncenter" id="forgetPasswordHTML2">
                                        <p> <strong> Tạo mới mật khẩu </strong> </p>
                                        <div class="forgetInfo">
                                            <p> <strong>Chú ý:</strong> Nhập mã xác nhận được gửi tới "<span id="email_forget_send" style="font-weight:bold;"> </span>". </p>
                                            <p> Sau đó tiến hành tạo một mật khẩu mới để đăng nhập </p>
                                        </div>
                                        <hr>
                                        <div class="my-form-group-1 marginbottom15">
                                            <div class="my-form-control-1">Mã xác nhận*</div>
                                            <div class="my-form-control-1 border">
                                                <i class="fa fa-compress" aria-hidden="true"></i>
                                                <span class="vr"></span>
                                                <input type="text" id="code_forget" name="code_forget" placeholder="Nhập mã xác nhận">
                                            </div>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="my-form-group-1 marginbottom15">
                                            <div class="my-form-control-1">Mật khẩu*</div>
                                            <div class="my-form-control-1 border">
                                                <i class="fa fa-key" aria-hidden="true"></i>
                                                <span class="vr"></span>
                                                <input type="password" id="password_forget" name="password_forget" placeholder="Nhập mật khẩu mới">
                                            </div>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="my-form-group-1 marginbottom15">
                                            <div class="my-form-control-1">Xác nhận mật khảu*</div>
                                            <div class="my-form-control-1 border">
                                                <i class="fa fa-key" aria-hidden="true"></i>
                                                <span class="vr"></span>
                                                <input type="password" id="re_password_forget" name="re_password_forget" placeholder="Nhập lại mật khẩu mới">
                                            </div>
                                            <div class="clr"></div>
                                        </div>
                                        <div class="my-form-group-1 marginbottom10 margintop10 marginleft35pt">
                                            <div class="my-form-control-1 paddingleft0" style="width: 50%;">
                                                <button type="submit" class="my-btn" id="CreatePassBtn">  TẠO MẬT KHẨU  <i class="fa fa-key" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="clr"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--                                <div role="tabpanel" class="tab-pane fade" id="activeCOD">
                                                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    <!--    <button type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#myModal3" id="show_modal">Large modal</button>-->
    <!-- ==============================================MODAL ĐĂNG NHẬP - ĐĂNG KÝ (HẾT)================================================-->
<?php }
?>
<?php
if ($data != null) {
    $this->load->view('template/course_love_modal', $data);
}
?>
<script src="<?php echo base_url(); ?>styles/v2.0/js/navbar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>styles/v2.0/js/notification.js"></script>
