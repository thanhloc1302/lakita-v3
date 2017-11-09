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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lakita - Bí quyết làm chủ Excel</title>
        <meta name="description" content="description">
        <meta name="author" content="Coralix Themes">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="https://lakita.vn/bi-quyet-lam-chu-excel-2017.html" />
        <meta property="og:title" content="Bí quyết làm chủ Excel" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/268x150/hoc-excel-co-ban-bi-quyet-lam-chu-excel-2010.png" />
        <meta property="og:description" content="Khóa học dành cho nhân viên hành chính văn phòng, kế toán, tài chính, ngân hàng. Hơn 2000 học viên tham gia, 78% hài lòng về sự hỗ trợ" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- 1.9.1 -->
        <script>(function () {
                var _fbq = window._fbq || (window._fbq = []);
                if (!_fbq.loaded) {
                    var fbds = document.createElement('script');
                    fbds.async = true;
                    fbds.src = '//connect.facebook.net/en_US/fbds.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(fbds, s);
                    _fbq.loaded = true;
                }
            })();
            window._fbq = window._fbq || [];
            window._fbq.push(['track', '6035024735132', {'value': '0.00', 'currency': 'VND'}]);
        </script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-101599907-1', 'auto');
            ga('require', 'linkid', 'linkid.js');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
        </script>
        <noscript>
    <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6035024735132&amp;cd[value]=0.00&amp;cd[currency]=VND&amp;noscript=1" />
    </noscript>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
    <!-- Fav and touch icons
        ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>public/e100/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>public/e100/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>public/e100/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="52x52" href="<?php echo base_url() ?>public/e100/img/apple-touch-icon-57x57.png">

    <!-- Custom styles 
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/e100/css/responsiveslides.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>public/e100/css/animate-custom.css"   type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>public/e100/css/font-awesome.min.css"   type="text/css" media="screen"/>

    <link rel="stylesheet" href="<?php echo base_url() ?>public/e100/css/style1.css"            type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/e100/css/style.css"            type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/e100/css/newstyle.css">
    <!-- <link rel="stylesheet" href="css/style-green.css"            type="text/css" media="screen"> -->

    ================================================== -->
    <link href="<?php echo base_url() ?>public/e100/css/media-queries.css" rel="stylesheet" media="screen">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
   <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1645549219061949');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1645549219061949&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->
    </head>
    <script>
        fbq('track', 'CompleteRegistration');
    </script>
<?php include_once("plugin/analyticstracking.php") ?>
<body>
      <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=315347858825221";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    <header class="nav-down">
        <!-- Top Bar -->
        <div class="top">
            <div class="container">
                <a class="logo" href="./"><img src="<?php echo base_url() ?>public/e100/img/logo.png" alt="logo"></a>
                <ul class="btns-top">
                    <li><a href="#" class="" style="    color: #E50000;    font-size: 11pt;    font-weight: 600;">HOTLINE: 1900 6361 95 - 04 7306 2468</a></li>
                    <li><a href="#dangky" class="btn btn-large btn-primary">ĐĂNG KÝ NGAY</a></li>
                </ul>
            </div>
        </div>
        <!-- End Top Bar -->
    </header>
    <!-- Slider -->
    <div class="form-curse">
        <div id="test" class="hidden-md hidden-lg"></div>
        <div class="container">
            <div class="row-fluid">            		
                <div class="curse-form-box  animated delay1 flipInX">
                    <div class="gr1">
                        <h3 id="intro" style="color: #fff;text-align: center;line-height: 35px;font-size: 35px;"><strong>BÍ QUYẾT LÀM CHỦ EXCEL NĂM 2017</strong>
                        </h3>
                        <p style="text-align: center;line-height: 35px;">Khóa học dành cho nhân viên hành chính văn phòng, kế toán, tài chính, ngân hàng</p>
                        <p style="text-align: center;line-height: 35px;">Hơn 2000 học viên tham gia, 78% hài lòng về sự hỗ trợ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider -->	


    <!-- End Header-->


    <!--Video List-->
    <section class="container video generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span><em>TẦM QUAN TRỌNG CỦA EXCEL</em></span></h2>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <div style="    text-align: center;padding-top: 20px;">
                    <img src="<?php echo base_url() ?>public/e100/img/brainstormex.png" alt="brainstormex"  class=" animated tada"/>
                </div>
            </div>
            <div class="span8">
                <h3 style="    text-align: justify;line-height: 26pt; font-size: 14px">
                    <u><b>BẠN CÓ BIẾT:</b></u><br>❖ <span style="font-size: 20pt;font-weight: 600;">95%</span> nhân viên trong bộ phận <b>kế toán</b> và <b>tài chính</b> sử dụng Excel hàng ngày để phác thảo <b>kết quả tài chính, ngân sách, dự báo tài chính, kế hoạch sử dụng tài chính</b> để đưa ra những quyết định kinh doanh lớn.<br>
                    ❖ Phần lớn các Doanh Nghiệp tại Việt Nam không biết sử dụng Excel để <b>phân tích các dữ liệu kinh doanh về tiếp thị, phát triển sản phẩm, tài chính, nhân sự</b> vì chỉ dùng được <span style="font-size: 15pt;font-weight: 600;">10%</span> công dụng của phần mềm này.<br>
                    ❖ Theo một nghiên cứu ở Nhật Bản, <span style="font-size: 15pt;font-weight: 600;">86%</span> người được hỏi cho rằng kĩ năng sử dụng Excel là kĩ năng quan trọng trong việc <b>thăng tiến</b> tại doanh nghiệp<br>
                    ❖ <b>68%</b> Cơ bản sử dụng được <b>Excel</b> trong công việc văn phòng; <b>25%</b> Tùy chỉnh được <b>biểu mẫu Excel</b> cho công việc; <b>1%</b> Tự xây được <b>biểu mẫu Excel</b> dùng cho công việc

                </h3>
            </div>
        </div> 	
    </section>  
    <!--End Video List-->


    <!--Content Steps-->
    <section class="container steps generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2><span>Bí quyết <em>Làm chủ Excel</em> năm 2017</span></h2>
            </div>
        </div>
        <div class="row-fluid">


            <div class="span4 item first">
                <span class="ico"></span>
                <h4>Kinh nghiệm thực tiễn</h4>
                <p>Được tiếp thu kinh nghiệm thực tiễn<span style="font-size: 16pt;font-weight: 600;"> 10</span> năm từ CHUYÊN GIA</p>
            </div>
            <div class="span4 item second">
                <span class="ico"></span>
                <h4>Học trực tuyến</h4>
                <p>
                    Mọi lúc, mọi nơi, với tài khoản sử dụng trọn đời. 43 video bài giảng thực tiễn + 200 bài tập thực hành + 50 bài viết chuyên môn/năm, kho tra cứu về excel với hơn 300 bài viết về hàm, lĩnh vực kế toán, hành chính, nhân sự, ngân hàng, bảo hiểm, giải đáp trong 68 giờ.
                </p>
            </div>
            <div class="span4 item third">
                <span class="ico"></span>
                <h4>Chi phí phải chăng</h4>
                <p>Chỉ bằng <span style="font-size: 16pt;font-weight: 600;"> 2/15</span> chi phí học offline</p>
            </div>
        </div>
    </section>
    <!--End Content Steps-->


    <!--learn-->
    <section class="container learn generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span><em>Thông tin giảng viên</em></span></h2>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span5">
                <img src="<?php echo base_url() ?>public/e100/img/02.jpg" alt="mac" />
            </div>
            <div class="span7 text-left">
                <ul style="list-style-image: url('<?php echo base_url() ?>public/e100/img/tick.png');font-family: Roboto;    font-size: 12px;" class="">
                    <li><b>Thạc sĩ Nguyễn Danh Tú – Viện Toán ứng dụng &amp; Tin học ĐH Bách Khoa Hà Nội</b></li>
                    <li><b>Giám đốc <b>tài chính</b> Doanh Nghiệp +600 Nhân viên</b></li>
                    <li><b>+15 năm kinh nghiệm sử dụng hệ thống Office trong làm việc và cải tiến quy trình</b></li>
                    <li><b>+100 khóa giảng dạy chuyên đề, kỹ năng về ứng dụng CNTT trong làm việc</b></li>
                    <li><b>+20 khóa học dành riêng cho người đi làm với chuyên đề Excel.</b></li>
                </ul>
                <i style="    font-size: 15px;    line-height: 19pt;    color: #000;    background: rgba(255, 255, 255, 0.72);    font-family: roboto;">"..."</i>
            </div>

        </div> 	
    </section>  
    <!--learn-->


    <!--Video List-->
    <section class="container video generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span><em>DÙ SAO CŨNG PHẢI HỌC</em><br><i style="    font-size: 21px;    font-style: initial;"> Sao không học ngay hôm nay</i></span></h2>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <video height="100%"  src="<?php echo base_url() ?>public/e100/bai40.mp4" type="video/mp4" 
                       id="player1"  
                       controls="controls" ></video>


            </div>
            <div class="span6">
               	<ul class="list-features">
                    <li>Làm chủ được công cụ Microsoft Excel và hiểu được nguyên lý cơ bản cốt lõi nhất để nâng cao trình độ và năng suất công việc.</li>
                    <li>Được tư vấn, giải đáp trực tiếp từ <b>chuyên gia 10 năm kinh nghiệm</b>.</li>
                    <li>Được thực hành trên 100 tình huống thực tiễn.</li>
                    <li>Được thực hành với hơn 36 Video hướng dẫn.</li>
                    <li>100 bài tập thực tiễn + 10 mẫu excel thực tiễn trong công việc.</li>
                    <li><b>Thăng tiến</b> vượt bậc và phát triển <b>kỹ năng cá nhân</b>.</li>
                    <li><b>Hỗ trợ 24/7 với đội ngũ trợ giảng tận tâm.</b></li>
                    <li>Được nhận 50 bài viết chuyên môn/năm.</li>
                    <li>Giải đáp trong 68 giờ.</li>
                    <li>Kho tra cứu về excel với hơn 300 bài viết về hàm, lĩnh vực <b>kế toán, hành chính, nhân sự, ngân hàng, bảo hiểm</b>.</li>
                    <li><b>Đặc biệt được tặng thêm khóa "18 thủ thuật excel".</b></li>
                </ul>
                <div align="center"><a data-toggle="modal" href="#dangky" class="btn btn-large btn-primary">ĐĂNG KÝ NGAY</a>
                </div>
            </div>
        </div> 	
    </section>  
    <!--End Video List-->

    <!--learn-->
    <section class="container learn generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span><em>Nội dung khóa học</em></span></h2>
            </div>
        </div>
        <div class="row-fluid my-row-5">
            <div class="col-md-5 col-md-offset-1 col-sm-12">

                <div class="dropdown chapter-title">
                    <a data-toggle="dropdown" href="#"><div> Phần 1: </div>
                        <div>Bí quyết làm chủ file excel 2010</div></a>
                    <ul class="dropdown-menu list-learn" role="menu" aria-labelledby="dLabel" style="width: 100%">
                        <li><span class="bold">Bài 1:</span> Học Excel qua 10 thao tác đơn giản - phần 1</li>
                        <li><span class="bold">Bài 2:</span> Học Excel qua 10 thao tác đơn giản - Phần 2</li>
                        <li><span class="bold">Bài 3:</span> Cách đặt mật khẩu cho Excel (Phần 1)</li>
                        <li><span class="bold">Bài 4:</span> Cách đặt mật khẩu cho Excel (Phần 2)</li>
                        <li><span class="bold">Bài 5:</span> Soạn thảo và trình bày định dạng trong Excel</li>
                        <li><span class="bold">Bài 6:</span> Thao tác nhanh với bảng tính Excel</li>
                        <li><span class="bold">Bài 7:</span> Sao chép cắt dán, copy paste trong Excel</li>

                    </ul>
                </div>

                <div class="dropdown chapter-title">
                    <a data-toggle="dropdown" href="#"><div> Phần 2: </div>
                        <div> Bí quyết làm chủ ô trong Excel 2010</div></a>
                    <ul class="dropdown-menu list-learn" role="menu" aria-labelledby="dLabel" style="width: 100%">
                        <li><span class="bold">Bài 8:</span> Định dạng số trong Excel (Phần 1)</li>
                        <li><span class="bold">Bài 9:</span> Định dạng số trong Excel (Phần 2)</li>
                        <li><span class="bold">Bài 10:</span> Hướng dẫn sử dụng địa chỉ ô trong Excel</li>
                        <li><span class="bold">Bài 11:</span> Lỗi thường gặp trong Excel</li>
                        <li><span class="bold">Bài 12:</span> Đồ thị trong Excel (Phần 1)</li>
                        <li><span class="bold">Bài 13:</span> Đồ Thị Trong Excel (Phần 2)</li>
                    </ul>
                </div>


                <div class="dropdown chapter-title">
                    <a data-toggle="dropdown" href="#"><div> Phần 3: </div>
                        <div> Bí quyết làm chủ hàm Excel 2010</div></a>
                    <ul class="dropdown-menu list-learn" role="menu" aria-labelledby="dLabel" style="width: 100%">
                        <li><span class="bold">Bài 14:</span> Câu lệnh có điều kiện IF và Logic trong Excel (Phần 1)</li>
                        <li><span class="bold">Bài 15:</span> Câu lệnh có điều kiện IF và Logic trong Excel (Phần 2)</li>
                        <li><span class="bold">Bài 16:</span> Câu lệnh có điều kiện IF và Logic trong Excel (Phần 3)</li>
                        <li><span class="bold">Bài 17:</span> Hàm Vlookup - Hlookup trong Excel (Phần 1)</li>
                        <li><span class="bold">Bài 18:</span> Hàm Vlookup - Hlookup trong Excel (Phần 2)</li>
                        <li><span class="bold">Bài 19:</span> Merge cell, data validation trong Excel</li>
                        <li><span class="bold">Bài 20:</span> Đếm trong Excel (Phần 1)</li>
                        <li><span class="bold">Bài 21:</span> Đếm trong Excel (Phần 2)</li>
                        <li><span class="bold">Bài 22:</span> Hàm tính tổng trong Excel (Phần 1)</li>
                        <li><span class="bold">Bài 23:</span> Hàm tính tổng trong Excel (Phần 2)</li>
                    </ul>
                </div>         
            </div>


            <div class="col-md-5 col-md-offset-1 col-sm-12">
                <div class="dropdown chapter-title list-learn">
                    <a data-toggle="dropdown" href="#"><div> Phần 4: </div>
                        <div> Kho bài tập thực hành Excel</div></a>
                    <ul class="dropdown-menu list-learn" role="menu" aria-labelledby="dLabel" style="width: 100%">
                        <li><span class="bold">Bài 24:</span> Danh sách mẫu Excel ứng dụng trong công việc</li>
                        <li><span class="bold">Bài 25:</span> 6 bài tập kiểm tra + 3 assignment + 3 bài tập cuối khóa</li>
                        <li><span class="bold">Bài 26:</span> 10 bài tập mở rộng cơ bản</li>
                        <li><span class="bold">Bài 27:</span> 10 bài tập mở rộng nâng cao</li>
                        <li><span class="bold">Bài 28:</span> 20 bài tập mở rộng cơ bản và hướng dẫn giải</li>
                        <li><span class="bold">Bài 29:</span> 25 đề thi Exce</li>
                        <li><span class="bold">Bài 30:</span> 30 đề thi và hướng dẫn giải</li>
                    </ul>
                </div> 


                <div class="dropdown chapter-title">
                    <a data-toggle="dropdown" href="#"><div> Phần 5: </div>
                        <div> Làm chủ In ấn trong Excel</div></a>
                    <ul class="dropdown-menu list-learn" role="menu" aria-labelledby="dLabel" style="width: 100%">
                        <li><span class="bold">Bài 31:</span> Làm chủ In ấn trong Excel</li></ul>
                </div> 



                <div class="dropdown chapter-title">
                    <a data-toggle="dropdown" href="#"><div> Phần 6: </div>
                        <div>  PivotTable trong Excel</div></a>
                    <ul class="dropdown-menu list-learn" role="menu" aria-labelledby="dLabel" style="width: 100%">
                        <li><span class="bold">Bài 32:</span> Giới thiệu PivotTable trong Excel ></li>
                        <li><span class="bold">Bài 33:</span> Tạo báo cáo tổng hợp  </li>
                        <li><span class="bold">Bài 34:</span> Làm mới dữ liệu</li>
                        <li><span class="bold">Bài 35:</span> Lấy chi tiết báo cáo </li>
                        <li><span class="bold">Bài 36:</span> Định dạng dữ liệu trên Pivot Table</li>
                        <li><span class="bold">Bài 37:</span> Thêm các cột dòng tổng hợp</li>
                        <li><span class="bold">Bài 38:</span> Tùy chỉnh báo cáo dạng cổ điển</li>
                        <li><span class="bold">Bài 39:</span> Tùy chỉnh công thức tính</li>
                        <li><span class="bold">Bài 40:</span> Nhóm các loại dữ liệu (Định dạng ngày tháng, dạng số) </li>
                        <li><span class="bold">Bài 41:</span> Tiền xử lý dữ liệu</li>
                        <li><span class="bold">Bài 42:</span> Bổ sung các cột sữ liệu để làm báo cáo tổng hợp</li>
                        <li><span class="bold">Bài 43:</span> Các tầng dữ liệu</li>
                    </ul>
                </div> 

            </div>

        </div> 	
    </section>  
    <!--learn-->


    <!--Testimonials-->
    <section class="testimonials">
        <div class="container">
            <div class="row-fluid">
                <ul class="list-testimonials" id="slider">
                    <li>
                        <img src="<?php echo base_url() ?>public/e100/img/img-avatar-5.png" alt="testimonial avatar" />
                        <p class="comment">"Học xong thì phải hành. Khóa học ứng dụng Excel thật tuyệt, thời gian xử lý dữ liệu của khách hàng để đưa vào hệ thống tra cứu của mình đã giảm từ 2h xuống chỉ còn 30 phút.Excel quá tuyệt vời và dùng được nó càng là cảm giác  tuyệt vời hơn."</p>
                        <p class="date">Bạn DƯƠNG MINH TÚ - <span>Lập trình viên</span></p>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>public/e100/img/img-avatar-4.png" alt="testimonial avatar" />
                        <p class="comment">"Mình cảm thấy phương thức giảng dạy của bài học rất chuẩn, sáng tạo và những ví dụ cũng rất gần với thực tế. Khóa học đã mang lại cho những người đi làm như mình cảm thấy rất thích thú với công việc hơn và càng kích thích sự tìm tòi, khám phá về MS.
                            Còn về chất lượng dịch vụ thì trên cả tuyệt vời, có lẽ như là dịch vụ 24/24 vậy. Hầu như từ lúc mình biết đến Lakita thì những thắc mắc của mình luôn được tháo gỡ một cách nhanh chóng và nhiệt tình từ các anh. Điều đó càng làm mình thêm tin tưởng và thán phục."</p>
                        <p class="date">Dieu Nguyen (Jenny) - <span> Revenue Analyst InterContinental Danang Sun Peninsula Resort</span></p>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>public/e100/img/img-avatar-1.png" alt="testimonial avatar" />
                        <p class="comment">"Sau khi học Excel bài bản, khoá học đã giúp tôi quản lý khách hàng kế toán tốt hơn, giúp Elink của tôi tăng gấp đôi năng suất"</p>
                        <p class="date">Ông Phạm Minh Tuấn - <span>CEO Dương Quang</span></p>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>public/e100/img/img-avatar-2.png" alt="testimonial avatar" />
                        <p class="comment">Chương trình học rất hay và bổ ích. Nhờ có khóa học mà em biết được nhiều vấn đề mình đang gặp phải.</p>
                        <p class="date">Nguyễn Thị Thúy Hằng – <span>  Cty Cổ Phần Đào Tạo và Phát Triển Kinh Doanh Salesmaster – Học viên lớp Excel Chuyên Sâu số 16</span></p>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>public/e100/img/img-avatar-3.png" alt="testimonial avatar" />
                        <p class="comment">Trước khi đến với khóa học, nếu có công việc gì cần sử dụng đến máy tính như lập thời gian biểu,…thì mình chỉ chọn Microsoft Word. 
                            Mình chưa bao giờ có khái niệm là mở Excel để thực hiện những công việc đó. Bởi Excel đối với mình, nó là một cái gì đó khó khăn và đáng sợ giống như môn “hóa học ” vậy. 
                            Lang thang trên facebook vào 1 ngày đẹp trời, mình vô tình đọc được thông tin về khóa học Excel của trung tâm. Sau khi học em cảm thấy lượng kiến thức cũng như cách truyền tải kiến thức của thầy Tú rất bổ ích, 
                            mình đã quyết định tham gia khóa học. Mình cảm thấy tự tin hơn hẳn. Khi bạn bè nhắc đến Excel mình cũng không cảm thấy ngao ngán như “mèo chán mỡ” nữa. Qua khóa học, mình đã biết được Excel tuyệt vời như thế nào. 
                            Mình có thể thay đổi 1 thời khóa biểu mà không cần kẻ lại, tính toán và sử dụng công thức  cho chuyên ngành kế toán của minh. Cuối cùng mình xin chân thành cảm ơn thầy Tú cùng các anh chị trong trung tâm đã tạo điều kiện và lập nên trung tâm có ích này. Chúc cho trung tâm ngày càng phát triển và mở rộng, 
                            để thực hiện sứ mệnh chắp cánh cho thành công của mọi người cán đích nhanh hơn.</p>
                        <p class="date">Cao Thị Mai – <span> Sinh  viên Đại học Công Nghiệp Hà Nội  –  Học viên khóa Excel 8/2014</span></p>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!--End Testimonials-->


    <!--learn-->
    <section class="container learn generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span><em>HÌNH ẢNH HỌC TRỰC TUYẾN</em></span></h2>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <img src="<?php echo base_url() ?>public/e100/img/anh_lop_hoc_02.png"  />
            </div>


        </div> 	
    </section>  
    <!--learn-->
    <!-- =========================
         TESTIMONIALS
    ============================== -->
    <section class="testimonials2 parallax" id="register_area">

        <!-- FOR COLOR OVERLAY, CHANGE CLASS TO color-overlay-sec -->
        <div class="overlay-sec">
            <div class="container">
                <div class="row" >

                    <!-- ABOUT IMAGE -->
                    <div class="col-md-6 about-img" id="col-md-6-1">

                        <!-- PLACE YOUR ABOUT IMAGE BELOW -->
                        <div class="fix_lg"><a id="uudai"></a>
                            <p>ĐĂNG KÍ MUA KHOÁ HỌC NGAY</p>
                            <p>ĐỂ NHẬN ƯU ĐÃI <span style="color:red"><?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>%</span></p>
                            <div class="new_emph">
                                <div class="old_price"><?php echo number_format($rs->price_root, 0, ",", "."); ?>đ</div>
                                <div class="new_price">
                                    <div style="font-size:12px;margin-left:10px;margin-top:3px;float:left">Chỉ còn</div>
                                    <div style="    font-size: 22pt;"><?php echo number_format($rs->price, 0, ",", "."); ?>đ</div>
                                </div>
                            </div>
                            <p style="font-size:20px; text-decoration:none;font-weight:400;margin-top:20px">
                                Áp dụng đến hết <span id="stop_day">28</span>/<span id="stop_month">02</span>/<span id="stop_year">2017</span> <br>
                                NHANH TAY LÊN !
                            </p>
                            <div class="countdown row">
                                <h5 class="line-1">Thời gian ưu đãi còn</h5>
                                <div class="e_time_count">

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ABOUT TEXT SECTION -->
                    <div class="col-md-4" style="    font-size: 11pt;"> 
                        <div class="form-bg">
                            <div class="form-arrow"></div>
                            <a></a><br><br>
                            <p style="color:#fff; font-size:19px;"> Thành công cần hành động quyết liệt</p>
                            <div id="dangky" style="    max-width: 450px;    margin: auto;">
                                <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage.'/';?>thank-you.html">
                                    <div class="wrap-icon-fullname">
                                        <input  type="text" name="name" id="name" class="LeadPanel_form_name" placeholder="Họ tên" required="required" />
                                    </div>
                                    <div class="wrap-icon-email">
                                        <input  type="email" name="email" id="email" class="LeadPanel_form_email" placeholder="Email" required="required" />
                                    </div>

                                    <div class="wrap-icon-phone">
                                        <input  type="tel" name="phone" id="phone" class="LeadPanel_form_name" placeholder="Số điện thoại" />
                                    </div>

                                    <div class="wrap-icon-province hidden">
                                        <input id="tinh" type="text" name="tinh" class="LeadPanel_form_company" placeholder="Tỉnh thành" value="[395.000]"/>
                                    </div>

                                    <div class="wrap-icon-district hidden">
                                        <input id="quan" type="text" name="quan" class="LeadPanel_form_company" placeholder="Quận huyện" value="[395.000]" />
                                    </div>

                                    <div class="wrap-icon-address">
                                        <input id="dia_chi" type="text" name="dia_chi" class="LeadPanel_form_company" placeholder="Địa chỉ" required="required" />
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <button   id="form-submit-2" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt">ĐĂNG KÝ NGAY</button>
                                </form> 
                            </div>
                        </div>   
                    </div>

                </div>
                <div class="row" style="float: left;">
                    <div class="col-xs-1 col-sm-1 col-md-2 col-lg-1"></div>
                    <div class="notf col-xs-10 col-sm-10 col-md-8 col-lg-10">
                        <p style="    font-size: 11pt;">Với việc điền thông tin để đăng ký mua khóa học. Bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin và nhân viên sẽ giao khóa học tận nơi cho bạn. Bạn chỉ phải trả tiền khi nhận được khóa học</p>
                        <p>MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</p>
                        <div style="    text-align: left;    line-height: 20pt;">
                            <b style="    font-size: 15pt;">LIÊN HỆ: </b><br>
                            Hà Nội: Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng<br>
                            TP. HCM: Số 185-187 Hoàng Văn Thụ, P8, Q.Phú Nhuận, TP.HCM (Trường trung cấp Bách Khoa, Đối diện trung tâm White Place) 
                        </div>
                    </div>
                    <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2"></div>
                </div>
            </div>
        </div>
    </section>



    <!-- =========================
         FUN FACTS
    ============================== -->
    <section id="funfacts">
        <div class="container">
            <div class="row">

                <!-- FUN FACTS CAROUSEL -->
                <div class="carousel-funfacts" id="carousel-funfacts">

                    <!-- FACT 1 -->
                    <div class="carousel-element col-md-12">

                        <!-- ICON -->
                        <span class="elegant icon_mug anim-bounce"></span>

                        <!-- NUMBER COUNT UP (DEFINATED IN alive.scripts.js) -->
                        <p id="count01" class="count"></p>

                        <!-- DESCRIPTION -->
                        <p class="desc">Cups of coffee<br/>consumed</p>

                    </div>

                    <!-- FACT 2 -->
                    <div class="carousel-element col-md-12">

                        <!-- ICON -->
                        <span class="elegant icon_mobile anim-bounce"></span>

                        <!-- NUMBER COUNT UP (DEFINATED IN alive.scripts.js) -->
                        <p id="count02" class="count"></p>

                        <!-- DESCRIPTION -->
                        <p class="desc">Phone calls<br/>made</p>

                    </div>

                    <!-- FACT 3 -->
                    <div class="carousel-element col-md-12">

                        <!-- ICON -->
                        <span class="elegant icon_camera_alt anim-bounce"></span>

                        <!-- NUMBER COUNT UP (DEFINATED IN alive.scripts.js) -->
                        <p id="count03" class="count"></p>

                        <!-- DESCRIPTION -->
                        <p class="desc">Pictures taken during<br/>production</p>

                    </div>

                    <!-- FACT 4 -->
                    <div class="carousel-element col-md-12">

                        <!-- ICON -->
                        <span class="elegant icon_cogs anim-bounce"></span>

                        <!-- NUMBER COUNT UP (DEFINATED IN alive.scripts.js) -->
                        <p id="count04" class="count"></p>

                        <!-- DESCRIPTION -->
                        <p class="desc">Scripts written<br/>& rewritten</p>

                    </div>




                </div>

            </div>
        </div>
    </section>

    <div id="fb-root"></div>
    <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    <div style="    margin-top: 17px;    margin-left: 36px;" class="fb-like" expr:data-href='data:post.canonicalUrl'   data-send="true" data-width="90%" data-show-faces="true"></div>

    <div id="fb-root"></div> 
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="fb-comments" data-href="https://lakita.vn/bi-quyet-lam-chu-excel-2017.html" 
                     data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
            </div>
        </div>
    </div>



    <!--Brands-->
    <!--<section class="brands" id="dangky">
        <div class="container">
            <div class="row-fluid">
                <ul class="list-brands">  
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-twitter.png" alt="//" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-facebook.png" alt="//" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-yahoo.png" alt="//" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-youtube.png" alt="//" /></a></li>
                    <li class="tooltip_hover" title="" data-original-title="More Information"><a href="#"><img src="img/brand-skype.png" alt="//" /></a></li>
                </ul>
            </div>
        </div>
    </section>-->
    <!--End Brands--> 

    <div class="wrap_fixed_bottom hidden-xs">
        <div class="tag_hotline"><span>Hotline</span><span class="arrow_hotline"> &nbsp;</span></div>

        <div class="main_nav_hotline site">
            <ul style="display: inline-flex;  ">
                <li><img alt="" src="https://media.bizwebmedia.net/Sites/105084/data/banners/call.png" style="width: 16px; height: 16px;    vertical-align: text-top;">&nbsp;1900 6361 95 - 04 7306 2468</li>
                <li><img alt="" src="https://media.bizwebmedia.net/Sites/105084/data/banners/fb.jpg?0" style="width: 16px; height: 16px;    vertical-align: text-top;">&nbsp;<a style="    color: #232323;" href="https://www.facebook.com/meovathuthuatexcel" target="_blank">FANPAGE LÀM CHỦ EXCEL</a></li>
            </ul>
            <ul style="display: inline-flex;     width: 300px; ">
                <div class="fb-like" data-href="https://www.facebook.com/meovathuthuatexcel" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
            </ul>
        </div>
        <div class="nttkm hidden-xs" style="width:250px;float:right;">
            <div class="nttkm-title">
                <span class="show_dkntt" style="padding-right:0px; color: #fff;font-weight: bold;font-size: 14px;">
                    <img alt="" src="https://media.bizwebmedia.net/Sites/105084/data/banners/gift_mocskin.png" style="width: 16px; height: 16px;    vertical-align: text-top;">
                    <a style="    color: #fff;" href="#dangky">
                        ĐĂNG KÝ NGAY 
                    </a>
                </span>
            </div>
        </div>
    </div>


    <div style="position: fixed; bottom: 0; width: 100%; z-index: 100000;">
        <a href="#register_area" title="Đăng ký ngay!">
            <img src="https://lakita.vn/styles/images/email/rgt-now.png" alt="Đăng ký ngay!" id="img-rgt" style="float: right;">
        </a>
        <a href="tel:1900636195" title="Đăng ký ngay!">
            <img src="https://lakita.vn/styles/images/email/contact.png" alt="Đăng ký ngay!" id="img-contact" style="float: left; transition: all 0.3s ease-in-out; transition: all 0.3s ease-in-out;">
        </a>

    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var left = $('#img-contact').css('margin-left');

            $('#img-contact').hover(function () {
                $(this).css('margin-left', '0');
            }, function () {
                $(this).css('margin-left', left);
            });
        });
    </script>





    <!--Copyright-->
    <div class="copy">
        <section class="container">
            <div class="row-fluid">				
                <div class="span12">
                    <p>© 2016 - <a href="https://lakita.vn/">LAKITA</a></p>
                </div>	
            </div>
        </section>
    </div>
    <!--end Copyright-->

    <a id="goTop" href="#"> <b>↑</b> </a>






    <!-- *************************************************************Popup*************************************************************************-->
    <div id="Popup" class="popup-wrapper" style="display: none;">
        <div class="popup-loading">
            <div class="loading-container">
                <span>
                    Hệ thống đang xử lý, vui lòng đợi trong giây lát...
                </span>
            </div>
        </div>
    </div>
    <style>
        .popup-wrapper {
            position: fixed;
            bottom: 0;
            right: 0;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 8010;
            background: url(https://lakita.vn/styles/v2.0/img/modal_overlay.png);
        }
        .popup-wrapper .popup-loading{
            background-color: white;
            opacity: 0.7;
            filter:alpha(opacity=70);
            height: 100%;
            width: 100%;
            z-index: 21;
            position: absolute;
            top: 0px;
            left: 0px;

        }
        .popup-wrapper .popup-loading .loading-container{
            position: relative;
            height: 100%;
            background: url(https://lakita.vn/styles/v2.0/img/32.gif) center center no-repeat;
        }
        .popup-wrapper .popup-loading .loading-container span{
            position: absolute;
            top: 58%;
            left: 30%;
            opacity: 1;
            z-index: 1000000000000;
            font-size: 28px;
            font-weight: bold;
        }
    </style>
    <!-- *************************************************************Popup (end)**********************************************************************-->



    <!-- ======================= JQuery libs =========================== -->        

    <script src="<?php echo base_url() ?>public/e100/js/jquery.fitvids.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/e100/js/jquery.placeholder.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/responsiveslides.min.js"></script>
    <script src="<?php echo base_url() ?>public/e100/js/jquery-func.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/e100/js/jquery.plugin.min.js"></script>
    <script src="<?php echo base_url() ?>public/e100/js/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/smoothscroll.js"></script>

    <!-- PARALLAX -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/parallax.js" id="parallax-change"></script>

    <!-- HEADROOM -->
    <script type="text/javascript"  src="<?php echo base_url() ?>public/e100/js/headroom.min.js"></script>      
    <script type="text/javascript"  src="<?php echo base_url() ?>public/e100/js/jQuery.headroom.js"></script>

    <!-- VIEWPORT DETECTION -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/jquery.inview.min.js"></script>

    <!-- CAROUSEL -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/owl.carousel.min.js"></script>

    <!-- COUTNUP -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/countUp.min.js"></script>

    <!-- FORM VALIDATION -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/validator.js"></script>

    <!-- IMAGE ZOOM - COLORBOX JS-->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/jquery.colorbox-min.js"></script>

    <!--CUSTOM THEME SCRIPTS & SETTINGS -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e100/js/alive.scripts.js"></script>
    <script src="<?php echo base_url() ?>public/e100/lakita/js/jquery.form.js" type="text/javascript"></script>
    <script type="text/javascript"  src="<?php echo base_url() ?>public/e100/js/tracking.js"></script>
    <script type="text/javascript"  src="<?php echo base_url() ?>public/e100/js/main.js"></script>
    <script src="<?php echo base_url(); ?>public/my.js" type="text/javascript"></script>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <script>
        var time = new Date("2016-02-28");
        if (time > 0) {
            $('.e_time_count').countdown({
                until: time
            });
        }
    </script>

    <!-- ======================= End JQuery libs =========================== --> 
    <!-- html5 player (start) -->

    <script src="https://lakita.vn/styles/html5/build/mediaelement-and-player.min.js"></script>
    <link rel="stylesheet" href="https://lakita.vn/styles/html5/build/mediaelementplayer.min.css" />
    <script>
        //$('#player1').attr('autoplay', 'true');
        $('audio,video').mediaelementplayer({
            //mode: 'shim',
            success: function (player, node) {
                $('#' + node.id + '-mode').html('mode: ' + player.pluginType);
            }
        });

    </script>

    <!-- html5 player (end) -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq)
                return;
            n = f.fbq = function () {
                n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)
                f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
                document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '171846299916686');
        fbq('track', "PageView");</script>
    <noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=171846299916686&ev=PageView&noscript=1"
         />
    </noscript>

    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/881822483/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
</body>
</html>