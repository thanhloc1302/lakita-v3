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
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <title class="title-site" lp-id="59c484ed701897b41e8a9df4">Trọn bộ hướng dẫn lập báo cáo tài chính năm 2017</title>
        <meta http-equiv="Cache-control" content="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta name="description" content="undefined">
        <meta name="keywords" content="undefined">
        <meta name="viewport" id="lp-viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">   
        <script>
            function ladiViewport() {
                var width = (window.outerWidth > 0) ? window.outerWidth : screen.width;
                if (width > 3000) {
                    width = width / 10;
                }
                var content = "width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0";
                var zoom = 1;
                if (width < 768) {
                    zoom = width / 375;
                    content = "width=375, initial-scale=" + zoom + ", maximum-scale=" + zoom + ",minimum-scale=" + zoom;
                } else {
                    if (width < 960) {
                        zoom = width / 960;
                        content = "width=960, initial-scale=" + zoom + ", maximum-scale=" + zoom + ",minimum-scale=" + zoom;
                    }
                }
                var meta = document.getElementsByTagName("meta");
                for (var i = 0; i < meta.length; i++) {
                    if (meta[i].name.toLowerCase() == "viewport") {
                        meta[i].content = content;
                    }
                }
            }
            ;
            ladiViewport();
        </script>
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="https://lakita.vn/tron-bo-lap-bao-cao-tai-chinh-2017.html" />
        <meta property="og:title" content="Trọn bộ hướng dẫn lập báo cáo tài chính năm 2017" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/268x150/tron-bo-huong-dan-lap-bao-cao-tai-chinh-nam-2016.png" />
        <meta property="og:description" content="Khóa học được thiết kế dành cho kế toán đi làm và máy tính có kết nối internet" />

        <script>
            function reveal() {
                for (var a = 0; a < view_elements.length; a++) {
                    var b = 0,
                            c = view_elements[a];
                    do
                        isNaN(c.offsetTop) || (b += c.offsetTop);
                    while (c = c.offsetParent);
                    var d = window.pageYOffset,
                            e = window.innerHeight,
                            c = view_elements[a];
                    window.pageXOffset, window.innerWidth;
                    b >= d && d + e >= b && (view_elements[a].classList.remove("hide-background-image"), view_elements.splice(a, 1), a--)
                }
            }

            function qazy_list_maker() {
                for (var a = document.getElementsByClassName("hide-background-image"), b = 0; b < a.length; b++)
                    view_elements.push(a[b])
            }
            var view_elements = [];
            window.addEventListener("resize", reveal, !1), window.addEventListener("scroll", reveal, !1);
            var intervalObject = setInterval(function () {
                qazy_list_maker()
            }, 50);
            window.addEventListener("load", function () {
                clearInterval(intervalObject), qazy_list_maker(), reveal();
            }, !1);
        </script>
        <link rel="shortcut icon" type="image/png" href="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/logo-lakita-2000px-01-1506136834948.png" />
        <?php $this->load->view('landingpage/kt4002/css'); ?>
        <?php include_once("plugin/analyticstracking.php") ?>
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
        <div class="ladi-wraper-page">
            <div id="SECTION9" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="IMAGE187" class="widget-element widget-snap ladi-drop wow bounceInLeft animated" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d/59c0798c55a6f2f159d40cd8/logo-lakita-w-1506397011966.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE513" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION472" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">Ý KIẾN CỦA CHUYÊN GIA</span>&nbsp;</h5> </div>
                    <div id="HEADLINE514" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION472" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);" color="">CẢM NHẬN CỦA HỌC VIÊN</span></h5> </div>
                    <div id="HEADLINE515" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION42" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5">GIẢNG VIÊN</h5> </div>
                    <div id="LINEVERTICAL516" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="LINEVERTICAL517" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="LINEVERTICAL518" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE519" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION36" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">TẠI</span> <span style="color: rgb(255, 255, 255);">SAO CHỌN</span> <span style="color: rgb(255, 255, 255);">LAKITA</span></h5> </div>
                    <div id="LINEVERTICAL520" class="widget-element widget-snap" lp-type="linevertical" lp-lang="LINEVERTICAL" lp-display="block">
                        <div class="widget-content">
                            <div class="linevertical"></div>
                        </div>
                    </div>
                    <div id="HEADLINE524" class="widget-element widget-snap wow bounceInDown animated" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href="">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">NỘI DUNG KHÓA HỌ</span><span style="color: rgb(229, 213, 213);">C</span></h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div id="SECTION2" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="PARAGRAPH4" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                    <p class="widget-content" lp-node="p"></p>
                                </div>
                                <div id="HEADLINE7" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">VỚI HƠN&nbsp;<span style="font-weight: bold;"><span style="color: rgb(3, 169, 244);">3000</span> </span>HỌC VIÊN TRÊN TOÀN QUỐC&nbsp;<br><br></h2> </div>
                                <div id="HEADLINE5" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">học mọi lúc mọi nơi</h1> </div><a id="BUTTON454" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION341" lp-action-type="page" lp-target="" href=""><span class="widget-content">BẮT ĐẦU NGAY</span> </a></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="SECTION507" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="HEADLINE509" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">TRỌN BỘ HƯỚNG DẪN LẬP</h2> </div>
                                <div id="HEADLINE510" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">báo cáo tài chính 2017</h1> </div>
                                <div id="PARAGRAPH508" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                    <p class="widget-content" lp-node="p">Khóa học dành cho nhân viên hành chính văn phòng kiêm kế toán trong doanh nghiệp vừa, nhỏ.</p>
                                </div>
                                <div id="LINE526" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                    <div class="widget-content">
                                        <div class="line"></div>
                                    </div>
                                </div><a id="BUTTON511" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href=""><span class="widget-content">TÌM HIỂU NGAY</span> </a></div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="item">

                        <div id="SECTION502" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="HEADLINE504" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">VỀ CÁC KHÓA HỌC&nbsp;<span style="font-weight: bold;">KẾ TOÁN </span>TẠI LAKITA</h2> </div>
                                <div id="HEADLINE505" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">học viên <span style="font-weight: bold;">hài lòng</span>&nbsp;<br></h1> </div><a id="BUTTON506" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                                <div id="HEADLINE525" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;">93%</span></h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="SECTION527" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="HEADLINE528" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">VỚI <span style="font-weight: bold; color: rgb(3, 169, 244);">BÁO CÁO TÀI CHÍNH</span> CỦA MÌNH LÀM<br>TẠI DOANH NGHIỆP&nbsp;</h2> </div>
                                <div id="HEADLINE529" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">học viên<span style="font-weight: bold;"> <span style="color: rgb(0, 176, 255);">tự tin HƠN</span></span></h1> </div><a id="BUTTON530" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                                <div id="HEADLINE531" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;">82%</span></h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div id="SECTION527" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                            <div class="container">
                                <div id="HEADLINE528" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2">VỚI <span style="font-weight: bold;">BÁO CÁO TÀI CHÍNH</span> CỦA MÌNH LÀM<br>TẠI DOANH NGHIỆP&nbsp;</h2> </div>
                                <div id="HEADLINE529" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h1 class="widget-content" lp-node="h1">học viên<span style="font-weight: bold;"> tự tin HƠN</span></h1> </div><a id="BUTTON530" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION94" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                                <div id="HEADLINE531" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                    <h2 class="widget-content" lp-node="h2"><span style="font-weight: bold;"><span style="color: rgb(255, 255, 255);">82%</span></span></h2> </div>
                            </div>
                            <div class="ladi-widget-overlay"></div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>



            <div id="SECTION472" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE475" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="color: rgb(3, 169, 244);">Ý KIẾN CỦA CHUYÊN GIA</span></h2> </div>
                    <div id="HEADLINE476" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6">Tiến sĩ HOÀNG QUANG TRUNG</h6> </div>
                    <div id="HEADLINE477" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h6 class="widget-content" lp-node="h6"></h6> </div>
                    <div id="BOX480" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH633" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Tôi đánh giá cao sự khác biệt của khóa học này, bài giảng rất chi tiết và tận tình sẽ giúp người học nắm được và làm được một báo cáo tài chính hoàn thiện và tổng thể</p>
                    </div>
                    <div id="LINE634" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE673" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Giám đốc Công ty DV kế toán Việt Nam - VINAFAS</h5> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>

            <div id="SECTION754" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block" lp-ani="wow pulse animated">
                <div class="container">
                    <div id="HEADLINE755" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="color: rgb(3, 169, 244);">CẢM NHẬN HỌC VIÊN</span></h2> </div>
                    <div id="PARAGRAPH756" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="h6">Chúng tôi nỗ lực mỗi ngày để mang đến cho các bạn những khóa học kế toán tốt nhất !</p>
                    </div>
                    <a id="BUTTON770" class="widget-element widget-snap style-1 ladi-drop" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION341" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> 
                    </a>


                    <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators" style="z-index: 10000; bottom: 0px">
                            <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div id="SECTION678" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block" lp-ani="wow pulse animated">
                                    <div id="GROUP774" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                        <div class="widget-content">
                                            <div id="HEADLINE757" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP774" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">Kế toán&nbsp;</h6> </div>
                                            <div id="SHAPE758" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP774" lp-display="block">
                                                <div class="widget-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                                                    <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="PARAGRAPH768" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP774" lp-display="block">
                                                <p class="widget-content" lp-node="p">Khóa học thật sư bổ ích, qua khóa học này tôi đã học được rất nhiều kinh nghiệm trong lĩnh vực kế toán.</p>
                                            </div>
                                            <div id="HEADLINE771" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP774" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">Vũ Thị Kim Nga</h6> </div>
                                            <div id="BOX772" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP774" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="GROUP775" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                        <div class="widget-content">
                                            <div id="BOX759" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP775" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="HEADLINE760" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP775" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">Công ty cổ phần đầu tư&nbsp; và xây dựng Lạc Hồng</h6> </div>
                                            <div id="SHAPE761" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP775" lp-display="block">
                                                <div class="widget-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                                                    <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div id="HEADLINE767" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP775" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">Lê Thị Nhàn</h6> </div>
                                            <div id="PARAGRAPH769" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP775" lp-display="block">
                                                <p class="widget-content" lp-node="p">Đầu tiên tôi xin gửi lời cảm ơn tới giảng viên Phạm Thị Nhung trong thời gian qua đã quan tâm, nhiệt tình hướng dẫn và giảng dạy cho tôi. Tôi đã tiếp thu được nhiều kiến thức bổ ích phục vụ cho việc làm hiện tại ở doanh nghiệp của mình. Bài giảng rõ ràng, giảng viên thân thiện giảng dạy dễ hiểu , tiếp thu kiến thức nhanh. Hy vọng trung tâm sẽ mở rộng để có nhiều học viên mới ra trường sẽ tiếp cận thực tế nhanh và dễ dàng kiếm việc</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="GROUP776" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                        <div class="widget-content">
                                            <div id="BOX762" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP776" lp-display="block">
                                                <div class="widget-content"></div>
                                                <div class="ladi-widget-overlay"></div>
                                            </div>
                                            <div id="PARAGRAPH763" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP776" lp-display="block">
                                                <p class="widget-content" lp-node="p">Tôi cảm thấy tốt và tôi nhận được những thông tin hữu ích mà mình mong muốn</p>
                                            </div>
                                            <div id="HEADLINE764" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP776" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6"><span style="color: rgb(3, 169, 244);">Nguyễn Thị</span> <span style="color: rgb(3, 169, 244);">Hằng</span></h6> </div>
                                            <div id="HEADLINE765" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP776" lp-display="block">
                                                <h6 class="widget-content" lp-node="h6">Chuyên viên kế toán tại Công ty cổ phần thương mại và vận tải Đông Hải</h6> </div>
                                            <div id="SHAPE766" class="widget-element widget-snap wow pulse animated" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP776" lp-display="block">
                                                <div class="widget-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                                                    <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div id="SECTION678" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block" lp-ani="wow pulse animated">
                                    <div class="container">
                                        <div id="GROUP713" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                            <div class="widget-content">
                                                <div id="HEADLINE681" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP713" lp-display="block">
                                                    <h6 class="widget-content" lp-node="h6">LƯU TUẤN ANH</h6> </div>
                                                <div id="HEADLINE682" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP713" lp-display="block">
                                                    <h6 class="widget-content" lp-node="h6">Nhân viên văn phòng - Ngân hàng TMCP Đại Chúng Việt Nam</h6> </div>
                                                <div id="SHAPE683" class="widget-element widget-snap wow pulse animated" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP713" lp-display="block">
                                                    <div class="widget-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                                                        <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div id="BOX692" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP713" lp-display="block">
                                                    <div class="widget-content"></div>
                                                    <div class="ladi-widget-overlay"></div>
                                                </div>
                                                <div id="PARAGRAPH694" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP713" lp-display="block">
                                                    <p class="widget-content" lp-node="p">Giảng viên hỗ trợ nhiệt tình, giảng dạy dễ hiểu, kiến thức mang tính thực tế, ứng dụng cao trong toán/tài chính của ngân hàng.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="GROUP714" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                            <div class="widget-content">
                                                <div id="BOX684" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP714" lp-display="block">
                                                    <div class="widget-content"></div>
                                                    <div class="ladi-widget-overlay"></div>
                                                </div>
                                                <div id="HEADLINE685" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP714" lp-display="block">
                                                    <h6 class="widget-content" lp-node="h6">Kế toán tại Công ty TNHH sản xuất, thương mại, dịch vụ Vĩnh Xuyên</h6> </div>
                                                <div id="SHAPE686" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP714" lp-display="block">
                                                    <div class="widget-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                                                        <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div id="HEADLINE693" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP714" lp-display="block">
                                                    <h6 class="widget-content" lp-node="h6">Phạm Thị Hải</h6> </div>
                                                <div id="PARAGRAPH695" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP714" lp-display="block">
                                                    <p class="widget-content" lp-node="p">Buổi học nhiều ý nghĩa, giúp em học hỏi được nhiều kinh nghiệm thực tế giúp ích cho doanh nghiệp của mình</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="GROUP715" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                                            <div class="widget-content">
                                                <div id="BOX687" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP715" lp-display="block">
                                                    <div class="widget-content"></div>
                                                    <div class="ladi-widget-overlay"></div>
                                                </div>
                                                <div id="PARAGRAPH688" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP715" lp-display="block">
                                                    <p class="widget-content" lp-node="p">Khóa học thật sự có ý nghĩa. Nó giúp tôi củng cố thêm kiến thức về kế toán</p>
                                                </div>
                                                <div id="HEADLINE689" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP715" lp-display="block">
                                                    <h6 class="widget-content" lp-node="h6"><span style="color: rgb(3, 169, 244);">Nguyễn Thị Huyền</span></h6> </div>
                                                <div id="HEADLINE690" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP715" lp-display="block">
                                                    <h6 class="widget-content" lp-node="h6">Công ty TNHH TM xuất nhập khẩu quốc tế Nam Trung</h6> </div>
                                                <div id="SHAPE691" class="widget-element widget-snap wow pulse animated" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP715" lp-display="block">
                                                    <div class="widget-content">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1536 1896.0833" fill="rgba(3,169,244,1)">
                                                        <path d="M256 1344q0-26-19-45t-45-19-45 19-19 45 19 45 45 19 45-19 19-45zm1152-576q0-51-39-89.5t-89-38.5H928q0-58 48-159.5t48-160.5q0-98-32-145t-128-47q-26 26-38 85t-30.5 125.5T736 448q-22 23-77 91-4 5-23 30t-31.5 41-34.5 42.5-40 44-38.5 35.5-40 27-35.5 9h-32v640h32q13 0 31.5 3t33 6.5 38 11 35 11.5 35.5 12.5 29 10.5q211 73 342 73h121q192 0 192-167 0-26-5-56 30-16 47.5-52.5t17.5-73.5-18-69q53-50 53-119 0-25-10-55.5t-25-47.5q32-1 53.5-47t21.5-81zm128-1q0 89-49 163 9 33 9 69 0 77-38 144 3 21 3 43 0 101-60 178 1 139-85 219.5t-227 80.5H960q-96 0-189.5-22.5T554 1576q-116-40-138-40H128q-53 0-90.5-37.5T0 1408V768q0-53 37.5-90.5T128 640h274q36-24 137-155 58-75 107-128 24-25 35.5-85.5T712 145t62-108q39-37 90-37 84 0 151 32.5T1117 134t35 186q0 93-48 192h176q104 0 180 76t76 179z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ladi-widget-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>

            <div id="SECTION42" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE43" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">NGƯỜI ĐỒNG HÀNH CÙNG BẠN LÀ AI ?</h3> </div>
                    <div id="HEADLINE287" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3">PHẠM THỊ NHUNG</h3> </div>
                    <div id="PARAGRAPH285" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">Đạt chứng chỉ kế toán quốc tế CAT.</p>
                    </div>
                    <div id="LINE286" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE290" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(3, 169, 244);" color="">GIẢNG</span> <span style="color: rgb(3, 169, 244);" color="">VIÊN</span></h5> </div>
                    <div id="HEADLINE532" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">Kế toán tổng hợp tại chi nhánh công ty TNHH Dịch vụ Thực phẩm và Giải khát Cánh Diều Xanh, thuộc tập đoàn Tập đoàn Liên Thái Bình Dương (Imex Pan Pacific Group).</h5> </div>
                    <div id="HEADLINE533" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5">5 năm kinh nghiệm ở vị trí kế toán tổng hợp kiêm phụ trách toàn bộ mảng thuế.</h5> </div>
                    <div id="SHAPE534" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE535" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE536" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="BOX283" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="BOX537" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content"></div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION547" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="HEADLINE548" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block" lp-action-link="POPUP212" lp-action-type="popup" lp-target="" href="">
                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 176, 255);" color="">BẠN BỎ LỠ GÌ KHI KHÔNG THAM GIA KHÓA HỌC NÀY ?</span></h4> </div>
                    <div id="LISTOP549" class="widget-element widget-snap widget-dragg" lp-type="listop" lp-editor="true" lp-lang="LISTOP" lp-display="block">
                        <ol class="widget-content">Tăng kỹ năng trong công việc, học tập&nbsp;
                            <div>Cơ hội thăng tiến và phát triển nghề nghiệp kế toán</div>
                            <div>46 video bài giảng hướng dẫn chi tiết với 9h học online</div>
                            <div>Thầy Cô trực tiếp trả lời thắc mắc của&nbsp;<span style="background-color: rgba(255, 255, 255, 0);">học viên&nbsp;</span></div>
                            <div>Được hỗ trợ thường xuyên với đội ngũ trợ giảng chuyên nghiệp&nbsp;</div>
                            <div>Hướng dẫn lập đúng và 08 bước kiểm tra Bảng cân đối phát sinh</div>
                        </ol>
                    </div>
                    <div id="YOUTUBE550" class="widget-element widget-snap" lp-type="videoyoutube" lp-lang="YOUTUBE" lp-autoplay="1" lp-display="block">
                        <iframe class="widget-content" src="https://www.youtube.com/embed/UPkqH3VV7jc?rel=0&amp;showinfo=1" frameborder="0" allowfullscreen=""></iframe>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="SHAPE566" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE567" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE568" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE569" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE570" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE571" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1408 1896.0833" fill="rgba(3,169,244,1)">
                            <path d="M1384 927L56 1665q-23 13-39.5 3T0 1632V160q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP212" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" lp-ani="wow pulse animated" style="display: none;">
                <div class="container">
                    <div id="PARAGRAPH216" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p">
                            <br>
                        </p>
                    </div>
                    <div id="IMAGE675" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d/59c0798c55a6f2f159d40cd8/popip2-1506090959037.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION94" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP248" class="widget-element widget-snap widget-group wow fadeInLeftBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX249" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP248" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE250" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 3:</span></h4> </div><a id="BUTTON251" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="_blank" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a>
                                    <div id="HEADLINE252" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập bảng cân đối kế toán</span></h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX253" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP248" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP262" class="widget-element widget-snap widget-group wow fadeInRightBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX267" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP262" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX263" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP262" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE264" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 6:</span></h4> </div><a id="BUTTON265" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="_blank" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a>
                                    <div id="HEADLINE266" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập thuyết minh báo cáo tài chính</span></h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX676" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP262" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP282" class="widget-element widget-snap widget-group wow fadeInLeftBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX275" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP282" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE276" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 5:</span></h4> </div>
                                    <div id="HEADLINE277" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập báo cáo lưu chuyển tiền tệ</span></h5> </div><a id="BUTTON278" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="_blank" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX279" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP282" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP453" class="widget-element widget-snap widget-group wow fadeInLeftBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX218" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP453" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX118" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP453" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE119" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 1:</span></h4> </div>
                                    <div id="HEADLINE120" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">08 nhiệm vụ kế toán cần thực hiện tại thời điểm cuối kỳ</span></h5> </div><a id="BUTTON205" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="_blank" href=""><span class="widget-content">CHI TIẾT</span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX777" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP453" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div><a id="BUTTON471" class="widget-element widget-snap style-1 ladi-drop wow bounce animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="SECTION171" lp-action-type="page" lp-target="" href=""><span class="widget-content">ĐĂNG KÝ NGAY</span> </a>
                    <div id="GROUP254" class="widget-element widget-snap widget-group wow fadeInRightBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX243" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP254" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE244" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 4:</span></h4> </div>
                                    <div id="HEADLINE245" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập báo cáo kết quả               kinh doanh</span></h5> </div><a id="BUTTON246" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="_blank" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX247" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP254" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE213" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"></h3> </div>
                    <div id="HEADLINE95" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"><span style="color: rgb(3, 169, 244);" color="">NỘI DUNG KHÓA HỌC</span></h3> </div>
                    <div id="GROUP538" class="widget-element widget-snap widget-group wow fadeInRightBig animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX229" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP538" lp-display="block">
                                <div class="widget-content">
                                    <div id="HEADLINE230" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h4 class="widget-content" lp-node="h4"><span style="color: rgb(0, 0, 0);">CHƯƠNG 2:</span></h4> </div><a id="BUTTON232" class="widget-element widget-snap style-1 ladi-drop wow pulse animated" lp-type="button" lp-lang="BUTTON" lp-background="button" lp-display="table" lp-action-link="POPUP212" lp-action-type="popup" lp-target="_blank" href=""><span class="widget-content"><span style="color: rgb(3, 169, 244);">CHI TIẾT</span></span> </a>
                                    <div id="HEADLINE231" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(0, 0, 0);">Hướng dẫn lập và 09 bước kiểm tra bảng Cân đối phát sinh</span>&nbsp;</h5> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX233" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP538" lp-display="block">
                                <div class="widget-content"></div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION171" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP449" class="widget-element widget-snap widget-group wow fadeInUp animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE193" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP449" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE174" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP449" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">CẦM TAY CHỈ VIỆC</h5> </div>
                            <div id="PARAGRAPH175" class="widget-element widget-snap wow fadeInDown animated" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP449" lp-display="block">
                                <p class="widget-content" lp-node="p">Các bài giảng được thiết kế theo dạng cầm tay chỉ việc, học viên có thể thực hành, áp dụng được ngay vào trong công việc</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP450" class="widget-element widget-snap widget-group" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE195" class="widget-element widget-snap wow fadeInUp animated" lp-type="line" lp-lang="LINE" lp-group="GROUP450" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE179" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP450" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">TIẾT KIỆM THỜI GIAN</h5> </div>
                            <div id="PARAGRAPH180" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP450" lp-display="block">
                                <p class="widget-content" lp-node="p">46 video bài giảng, thao tác với 9h học online. Giải đáp trong 68 giờ</p>
                            </div>
                        </div>
                    </div>
                    <div id="GROUP451" class="widget-element widget-snap widget-group wow fadeInUp animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="LINE196" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-group="GROUP451" lp-display="block">
                                <div class="widget-content">
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div id="HEADLINE184" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP451" lp-display="block">
                                <h5 class="widget-content" lp-node="h5">HỌC ONLINE</h5> </div>
                            <div id="PARAGRAPH185" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-group="GROUP451" lp-display="block">
                                <p class="widget-content" lp-node="p">Mọi thời điểm, mô hình học tiên tiến, tương tác liên tục: cùng thầy và hàng trăm học viên</p>
                            </div>
                        </div>
                    </div>
                    <div id="SHAPE181" class="widget-element widget-snap wow swing animated" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(3,169,244,1)">
                            <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22A9,9 0 0,0 21,13A9,9 0 0,0 12,4M12.5,8H11V14L15.75,16.85L16.5,15.62L12.5,13.25V8M7.88,3.39L6.6,1.86L2,5.71L3.29,7.24L7.88,3.39M22,5.72L17.4,1.86L16.11,3.39L20.71,7.25L22,5.72Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="IMAGE201" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/tron-1506053396602.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="SHAPE176" class="widget-element widget-snap wow swing animated" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(3,169,244,1)">
                            <path d="M10.5,17.5L7,14L8.41,12.59L10.5,14.67L15.68,9.5L17.09,10.91M10,4H14V6H10M20,6H16V4L14,2H10L8,4V6H4C2.89,6 2,6.89 2,8V19C2,20.11 2.89,21 4,21H20C21.11,21 22,20.11 22,19V8C22,6.89 21.11,6 20,6Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="IMAGE198" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/tron-1506053396602.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="SHAPE186" class="widget-element widget-snap wow swing animated" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(3,169,244,1)">
                            <path d="M4.93,4.93C3.12,6.74 2,9.24 2,12C2,14.76 3.12,17.26 4.93,19.07L6.34,17.66C4.89,16.22 4,14.22 4,12C4,9.79 4.89,7.78 6.34,6.34L4.93,4.93M19.07,4.93L17.66,6.34C19.11,7.78 20,9.79 20,12C20,14.22 19.11,16.22 17.66,17.66L19.07,19.07C20.88,17.26 22,14.76 22,12C22,9.24 20.88,6.74 19.07,4.93M7.76,7.76C6.67,8.85 6,10.35 6,12C6,13.65 6.67,15.15 7.76,16.24L9.17,14.83C8.45,14.11 8,13.11 8,12C8,10.89 8.45,9.89 9.17,9.17L7.76,7.76M16.24,7.76L14.83,9.17C15.55,9.89 16,10.89 16,12C16,13.11 15.55,14.11 14.83,14.83L16.24,16.24C17.33,15.15 18,13.65 18,12C18,10.35 17.33,8.85 16.24,7.76M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="IMAGE197" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                        <div class="widget-content">
                            <div class="lp-show-image" alt="https://static.ladipage.net/d//59c0798c55a6f2f159d40cd8/tron-1506053396602.png"></div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="SECTION341" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-display="block">
                <div class="container">
                    <div id="GROUP437" class="widget-element widget-snap widget-group wow bounce animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE431" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(1,87,155,1)">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE434" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(1,87,155,1)">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE430" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(1,87,155,1)">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE432" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(1,87,155,1)">
                                    <path d="M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="COUNTDOWN4355" class="widget-element widget-snap" lp-type="countdown" lp-lang="COUNTDOWN"  lp-endtimetype="timedown" lp-group="GROUP437" lp-display="block">
                                <div class="widget-content">
                                    <div><span>0</span></div>
                                    <div><span class="num-hour">21</span></div>
                                    <div><span class="num-minute">23</span></div>
                                    <div><span class="num-second">0</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="HEADLINE438" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2">
                            <span style="color: rgb(255, 255, 255);">ĐĂNG KÍ</span> 
                            <span style="color: rgb(255, 255, 255);">MUA NGAY NHẬN NGAY ƯU ĐÃI LÊN ĐẾN&nbsp;</span>
                            <span style="color: rgb(239, 83, 80);"> <?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>%</span>
                        </h2> 
                    </div>
                    <div id="HEADLINE499" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">Thời gian còn lại</span></h5> </div>
                    <div id="LINE500" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="LINE501" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                        <div class="widget-content">
                            <div class="line"></div>
                        </div>
                    </div>
                    <div id="HEADLINE636" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h2 class="widget-content" lp-node="h2"><span style="color: rgb(255, 255, 255);">MIỄN PHÍ GIAO HÀNG</span> <span style="color: rgb(255, 255, 255);">TRÊN TOÀN QUỐC</span></h2> </div>
                    <div id="HEADLINE637" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"><span style="color: rgb(255, 255, 255);">ÁP DỤNG ĐẾN HẾT NGÀY 23/09/2017</span>&nbsp;</h3> </div>
                    <div id="GROUP452" class="widget-element widget-snap widget-group wow bounceInLeft animated" lp-type="widget_group" lp-lang="GROUP" lp-display="block">
                        <div class="widget-content">
                            <div id="BOX439" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-group="GROUP452" lp-display="block">
                                <div class="widget-content">
                                    <div id="BOX440" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                        <div class="widget-content"></div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="HEADLINE441" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h3 class="widget-content" lp-node="h3"><span style="color: rgb(255, 255, 255);"><?php echo number_format($rs->price_root, 0, ",", "."); ?></span></h3> </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="HEADLINE444" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-group="GROUP452" lp-display="block">
                                <h2 class="widget-content" lp-node="h2"><span style="color: rgb(239, 83, 80);"><?php echo number_format($rs->price, 0, ",", "."); ?>đ</span></h2> </div>
                        </div>
                    </div>
                    <div id="BOX349" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="HEADLINE355" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h3 class="widget-content" lp-node="h3"><br></h3> </div>
                            <div id="HEADLINE356" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <p class="widget-content" lp-node="p"></p>
                            </div>
                            <div id="FORM350" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="email" lp-message-form="Cám ơn bạn đã quan tâm" lp-id-pop-sub="POPUP368" lp-display="block">
                                <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage.'/';?>thank-you.html">
                                    <div id="ITEM_FORM351" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" required="required">
                                    </div>
                                    <div id="ITEM_FORM352" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" required="required">
                                    </div>
                                    <div id="ITEM_FORM353" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="tel" placeholder="Nhập Số điện thoại" name="phone" onblur="checkphone(this)" onkeydown="removecheckphone()" lp-label="Điện thoại" required="required">
                                    </div>
                                    <div class="wrap-icon-province hidden" style="display:none">
                                        <input id="tinh" type="text" name="tinh" class="LeadPanel_form_company" placeholder="Tỉnh thành" value=""/>
                                    </div>

                                    <div class="wrap-icon-district hidden" style="display:none">
                                        <input id="quan" type="text" name="quan" class="LeadPanel_form_company" placeholder="Quận huyện" value="" />
                                    </div>

                                    <div id="ITEM_FORM377" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                        <input class="widget-content" type="text" placeholder="Nhập địa chỉ"  name="dia_chi"  lp-label="Địa chỉ" lp-name-id="street" required="required">
                                    </div>
                                    <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                                    <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                                    <div id="ITEM_FORM377" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block" style="top: 211.5px;">
                                        <button   id="form-submit-2" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt">ĐĂNG KÝ NGAY</button>
                                    </div>
                                </form>
                            </div>
                            <div id="IMAGE379" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/d/59c0798c55a6f2f159d40cd8/logo-lakita-w-1506397011966.png"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="PARAGRAPH640" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                        <p class="widget-content" lp-node="p"><span style="color: rgb(255, 255, 255);">Địa chỉ: Phòng 701 CT1 - Chung cư Skylight - Ngõ Hòa Bình 6 - 125D Minh Khai - Q. Hai Bà Trưng - Hà Nội Hotline: 1900 636 195 - 04 7306 2468&nbsp;</span>
                            <br><span style="color: rgb(255, 255, 255);">Hỗ trợ: cskh@lakita.vn</span>
                            <br><span style="color: rgb(255, 255, 255);">© Copyright 2016 Lakita.vn, All rights reserved</span>
                            <br><span style="color: rgb(255, 255, 255);">® Lakita.vn giữ bản quyền nội dung trên website này.</span></p>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP656" class="widget-section ladi-drop animated" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-show-popup-page="1" lp-delay-show-popup-page="1" lp-display="block" lp-ani="wow bounce animated" style="display: none;">
                <div class="container">
                    <div id="FORM660" class="widget-element widget-snap" lp-type="contact_form" lp-lang="FORM" lp-type-form="google" lp-message-form="Cám ơn bạn đã quan tâm" lp-data-form="{}" lp-display="block">
                        <form class="LeadPanel_form promo-panel_action e_submit e_form_submit" role="form" id="dang-ky-2"  method="POST"  name="fr_register" action="<?php echo $code_ladingpage.'/';?>thank-you.html">
                            <div id="ITEM_FORM661" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="text" placeholder="Họ và tên" name="name" lp-label="Họ và tên" lp-name-id="name" required="required">
                            </div>
                            <div id="ITEM_FORM662" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="email" placeholder="Nhập Email" name="email" lp-label="Email" lp-name-id="email" required="required">
                            </div>
                            <div id="ITEM_FORM663" class="widget-element widget-snap widget-dragg widget-item-child" lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block">
                                <input class="widget-content" type="tel" placeholder="Nhập Số điện thoại" name="phone" onblur="checkphone(this)" onkeydown="removecheckphone()" lp-label="Điện thoại" lp-name-id="phone" required="required">
                            </div>
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <div id="ITEM_FORM665" class="widget-element widget-snap widget-dragg widget-item-child" 
                                 lp-type="item_form" lp-lang="ITEM_FORM" lp-display="block" style="top: 171.103px; left: 0px; width: 469px;">
                                <button   id="form-submit-2" class="btn btn-large btn-primary LeadPanel_action button radius e_btn_submit reg_bt">HOÀN TẤT ĐĂNG KÝ</button>
                            </div>
                        </form>
                    </div>

                    <div id="SHAPE668" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="BOX657" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="SHAPE659" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                <div class="widget-content">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 1792 1896.0833" fill="rgba(255,255,255,1)">
                                    <path d="M384 1184v64q0 13-9.5 22.5T352 1280h-64q-13 0-22.5-9.5T256 1248v-64q0-13 9.5-22.5t22.5-9.5h64q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5T352 1024h-64q-13 0-22.5-9.5T256 992v-64q0-13 9.5-22.5T288 896h64q13 0 22.5 9.5T384 928zm0-256v64q0 13-9.5 22.5T352 768h-64q-13 0-22.5-9.5T256 736v-64q0-13 9.5-22.5T288 640h64q13 0 22.5 9.5T384 672zm1152 512v64q0 13-9.5 22.5t-22.5 9.5H544q-13 0-22.5-9.5T512 1248v-64q0-13 9.5-22.5t22.5-9.5h960q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5t-22.5 9.5H544q-13 0-22.5-9.5T512 992v-64q0-13 9.5-22.5T544 896h960q13 0 22.5 9.5t9.5 22.5zm0-256v64q0 13-9.5 22.5T1504 768H544q-13 0-22.5-9.5T512 736v-64q0-13 9.5-22.5T544 640h960q13 0 22.5 9.5t9.5 22.5zm128 704V544q0-13-9.5-22.5T1632 512H160q-13 0-22.5 9.5T128 544v832q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm128-1088v1088q0 66-47 113t-113 47H160q-66 0-113-47T0 1376V288q0-66 47-113t113-47h1472q66 0 113 47t47 113z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="HEADLINE658" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                <h4 class="widget-content" lp-node="h4">ĐĂNG KÝ ĐỂ ĐƯỢC NHẬN ƯU ĐÃI LÊN ĐẾN <?php echo round((1 - $rs->price / $rs->price_root) * 100, 2) ?>%</h4> </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                    <div id="HEADLINE665" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h5 class="widget-content" lp-node="h5"><span style="color: rgb(255, 255, 255);">Mô hình học trực tuyến tiên tiến tâp trung vào thực hành,</span><br><span style="color: rgb(255, 255, 255);">&nbsp;thực hành và thực hành</span><br><span style="color: rgb(255, 255, 255);">81% học viên khen bài giảng hay và chi tiết</span><br><span style="color: rgb(255, 255, 255);">86% được hỗ trợ giải quyết vấn đề tại doanh nghiệp&nbsp;</span><span style="color: rgb(255, 255, 255);">trong</span><br><span style="color: rgb(255, 255, 255);">&nbsp;quá trình học trực tuyến</span></h5> </div>
                    <div id="SHAPE669" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE671" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                        <div class="widget-content">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="HEADLINE672" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                        <h3 class="widget-content" lp-node="h3"><span style="color: rgb(255, 255, 255);">Khóa học được thiết kế dành cho kế toán đi làm và máy tính có kết nối internet</span></h3> </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <div id="POPUP368" class="widget-section ladi-drop" lp-type="widget_section" lp-widget="widget" lp-lang="SECTION" lp-popup="true" lp-display="block" style="display: none;">
                <div class="container">
                    <div id="BOX369" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                        <div class="widget-content">
                            <div id="IMAGE370" class="widget-element widget-snap ladi-drop" lp-type="image" lp-lang="IMAGE" lp-display="block">
                                <div class="widget-content">
                                    <div class="lp-show-image" alt="https://static.ladipage.net/d/57b167c9ca57d39c18a1c57c/phong-2.png"></div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="BOX371" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                <div class="widget-content">
                                    <div id="BOX372" class="widget-element widget-snap ladi-drop" lp-type="box" lp-lang="BOX" lp-display="block">
                                        <div class="widget-content">
                                            <div id="SHAPE373" class="widget-element widget-snap" lp-type="shape" lp-lang="SHAPE" lp-display="block">
                                                <div class="widget-content">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 32 32" fill="rgba(255,255,255,1)">
                                                    <path d="M28.28 6.28L11 23.563l-7.28-7.28-1.44 1.437 8 8 .72.686.72-.687 18-18-1.44-1.44z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ladi-widget-overlay"></div>
                                    </div>
                                    <div id="HEADLINE374" class="widget-element widget-snap" lp-type="textinline" lp-editor="true" lp-lang="HEADLINE" lp-display="block">
                                        <h2 class="widget-content" lp-node="h2">Đăng ký thành công!</h2> </div>
                                    <div id="LINE376" class="widget-element widget-snap" lp-type="line" lp-lang="LINE" lp-display="block">
                                        <div class="widget-content">
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ladi-widget-overlay"></div>
                            </div>
                            <div id="PARAGRAPH375" class="widget-element widget-snap" lp-type="textparagraph" lp-editor="true" lp-lang="PARAGRAPH" lp-display="block">
                                <p class="widget-content" lp-node="p">Sau khi đăng ký mua khóa học, bộ phận CSKH của Lakita sẽ liên hệ với bạn để xác nhận thông tin và nhân viên bưu điện sẽ giao khóa học tận nơi cho bạn. Bạn chỉ phải trả tiền khi nhận được khóa học.</p>
                            </div>
                        </div>
                        <div class="ladi-widget-overlay"></div>
                    </div>
                </div>
                <div class="ladi-widget-overlay"></div>
            </div>
            <script type="text/javascript" src="https://static.ladipage.net/source/jquery.3-0-1.js"></script>
            <link rel="stylesheet" id="animate" href="https://static.ladipage.net/source/animate.min.css">
            <script type="text/javascript" src="https://static.ladipage.net/source/landingpage.1-0-1.js?v=1506401679011"></script>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12">
                        <div class="fb-comments" data-href="https://lakita.vn/tron-bo-lap-bao-cao-tai-chinh-2017.html" 
                             data-width="100%" data-numposts="10" data-order-by="reverse_time"></div>
                    </div>
                </div>
            </div>
            <div style="position: fixed; bottom: 0; display: inline-block !important; z-index: 100000;">
                <a href="#BOX349" title="Đăng ký ngay!" style="display: inline-block;float: right; position: fixed;  right: 0px;  bottom: 10px;"
                   class="hidden-sm hidden-xs">
                    <img src="https://lakita.vn/styles/images/email/rgt-now.png" alt="Đăng ký ngay!" id="img-rgt" style="float: right;">
                </a>
                <a href="tel:1900636195" title="Đăng ký ngay!" style="display: inline-block !important;">
                    <img src="https://lakita.vn/styles/images/email/contact.png" alt="Đăng ký ngay!" 
                         id="img-contact" style="float: left; transition: all 0.3s ease-in-out; margin-left:-200px;">
                </a>
            </div>


            <!-- Latest compiled and minified JavaScript -->
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>public/my.js" type="text/javascript"></script>
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
        </div>

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
                z-index: 999999;
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
                background: url(https://lakita.vn/styles/images/loading.gif) center center no-repeat;
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

    </body>

</html>