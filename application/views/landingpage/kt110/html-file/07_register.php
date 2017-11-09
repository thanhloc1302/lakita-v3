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
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <div style="margin: 0 auto;width: 80%; color: rgba(255,255,255,1); text-align: center; margin-top: 80px; margin-bottom: 30px; background-color: rgba(0,0,0,0.38);">
                    <p style="font-size: 21px; font-weight: 700;line-height: 45px;"><strike><?php echo number_format($rs->price_root, 0, ",", "."); ?>đ</strike></p>
                    <p style="font-size: 30px; font-weight: 700; color: red; line-height: 45px;">chỉ còn <?php echo number_format($rs->price, 0, ",", "."); ?>đ</p>
                    <p style="font-size: 36px; font-weight: 700; line-height: 62px;">ƯU ĐÃI <?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>%</p>
                    <p style="width: 90%; border: 1px solid white; margin-left: 5%; margin-bottom: 20px"></p>
                    <p style="line-height: 20px;">Học online chỉ còn <?php echo number_format($rs->price, 0, ",", "."); ?>đ khi đăng ký trước ngày <span class="fullyear"> 03/05/2017 </span></p>
                    <p style="width: 90%; border: 1px solid white; margin-left: 5%; margin-top: 20px"></p>
                    <p style="font-size: 30px; font-weight: 700; line-height: 120px;padding-bottom: 80px">NHANH TAY LÊN !</p>
                </div>
            </div>
            <div class="col-md-1 hidden-xs hidden-sm">
                <div class="duongdoc"></div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div style="margin: 0 auto;">
                    <div class="tc" style="margin-top: 80px; margin-bottom: 30px; "><p style="font-size: 24px; font-weight: 600; text-align: center">Thành công cần hành động quyết liệt !<p></div>
                    <div class="phom">
                        <form id="fr_save_c3" class="LeadPanel_form promo-panel_action e_submit e_form_submit" action="<?php echo $code_ladingpage.'/';?>thank-you.html" method="post" name="fr_register">
                            <div class="form-group">
                                <input type="text" class="form-control dauvao hoten" name="name" placeholder="Họ và tên" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control glass dauvao sdt" name="phone" placeholder="Nhập số điện thoại" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control glass dauvao sdt" name="email" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control glass dauvao diachi" name="dia_chi" placeholder="Nhập địa chỉ" >
                            </div>
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <button type="submit" class="btn btn-success buttonn but LeadPanel_action button radius e_btn_submit reg_bt" ><p style="font-size: 25px; font-weight:700 ">ĐĂNG KÍ NGAY</p></button>
                        </form>
                    </div>
                    <div style="width: 85%;border: 1px solid white; margin-top: 30px;margin-bottom: 30px"></div>
                    <div class="lienhe" style="color: white">
                        <p style="font-size: 20px;font-weight: 500; margin-bottom: 20px">Liên hệ</p>
                        <p style="font-size: 14px; margin-bottom: 25px"><i class="fa fa-home" aria-hidden="true"></i> Địa chỉ: Tầng 7, tòa CT1 Skylight, 125D Minh Khai, HBT, Hà Nội</p>
                        <p style="font-size: 14px; margin-bottom: 25px"><i class="fa fa-phone" aria-hidden="true"></i> Hotline: 1900 636 195 - 04 7306 2468 - 0971 571 532</p>
                        <p style="font-size: 14px; margin-bottom: 25px"><i class="fa fa-envelope" aria-hidden="true"></i> Email: cskh@lakita.vn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>