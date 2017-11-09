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
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <title> Excel từ A đến Z </title>
        <meta name="description" content="description">
        <meta name="author" content="Coralix Themes">

        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="https://lakita.vn/excel-tu-a-den-z.html" />
        <meta property="og:title" content="Excel từ A đến Z" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/268x150/hoc-excel-co-ban-excel-tu-a-den-z.png" />
        <meta property="og:description" content="Khóa học dành cho nhân viên hành chính văn phòng, kế toán, tài chính, ngân hàng. Hơn 2000 học viên tham gia, 78% hài lòng về sự hỗ trợ" />


<!--        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  1.9.1 -->
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

    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6035024735132&amp;cd[value]=0.00&amp;cd[currency]=VND&amp;noscript=1" /></noscript>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?php echo base_url() ?>public/e400/img/favicon.ico">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Fav and touch icons
        ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>public/e400/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="52x52" href="img/apple-touch-icon-57x57.png">

    <!-- Custom styles 
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/e400/css/responsiveslides.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>public/e400/css/animate-custom.css"   type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url() ?>public/e400/css/font-awesome.min.css"   type="text/css" media="screen"/>

    <link rel="stylesheet" href="<?php echo base_url() ?>public/e400/css/style1.css"            type="text/css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url() ?>public/e400/css/style.css"            type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/e400/css/newstyle.css">
    <!-- <link rel="stylesheet" href="css/style-green.css"            type="text/css" media="screen"> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Media querys 
    ================================================== -->
    <link href="<?php echo base_url() ?>public/e400/css/media-queries.css" rel="stylesheet" media="screen">
    <!--[if IE 8 ]><link href="css/ie8.css" rel="stylesheet" media="screen"><![endif]-->

    <!-- Scripts Libs 
    ================================================== -->


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements 
        ================================================== -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

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
            }(document, 'script', 'facebook-jssdk'));
    </script>
    <header class="nav-down">
        <!-- Top Bar -->
        <div class="top">
            <div class="container">
                <a class="logo" href="./"><img src="<?php echo base_url() ?>public/e400/img/logo.png" alt="logo"></a>
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
        <div id="test"></div>
        <div class="container">
            <div class="row-fluid">            		
                <div class="curse-form-box  animated delay1 flipInX">
                    <div class="gr1">
                        <p style="color: #fff;text-align: center;line-height: 35px;font-size: 40px;margin-top:60px">KHÓA HỌC</p>

                        <h3 id="intro"><strong>EXCEL TỪ A ĐẾN Z NĂM 2017</strong>
                        </h3>
                        <p style="text-align: center;line-height: 35px;">Khóa học dành cho nhân viên hành chính văn phòng, kế toán, tài chính, ngân hàng</p>

                        <div align="center">
                            <a href="#noidungkhoahoc" class="btn btn-large btn-primary" style="margin: 10px; padding: 10px;border: none" >TÌM HIỂU THÊM</a>
                            <hr>
                            <a href="#dangky1" class="btn btn-large btn-primary" style="margin: 10px; padding: 10px;border: none" >ĐĂNG KÝ NGAY</a>
                        </div>
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
                    <img src="<?php echo base_url() ?>public/e400/img/brainstormex.png" alt="brainstormex"  class=" animated tada"/>
                </div>
            </div>
            <div class="span8">
                <h3 style="text-align: justify; line-height: 26pt; font-size: 14px">
                    <u><b>BẠN CÓ BIẾT:</b></u><br>❖ <span style="font-size: 20pt;font-weight: 600;">95%</span> nhân viên trong bộ phận <b>kế toán</b> và <b>tài chính</b> sử dụng Excel hàng ngày để phác thảo <b>kết quả tài chính, ngân sách, dự báo tài chính, kế hoạch sử dụng tài chính</b> để đưa ra những quyết định kinh doanh lớn.<br>
                    ❖ Phần lớn các Doanh Nghiệp tại Việt Nam không biết sử dụng Excel để <b>phân tích các dữ liệu kinh doanh về tiếp thị, phát triển sản phẩm, tài chính, nhân sự</b> vì chỉ dùng được <span style="font-size: 15pt;font-weight: 600;">10%</span> công dụng của phần mềm này.<br>
                    ❖ Theo một nghiên cứu ở Nhật Bản, <span style="font-size: 15pt;font-weight: 600;">86%</span> người được hỏi cho rằng kĩ năng sử dụng Excel là kĩ năng quan trọng trong việc <b>thăng tiến</b> tại doanh nghiệp
                </h3>
            </div>
        </div> 	
    </section>  
    <!--End Video List-->


    <!--Content Steps-->
    <section class="container steps generic-section">
        <div class="row-fluid">
            <div class="span12">
                <h2><span><em>Excel từ A đến Z</em> năm 2017</span></h2>
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
                    Mọi lúc, mọi nơi, với tài khoản sử dụng trong một năm. 85 video bài giảng thực tiễn + 200 bài tập thực hành + 50 bài viết chuyên môn/năm, kho tra cứu về excel với hơn 300 bài viết về hàm, lĩnh vực<span style="font-size: 13pt;font-weight: 600;"> kế toán, hành chính, nhân sự, ngân hàng, bảo hiểm</span>, giải đáp trong 68 giờ.    
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
                <img src="<?php echo base_url() ?>public/e400/img/GV-Dinh-hlinh.png" alt="mac" />
            </div>
            <div class="span7 text-left">
                <ul style="list-style-image: url('<?php echo base_url() ?>public/e400/img/tick.png');font-family: Roboto; font-size: 12px; margin-top: 25px">
                    <li><b>Giảng viên ĐINH HỒNG LĨNH – Trưởng phòng phát triển hệ thống Công ty cổ phần phát triển công nghệ BKIdex Group</b></li>
                    <li><b>4 năm kinh nghiệm trong giảng dạy và đào tạo trực tuyến E-learning</b></li>
                    <li><b>5 năm kinh nghiệm quản lý dự án công nghệ thông tin</b></li>
                    <li><b>8 năm kinh nghiệm áp dụng Tin học văn phòng trong công việc</b></li>
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
                <video height="100%"  src="<?php echo base_url() ?>public/e400/baiso25.mp4" type="video/mp4" 
                       id="player1"  
                       controls="controls" ></video>


            </div>
            <div class="span6">
               	<ul class="list-features">
                    <li>Làm chủ được công cụ Microsoft Excel và hiểu được nguyên lý cơ bản cốt lõi nhất để nâng cao trình độ và năng suất công việc.</li>
                    <li>Được tư vấn, giải đáp trực tiếp từ <b>chuyên gia 10 năm kinh nghiệm</b>.</li>
                    <li>Được thực hành trên 100 tình huống thực tiễn.</li>
                    <li>Được thực hành với hơn <strong>85</strong> Video hướng dẫn.</li>
                    <li>100 bài tập thực tiễn + 10 mẫu excel thực tiễn trong công việc.</li>
                    <li><b>Thăng tiến</b> vượt bậc và phát triển <b>kỹ năng cá nhân</b>.</li>
                    <li>Hỗ trợ 24/7 với đội ngũ trợ giảng tận tâm.</li>
                    <li>Được nhận 50 bài viết chuyên môn/năm.</li>
                    <li>Giải đáp trong 68 giờ.</li>
                    <li>Kho tra cứu về excel với hơn 300 bài viết về hàm, lĩnh vực <b>kế toán, hành chính, nhân sự, ngân hàng, bảo hiểm</b>.</li>
                    <li><b>Đặc biệt được tặng thêm khóa "18 thủ thuật excel".</b></li>
                </ul>
                <div align="center">
                    <a href="#dangky1" class="btn btn-large btn-primary">ĐĂNG KÝ NGAY</a>
                    <div id="noidungkhoahoc"></div>
                </div>
            </div>
        </div> 	
    </section>  
    <!--End Video List-->

    <!--learn-->
    <section class="container learn generic-section">

        <div class="row-fluid">
            <div class="span12">
                <h2 class="text-center"><span><em>Nội dung khóa Excel từ A đến Z</em></span></h2>
            </div>
        </div>
        <!-- nút nội dung khóa học -->
        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan1">
                Phần 1: Các thao tác cơ bản làm việc với Excel
            </button>
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan2">
                Phần 2: Formatting - Conditional Formatting trong Excel
            </button>
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan3">
                Phần 3: Các công cụ để xử lý dữ liệu (sort, filter,...)
            </button>
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan4">
                Phần 4: Công thức (Formula) trong excel
            </button>
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan5">
                Phần 5: Làm việc với ngày tháng trong excel
            </button>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan6">
                Phần 6: Các hàm tính toán thống kê (COUNT, SUM,...)
            </button>
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan7">
                Phần 7: Các hàm xử lý văn bản, chuỗi
            </button>
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan8">
                Phần 8: Các hàm tham chiếu trong excel
            </button>
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan9">
                Phần 9: Bí quyết in ấn trong Excel
            </button>
            <button type="button" class="hocphan" data-toggle="modal" data-target="#phan10">
                Phần 10: Các kiến thức Excel nâng cao khác
            </button>
        </div>
        <!-- hết phần nút nội dung khóa học -->

        <!-- nội dung từng phần khóa học -->


        <div class="modal fade" id="phan1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 1: Các thao tác cơ bản làm việc với Excel</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 1:</span> Excel có các định dạng File nào?</li>
                            <li>  <span class="bold">Bài 2:</span> Những thao tác cơ bản với Sheets</li>
                            <li>  <span class="bold">Bài 3:</span> Cách chèn dòng nhanh trong bảng tính</li>
                            <li>  <span class="bold">Bài 4:</span> 10 phím tắt hữu dụng trong Excel</li>
                            <li>  <span class="bold">Bài 5:</span> Cách di chuyển nhanh trong file excel với Ctrl</li>
                            <li>  <span class="bold">Bài 6:</span> Tạo liên kết trong File excel như thế nào? (Hyperlink)</li>
                            <li>  <span class="bold">Bài 7:</span> Bảo mật cho File Excel và vùng dữ liệu</li>
                            <li>  <span class="bold">Bài 8:</span> Tìm kiếm và các công cụ kèm theo trong Excel</li>
                            <li>  <span class="bold">Bài 9:</span> Không phải gõ nhiều bằng cách sử dụng chữ viết tắt</li>
                            <li>  <span class="bold">Bài 10:</span> Bạn có biết: một cell trong bảng tính chứa những gì không?</li>
                            <li>  <span class="bold">Bài 11:</span> Copy và link dữ liệu từ Excel qua Word</li>

                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 2: Formatting - Conditional Formatting trong Excel</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 12:</span> Các định dạng cơ bản trong Excel</li>
                            <li>  <span class="bold">Bài 13:</span> Căn lề mặc định cho các kiểu dữ liệu trong Excel </li>
                            <li>  <span class="bold">Bài 14:</span> Tùy chỉnh thoải mái hiển thị cho ô với Custom Formatting</li>
                            <li>  <span class="bold">Bài 15:</span> Một số có thể được hiển thị theo kiểu nào?</li>
                            <li>  <span class="bold">Bài 16:</span> Cách sử dụng chổi quét định dạng Format Painter</li>
                            <li>  <span class="bold">Bài 17:</span> Ba kiểu trộn ô thông dụng (Merge cell)</li>
                            <li>  <span class="bold">Bài 18:</span> Freeze Pannel: Cố định dòng và cột</li>
                            <li>  <span class="bold">Bài 19:</span> Cách tạo đường gạch chéo trong ô Excel</li>
                            <li>  <span class="bold">Bài 20:</span> Cơ bản về Conditional Formating (định dạng có điều kiện)</li>
                            <li>  <span class="bold">Bài 21:</span> Cách tô màu xen kẽ giữa các dòng dùng Table </li>
                            <li>  <span class="bold">Bài 22:</span> Sử dụng Formatting để cảnh báo dữ liệu nhập trùng </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 3: Các công cụ để xử lý dữ liệu (sort, filter,...)</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 23:</span> Sắp xếp (sorting): Ai chưa biết thì coi như chưa dùng Excel</li>
                            <li>  <span class="bold">Bài 24:</span> Lọc dữ liệu nâng cao trong Excel</li>
                            <li>  <span class="bold">Bài 25:</span> Có những khách hàng nào đã mua hàng?</li>
                            <li>  <span class="bold">Bài 26:</span> Thủ thuật để xóa dòng, cột dữ liệu trắng</li>
                            <li>  <span class="bold">Bài 27:</span> Chèn nhanh 1 dòng vào giữa các dòng trong bảng tính</li>
                            <li>  <span class="bold">Bài 28:</span> Kiểm soát dữ liệu với Data validation</li>
                            <li>  <span class="bold">Bài 29:</span> Tại sao nên sử dụng ô chọn?</li>
                            <li>  <span class="bold">Bài 30:</span> Xử lý dữ liệu Text với công cụ Text to columns</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 4: Công thức (Formula) trong excel</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 31 :</span> Cơ bản về Formula trong Excel</li>
                            <li>  <span class="bold">Bài 32:</span> Ví dụ để hiểu rõ địa chỉ tương đối, địa chỉ tuyệt đối</li>
                            <li>  <span class="bold">Bài 33:</span> Copy và paste: tưởng dễ mà nhiều thứ quá!</li>
                            <li>  <span class="bold">Bài 34:</span> Nhận diện 7 thông báo lỗi phổ biến trong excel</li>
                            <li>  <span class="bold">Bài 35:</span> Tùy chỉnh kết quả khi gặp lỗi với IFERROR</li>
                            <li>  <span class="bold">Bài 36:</span>  Làm thế nào để biết hợp đồng nào sắp hết hạn?</li>
                            <li>  <span class="bold">Bài 37:</span>  2 cách đánh số thứ tự trong excel</li>
                            <li>  <span class="bold">Bài 38:</span>  IF rồi lại IF: sao phải sợ hàm IF?</li>
                            <li>  <span class="bold">Bài 39:</span>  Một cách copy nhanh đến bất ngờ mà ít người biết</li>
                            <li>  <span class="bold">Bài 40:</span> Xử lý khi gặp lỗi Number Store As Text</li>
                            <li>  <span class="bold">Bài 41:</span> Format chẵn lẻ: tô màu xen kẽ các dòng</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 5: Làm việc với ngày tháng trong excel</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 42:</span>  Nhập đúng dữ liệu kiểu ngày tháng trong excel</li>
                            <li>  <span class="bold">Bài 43:</span>  Các hàm ngày tháng hay sử dụng trong Excel</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 6: Các hàm tính toán thống kê (COUNT, SUM,...)</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 44:</span> Tính tổng có 1 điều kiện - SUMIF</li>
                            <li>  <span class="bold">Bài 45:</span> Tính tổng có nhiều điều kiện - SUMIFS</li> 
                            <li>  <span class="bold">Bài 46:</span> SUMPRODUCT: đến lúc áp dụng toán học rồi</li>
                            <li>  <span class="bold">Bài 47:</span> Tính tổng có nhiều điều kiện dùng SUMPRODUCT</li>
                            <li>  <span class="bold">Bài 48:</span> Chia tiền ra các mệnh giá như máy ATM trong Excel</li>
                            <li>  <span class="bold">Bài 49:</span> Sử dụng hàm DSUM để tính tổng có điều kiện (hàm Database)</li>
                            <li>  <span class="bold">Bài 50:</span> Các hàm đếm cơ bản COUNT, COUNTA, COUNTBLANK</li>
                            <li>  <span class="bold">Bài 51:</span> COUNTIF: đếm có một điều kiện</li>
                            <li>  <span class="bold">Bài 52:</span> Đếm nhiều điều kiện với COUNTIFS</li>
                            <li>  <span class="bold">Bài 53:</span> Làm thế nào để không cho nhập trùng dữ liệu vào cột?</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 7:Các hàm xử lý văn bản, chuỗi</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 54:</span>  2 Cách ghép dữ liệu các cột trong Excel</li>
                            <li>  <span class="bold">Bài 55:</span> Các hàm chuyển đổi in hoa, thường</li>
                            <li>  <span class="bold">Bài 56:</span> Các hàm xử lý chuỗi cơ bản (LEFT, FIND,RIGHT,LEN, TRIM)</li>
                            <li>  <span class="bold">Bài 57:</span>  Viết hoa chữ cái đầu tiên: dễ mà đúng ko?</li>
                            <li>  <span class="bold">Bài 58:</span> Đừng nhớ công thức cut họ và tên thành họ, đệm và tên nhé!</li>
                            <li>  <span class="bold">Bài 59:</span> Công cụ</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 8: Các hàm tham chiếu trong excel</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 60:</span> Namerange: cách đặt tên cho vùng tham chiếu</li>
                            <li>  <span class="bold">Bài 61:</span>  Cách sử dụng hàm MATCH, INDEX</li>
                            <li>  <span class="bold">Bài 62:</span>  Cách áp dụng CHOOSE và OFFSET</li>
                            <li>  <span class="bold">Bài 63:</span> Cách nhanh để đảo ngược dữ liệu từ dưới lên trên</li>
                            <li>  <span class="bold">Bài 64:</span> Đâu là giá trị cuối cùng của dòng này?</li>
                            <li>  <span class="bold">Bài 65:</span>  Ngày này là thứ mấy trong tiếng Việt?</li>
                            <li>  <span class="bold">Bài 66:</span> Sao nhiều người lại sợ VLOOKUP?</li>
                            <li>  <span class="bold">Bài 67:</span> Một ví dụ hay gặp sử dụng VLOOKUP</li>
                            <li>  <span class="bold">Bài 68:</span>  Làm chủ HLOOKUP thật đơn giản</li>
                            <li>  <span class="bold">Bài 69:</span> Casestudy: Đừng tốn 3 ngày khi có thể làm trong 5 phút</li>
                            <li>  <span class="bold">Bài 70:</span> Ngẫu hứng: Tạo ra bảng dữ liệu ngẫu nhiên tùy thích trong 3 phút</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 9: Bí quyết in ấn trong Excel</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 71:</span> Căn chỉnh trang in và in ấn trong Excel</li>
                            <li>  <span class="bold">Bài 72:</span>  Lặp lại tiêu đề khi in trong excel</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="phan10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
             style="width: 860px; margin-left: 232px; background: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><strong>Phần 10: Các kiến thức Excel nâng cao khác</strong></h4>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li>  <span class="bold">Bài 73:</span> Sự kỳ diệu của công thức mảng - Array Formula</li>
                            <li>  <span class="bold">Bài 74:</span>  Ví dụ sử dụng công thức mảng và SUMPRODUCT</li>
                            <li>  <span class="bold">Bài 75:</span> Các thành phần cơ bản của Biểu đồ trong excel</li>
                            <li>  <span class="bold">Bài 76:</span> Cách vẽ biểu đồ hình cột</li>
                            <li>  <span class="bold">Bài 77:</span> Vẽ biểu đồ hình tròn</li>
                            <li>  <span class="bold">Bài 78:</span> Có vẽ được 2 biểu đồ trên cùng 1 đồ thị không?</li>
                            <li>  <span class="bold">Bài 79:</span>  Sử dụng Subtotal có dễ không?</li>
                            <li>  <span class="bold">Bài 80:</span> Tạo Subtotal cho nhiều cột</li>
                            <li>  <span class="bold">Bài 81:</span>  Làm báo cáo nhanh với Pivot Table</li>
                            <li>  <span class="bold">Bài 82:</span>  VBA là gì? Chạy được nó có dễ không?</li>
                            <li>  <span class="bold">Bài 83:</span> Cách tạo và sử dụng Add-Ins trong Excel</li>
                            <li>  <span class="bold">Bài 84:</span> Ứng dụng VBA: chuyển số thành chữ</li>
                            <li>  <span class="bold">Bài 85:</span> Bonus: Hướng dẫn lập file kế hoạch, action plan trên excel</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- hết nội dung từng phần khóa học -->

    </section>  
    <!--learn-->


    <!--Testimonials-->
    <section class="testimonials">
        <div class="container">
            <div class="row-fluid">
                <ul class="list-testimonials" id="slider">
                    <li>
                        <img src="<?php echo base_url() ?>public/e400/img/img-avatar-5.png" alt="testimonial avatar" />
                        <p class="comment">"Học xong thì phải hành. Khóa học ứng dụng Excel thật tuyệt, thời gian xử lý dữ liệu của khách hàng để đưa vào hệ thống tra cứu của mình đã giảm từ 2h xuống chỉ còn 30 phút.Excel quá tuyệt vời và dùng được nó càng là cảm giác  tuyệt vời hơn."</p>
                        <p class="date">Bạn DƯƠNG MINH TÚ - <span>Lập trình viên</span></p>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>public/e400/img/img-avatar-4.png" alt="testimonial avatar" />
                        <p class="comment">"Mình cảm thấy phương thức giảng dạy của bài học rất chuẩn, sáng tạo và những ví dụ cũng rất gần với thực tế. Khóa học đã mang lại cho những người đi làm như mình cảm thấy rất thích thú với công việc hơn và càng kích thích sự tìm tòi, khám phá về MS.
                            Còn về chất lượng dịch vụ thì trên cả tuyệt vời, có lẽ như là dịch vụ 24/24 vậy. Hầu như từ lúc mình biết đến Lakita thì những thắc mắc của mình luôn được tháo gỡ một cách nhanh chóng và nhiệt tình từ các anh. Điều đó càng làm mình thêm tin tưởng và thán phục."</p>
                        <p class="date">Dieu Nguyen (Jenny) - <span> Revenue Analyst InterContinental Danang Sun Peninsula Resort</span></p>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>public/e400/img/img-avatar-1.png" alt="testimonial avatar" />
                        <p class="comment">"Sau khi học Excel bài bản, khoá học đã giúp tôi quản lý khách hàng kế toán tốt hơn, giúp Elink của tôi tăng gấp đôi năng suất"</p>
                        <p class="date">Ông Phạm Minh Tuấn - <span>CEO Dương Quang</span></p>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>public/e400/img/img-avatar-2.png" alt="testimonial avatar" />
                        <p class="comment">Chương trình học rất hay và bổ ích. Nhờ có khóa học mà em biết được nhiều vấn đề mình đang gặp phải.</p>
                        <p class="date">Nguyễn Thị Thúy Hằng – <span>  Cty Cổ Phần Đào Tạo và Phát Triển Kinh Doanh Salesmaster – Học viên lớp Excel Chuyên Sâu số 16</span></p>
                    </li>
                    <li>
                        <img src="<?php echo base_url() ?>public/e400/img/img-avatar-3.png" alt="testimonial avatar" />
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
                <img src="<?php echo base_url() ?>public/e400/img/anh_lop_hoc_02.png"  />
            </div>
        </div> 	
        <div id="dangky1"></div>
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
                                        <input id="tinh" type="text" name="tinh" class="LeadPanel_form_company" placeholder="Tỉnh thành" value="NO_PARAM"/>
                                    </div>

                                    <div class="wrap-icon-district hidden">
                                        <input id="quan" type="text" name="quan" class="LeadPanel_form_company" placeholder="Quận huyện" value="NO_PARAM" />
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
    <div style="margin-top: 17px; margin-left: 36px;" class="fb-like" expr:data-href='data:post.canonicalUrl'   data-send="true" data-width="90%" data-show-faces="true"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="fb-comments" data-href="https://lakita.vn/excel-tu-a-den-z.html" 
                     data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
            </div>
        </div>
    </div>



    <!--Brands-->
    <!-- <section class="brands" id="dangky">
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



    <!-- <div class="wrap_fixed_bottom hidden-xs">
        <div class="tag_hotline"><span>Hotline</span><span class="arrow_hotline"> &nbsp;</span></div>

        <div class="main_nav_hotline site">
            <ul style="display: inline-flex;  ">
                <li><img alt="" src="http://media.bizwebmedia.net/Sites/105084/data/banners/call.png?0" style="width: 16px; height: 16px;    vertical-align: text-top;">&nbsp;1900 6361 95 - 04 7306 2468</li>
                <li><img alt="" src="http://media.bizwebmedia.net/Sites/105084/data/banners/fb.jpg?0" style="width: 16px; height: 16px;    vertical-align: text-top;">&nbsp;<a style="    color: #232323;" href="https://www.facebook.com/meovathuthuatexcel" target="_blank">FANPAGE LÀM CHỦ EXCEL</a></li>
            </ul>
            <ul style="display: inline-flex;     width: 300px; ">
                <div class="fb-like" data-href="https://www.facebook.com/meovathuthuatexcel" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
            </ul>
        </div>
        <div class="nttkm hidden-xs" style="width:250px;float:right;">
            <div class="nttkm-title">
                <span class="show_dkntt" style="padding-right:0px; color: #fff;font-weight: bold;font-size: 14px;">
                    <img alt="" src="http://media.bizwebmedia.net/Sites/105084/data/banners/gift_mocskin.png" style="width: 16px; height: 16px;    vertical-align: text-top;">
                    <a style="    color: #fff;" href="#dangky">
                        ĐĂNG KÝ NGAY 
                    </a>
                </span>
            </div>
        </div>
    </div> -->

    <div style="position: fixed; bottom: 0; width: 100%; z-index: 100000;">
        <!--        <a href="#register_area" title="Đăng ký ngay!">
                    <img src="https://lakita.vn/styles/images/email/rgt-now.png" alt="Đăng ký ngay!" id="img-rgt" style="float: right;">
                </a>-->
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

    <!-- Bootstrap.js-->

    <script src="<?php echo base_url() ?>public/e400/js/bootstrap.js"></script>

    <!-- Video Responsive-->
    <script src="<?php echo base_url() ?>public/e400/js/jquery.fitvids.min.js" type="text/javascript"></script>

    <!--Video Responsive-->
    <script src="<?php echo base_url() ?>public/e400/js/jquery.placeholder.min.js" type="text/javascript"></script>

    <!-- Slider --> 
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/responsiveslides.min.js"></script>

    <!-- Custom js -->
    <script src="<?php echo base_url() ?>public/e400/js/jquery-func.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>public/e400/js/jquery.plugin.min.js"></script>
    <script src="<?php echo base_url() ?>public/e400/js/jquery.countdown.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS 
   <script type="text/javascript" src="js/bootstrap.js"></script>-->

    <!-- SMOOTH SCROLLING FIX -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/smoothscroll.js"></script>

    <!-- PARALLAX -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/parallax.js" id="parallax-change"></script>

    <!-- HEADROOM -->
    <script type="text/javascript"  src="<?php echo base_url() ?>public/e400/js/headroom.min.js"></script>      
    <script type="text/javascript"  src="<?php echo base_url() ?>public/e400/js/jQuery.headroom.js"></script>

    <!-- VIEWPORT DETECTION -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/jquery.inview.min.js"></script>

    <!-- CAROUSEL -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/owl.carousel.min.js"></script>

    <!-- COUTNUP -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/countUp.min.js"></script>

    <!-- FORM VALIDATION -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/validator.js"></script>

    <!-- IMAGE ZOOM - COLORBOX JS-->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/jquery.colorbox-min.js"></script>

    <!--CUSTOM THEME SCRIPTS & SETTINGS -->
    <script type="text/javascript" src="<?php echo base_url() ?>public/e400/js/alive.scripts.js"></script>
    <script src="<?php echo base_url() ?>public/e400/lakita/js/jquery.form.js" type="text/javascript"></script>
    <script type="text/javascript"  src="<?php echo base_url() ?>public/e400/js/tracking.js"></script>
    <script type="text/javascript"  src="<?php echo base_url() ?>public/e400/js/main.js"></script>
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
        // $('#player1').attr('autoplay', 'true');
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
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=171846299916686&ev=PageView&noscript=1"
                   /></noscript>

    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/881822483/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <!-- Google Code for E400 All Visitors -->
    <!-- Google Code for Remarketing Tag -->
    <!--------------------------------------------------
    Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
    --------------------------------------------------->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 845378743;
        var google_conversion_label = "J_8UCN_F23MQt-mNkwM";
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/845378743/?value=1.00&amp;label=J_8UCN_F23MQt-mNkwM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
</body>
</html>