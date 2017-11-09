<?php
$code_ladingpage = str_replace('.html', '', str_replace('https://lakita.vn/', '', current_url()));
$config = array(
    'server' => 'https://crm2.lakita.vn/',
    'api_key' => 'RrF3rcmYdWQbviO5tuki3fdgfgr4',
    'api_name' => 'lakita-key',
);
$restClient = new Rest_Client($config);
$uri = "landingpage_api/price/" . $code_ladingpage;
$result = $restClient->get($uri);
$rs = json_decode($result);
?>
<div class="container-fluid padding-bottom-20 register" id="register_area">
    <div class="container">
        <h2> ĐĂNG KÝ KHÓA HỌC NGAY ĐỂ NHẬN ƯU ĐÃI <?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>% </h2>
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="row margin-top-30">
                    <div class="col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2 col-xs-5 col-xs-offset-1 price-root">
                        <p class="price-root"> <?php echo number_format($rs->price_root, 0, ",", "."); ?>đ</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-5 price-sale">
                        <p class="price-sale-text">Chỉ còn</p>
                        <p class="price-sale"> <?php echo number_format($rs->price, 0, ",", "."); ?>đ</p>
                    </div>
                </div>
                <p class="apply"> Áp dụng đến hết <span class="fullyear"> 24/04/2017</span> . NHANH TAY LÊN </p>
                <div class="text-center">
                    <ul> 
                        <li class="hidden-xs"> 
                            <p> 00 </p> 
                            <p class="time"> Ngày </p>
                        </li>
                        <li> 
                            <p class="num-hour"> 00 </p> 
                            <p class="time"> Giờ </p>
                        </li>
                        <li> 
                            <p class="num-minute"> 07 </p> 
                            <p class="time"> Phút </p>
                        </li>
                        <li> 
                            <p class="num-second">  00 </p> 
                            <p class="time"> Giây </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12 form-rgt">
                <form id="fr_save_c3" class="LeadPanel_form promo-panel_action e_submit e_form_submit" action="<?php echo $code_ladingpage.'/';?>thank-you.html" method="post" name="fr_register">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Họ và tên" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Số điện thoại" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="dia_chi" placeholder="Địa chỉ">
                    </div>
                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                    <button type="submit" class="btn btn-default LeadPanel_action button radius e_btn_submit reg_bt">Đăng kí ngay</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p class="note"> Sau khi đăng ký mua khóa học, bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin 
                    và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn. Bạn chỉ phải trả tiền khi nhận được khóa học. </p>
                <hr>
                <h2 class="free-ship"> MIỄN PHÍ GIAO HÀNG TOÀN QUỐC </h2>
                <p class="contact-us"> LIÊN HỆ:  Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội </p>
                <p class="hotline"> Hotline: 1900 636 195 - 04 7306 2468  </p>
            </div>
        </div>
    </div>
</div>