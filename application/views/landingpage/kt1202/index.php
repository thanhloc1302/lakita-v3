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
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width , initial-scale=1" />
        <title>Kế toán cho giám đốc</title>
        <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&amp;subset=vietnamese" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>public/kt1202/css/style.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>public/my.js" type="text/javascript"></script>
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
        <header>
            <div class="menu hidden-xs">
                <div class="section-inner">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a onclick="scrollToAnchor('top');" class="navbar-brand" href="#">Giới thiệu</a>                    
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li onclick="scrollToAnchor('diengia');"><a href="#diengia">Giảng viên</a></li>
                                <li onclick="scrollToAnchor('camnhan');"><a href="#camnhan">Cảm nhận</a></li>
                                <li onclick="scrollToAnchor('chitiet');"><a href="#chitiet">Chi tiết</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="tel:1900636195" style="cursor: pointer; color: orange;"><span class="glyphicon glyphicon-phone-alt"></span>1900 63 61 95</a></li>
                                <li onclick="scrollToAnchor('dangky');" class="active"><a href="#dangky">Đăng ký ngay <span class="sr-only">(current)</span></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
            <div class="mobile-nav visible-xs">
                <div class="section-inner">
                    <nav class="">
                        <ul>
                            <li onclick="scrollToAnchor('top');"><a href="#top"><span class="glyphicon glyphicon-home"></span><div>Giới thiệu</div></a></li>
                            <li><a href="#diengia"><span class="glyphicon glyphicon-user"></span><div>Giảng viên</div></a></li>
                            <li><a href="#camnhan"><span class="glyphicon glyphicon-comment"></span><div>Cảm nhận</div></a></li>
                            <li class="detail"><a href="#chitiet"><span class="glyphicon glyphicon-info-sign"></span><div>Chi tiết</div></a></li>
                            <li class="register"><a href="#dangky"><span class="glyphicon glyphicon-shopping-cart"></span><div>Đăng Ký Ngay</div></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="banner text-center">
                <a name="top"></a>
                <div class="section-inner">
                    <img class="header-pc" alt="KHÓA HỌC WAKE UP - Làm chủ công thức tạo dựng thành công bền vững và cuộc sống hạnh phúc viên mãn" src="<?php echo base_url(); ?>public/kt1202/img/top-cover.jpg" />
                    <img class="header-mobile" alt="KHÓA HỌC WAKE UP - Làm chủ công thức tạo dựng thành công bền vững và cuộc sống hạnh phúc viên mãn" src="https://3.bp.blogspot.com/-oOAwZI75Izg/WRa1rGMZTNI/AAAAAAAAE1Q/SQzL7TsH3ekuCYQkOWvEUV1Pz0eC09LSwCLcB/s1600/header-mobile.jpg" />
                </div>
            </div>
        </header>
        <section>
            <div class="section-inner padding15-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="first-text" style="">Hãy cho tôi 2 phút để chia sẻ với bạn vài điều quan trọng.<br />Một trong số đó có thể thay đổi cuộc đời làm giám đốc, quản lý bạn mãi mãi!</p>
                            <p>Nếu thấy bạn cũng đã gặp tình huống tương tự liệt kê dưới đây, hãy đọc tiếp, nếu ngược lại, bạn có thể đóng link này lại vĩnh viễn.</p>
                            <table class="table-icon">
                                <tbody>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Giám đốc mất bao quát tổng thể về mặt pháp lý đối với hoạt động sản xuất kinh doanh của doanh nghiệp, các nghĩa vụ cơ bản để giúp doanh nghiệp tồn tại hợp pháp?</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Trong công ty bạn không phải là trụ cột về tài chính nên thiếu tiếng nói trong tình huống quan trọng, cảm thấy không được tôn trọng?</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Doanh nghiệp bạn mất cân đối các chi phí tương ứng, đối mặt với các nguy cơ, rủi ro về thuế, các hệ lụy đi theo. Người trực tiếp chịu trách nhiệm là bạn?</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">95% học viên cho rằng, giám đốc làm thay công việc của kế toán để tiết kiệm chi phí thuê kế toán sẽ phải trả giá bằng tiền bạc, sức khoẻ bản thân và thời gian lẽ ra dành cho gia đình? (bạn có thuộc nhóm này không?)</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Kế toán doanh nghiệp bạn yếu kém, làm ảnh hướng đến lợi ích kinh tế của chủ doanh nghiệp và nhà đầu tư. Bạn phải có hành động giúp kế toán bảo vệ chi phí và không làm biến dạng doanh thu.</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Là chủ doanh nghiệp nhỏ, bạn có cảm giác bất an nếu 1-2 ngày không ngó ngàng gì tới công ty?</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Bạn phải phỏng vấn và lựa chọn kế toán phù hợp với yêu cầu công việc nhưng do không có hiểu sâu về kế toán thì làm sao biết được ứng viên này ra sao?</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Bạn muốn kiểm tra công việc của bộ phận kế toán, đọc hiểu các chỉ tiêu quan trọng của báo cáo tài chính của doanh nghiệp đang phụ trách</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Công ty bạn vừa nhận quyết định thanh, kiểm tra của cơ quan Thuế. Đơn vị chức năng gửi thông báo tiền nợ thuế, chậm nộp thuế, quyết định cưỡng chế tài khoản tới doanh nghiệp bạn.</b></td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-hand-right"></span></td>
                                        <td style="line-height: 24px;">Chưa hết, 20% mệt mỏi đến từ quản trị doanh nghiệp của bạn</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>
                                <br />
                                Nếu có 1-2 dòng thấy gần gũi với bạn, cho phép tôi được thẳng thắn <b>“Cuộc sống của bạn đang có vấn đề, nghiêm trọng đấy”</b><br />
                                17 năm trước, 9/10 vấn đề trên thường trực trong cuộc sống của tôi và doanh nghiệp tôi tư vấn<br />
                                <b>1 năm sau đó, tôi tìm ra giải pháp và mọi thứ đã thay đổi 180 độ.</b> Và tôi sẽ chia sẻ với bạn Bí mật để thoát khỏi những rắc rối trên và sở hữu một doanh nghiệp bền vững và vững mạnh hệ thống kế toán trong chương trình này: KẾ TOÁN DÀNH CHO GIÁM ĐỐC VÀ NHÀ QUẢN LÝ 2017
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="mrwhy">
            <a name="diengia"></a>
            <div id="diengia" class="section-inner text-center">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 style="margin-top: 0;" class="section-title">TIẾN SĨ HOÀNG QUANG TRUNG LÀ AI?</h2>
                            <div>
                                <iframe allowfullscreen="" src="" frameborder="0" height="315"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="who">
            <div class="section-inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="section-title text-center">Những ai nên tham dự khóa học này</h2>
                            <table class="table-icon table-icon-2">
                                <tbody>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-user"></span></td>
                                        <td style="line-height: 24px;">Nếu bạn dưới 23 tuổi, học sẽ không hiệu quả vì kiến thức dạy ở đây dựa trên trải nghiệm sống</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-user"></span></td>
                                        <td style="line-height: 24px;">Bạn là công chức nhiều năm và cần một hướng đi mới đột phá</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-user"></span></td>
                                        <td style="line-height: 24px;">Bạn đã từng khởi nghiệp thất bại và muốn bắt đầu lại (thậm chí từ số 0)</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-user"></span></td>
                                        <td style="line-height: 24px;">Bạn đang kinh doanh nhỏ hoặc chủ doanh nghiệp nhỏ, chưa hiệu quả</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-user"></span></td>
                                        <td style="line-height: 24px;">Bạn đang tìm một kế hoạch tài chính an toàn cho cả gia đình</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-user"></span></td>
                                        <td style="line-height: 24px;">Bạn cần một bản đồ định hướng cuộc đời chi tiết cho 7 – 10 năm tới</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-user"></span></td>
                                        <td style="line-height: 24px;">Bạn muốn khám phá đâu là giới hạn về trí tuệ và sức mạnh của bản thân</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="content">
            <a name="noidung"></a>
            <div class="section-inner">
                <h2 class="section-title text-center">MỘT PHẦN LỢI ÍCH BẠN SẼ NHẬN ĐƯỢC <small>(thực tế còn nhiều hơn)</small></h2>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <table class="table-icon table-icon-3">
                                <tbody>
                                    <tr>
                                        <td style="width: 26px;"><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;"><b>Bản đồ hành động chi tiết</b> để có thành công bền vững trong 10 năm tới</td>
                                    </tr>

                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;">Những <b>nguyên tắc vàng</b> để GIỮ được nhiều nhất số tiền bạn đã kiếm được (tin tôi đi, nó còn quan trọng hơn cả khả năng kiếm tiền của bạn đấy)</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;">Làm thế nào để <b>tham gia vào thế giới đầu tư</b> phức tạp ngay cả khi bạn đang làm thuê</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;">Sự thật về những công cụ <b>tạo ra thu nhập thụ động</b> (mà sẽ không một nhà đầu tư nào hé lộ cho bạn)</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;">Lý do tại sao 80% công ty phá sản trong 2 năm đầu và Giải pháp để doanh nghiệp của bạn <b>tăng trưởng với 3 chữ số</b> mỗi năm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <table class="table-icon table-icon-3">
                                <tbody>

                                    <tr>
                                        <td style="width: 26px;"><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;"><b>3 bí mật</b> để hoá giải mọi xung đột về tài chính với Vợ/Chồng của bạn</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;"><b>4 bước</b> tạo nền móng giúp Con/Em bạn trở thành thiên tài và biết trân quý tiền bạc</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;">Sở hữu <b>38 tư duy của người thành công</b> với lập trình 4 bước kỹ thuật NLP</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;">Cách thức để <b>kích hoạt năng lượng yêu thương</b> sáng tạo mỗi ngày</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;">Giải mã động cơ <b>truyền cảm hứng</b> để bạn PHẢI trở nên giàu có</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;"><b>Thức tỉnh</b> sức mạnh khổng lồ đã ngủ yên nhiều năm...</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-ok"></span></td>
                                        <td style="line-height: 24px;">Và còn nhiều hơn thế nữa...</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <div class="section-inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="section-title">ĐIỀU KIỆN ĐỂ THAM DỰ CHƯƠNG TRÌNH</h2>
                            <table class="table-icon">
                                <tbody>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-king"></span></td>
                                        <td style="line-height: 24px;">Cam kết tham dự tập trung 2 ngày cuối tuần - Thứ 7, Chủ nhật, từ 8h tới 22h mỗi ngày.</td>
                                    </tr>
                                    <tr>
                                        <td style=""><span class="glyphicon glyphicon-king"></span></td>
                                        <td style="line-height: 24px;">Hoàn thành học phí tham dự chương trình.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="">            
            <div class="section-inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="section-title text-center">NHÌN LẠI KHÓA HỌC GẦN NHẤT</h2>
                            <div class="text-center">
                                <iframe allowfullscreen="" src="" frameborder="0" height="315"></iframe>
                            </div>
                            <a name="camnhan"></a>
                        </div>
                    </div>                    
                    <div class="row">

                        <div class="col-xs-12">
                            <h2 class="section-title">CẢM NHẬN HỌC VIÊN</h2>
                        </div>
                    </div>
                    <div class="row testimonials">
                        <div class="col-xs-12 col-sm-6">
                            <div class="testimonial">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width: 90px;"><img alt="Anh Đỗ Thế Dân" class="img-circle" src="<?php echo base_url(); ?>public/kt1202/img/person1.jpg" /></td>
                                            <td>
                                                <b>Anh Đỗ Thế Dân</b><br />
                                                <i>Công ty CP than Vàng Danh – Vinacomin</i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p>Đúng như tên khóa học "WAKE UP", sau khi học xong khóa học này tôi đã “wake up” được bản thân mình:
                                                    Có suy nghĩ, tư duy tích cực, đang dần loại bỏ những tiêu cực của bản thân. Bắt đầu đã có những suy nghĩ về việc cần phải học và thực hiện cách làm giàu cho bản thân, gia đình và cộng đồng. Đã phần nào nhìn thấy cách thức thực hiện được mục tiêu của mình.
                                                    Càng thấy rằng mình cần phải cho đi "tình yêu" của mình cho mọi người để mình cũng nhận được tình yêu của mọi người.
                                                    Và rất nhiều nữa...<br />
                                                    Trân trọng cảm ơn ASK và anh Ngọc Anh!
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="testimonial">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td style="width: 90px;"><img alt="Chị Đào Thị Tuyết" class="img-circle" src="<?php echo base_url(); ?>public/kt1202/img/person2.jpg" /></td>
                                            <td>
                                                <b>Chị Đào Thị Tuyết</b><br />
                                                <i>Trung tâm Truyền thông GDSK Trung ương, Bộ Y tế</i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <p>Tôi tham gia khóa học với sự háo hức, mong tìm thấy những điều mới mẻ và tôi đã thỏa mãn với hai ngày học.
                                                    Tôi ấn tượng với sự chăm sóc, chỉ dẫn của các bạn trong nhóm hỗ trợ. Các bạn rất trẻ trung, năng động, nhiệt tình.
                                                    Tôi đặc biệt ấn tượng với diễn giả. Đây có thể là lần thứ hàng trăm, hàng nghìn, hàng triệu... anh ấy đứng trước mọi người để chia sẻ. Thế nhưng, người nghe vẫn cảm nhận được sự nhiệt huyết, truyền cảm và một thứ năng lượng kỳ diệu huyền bí toát ra từ anh ấy, như thể mình là khán giả đầu tiên.
                                                    Xin cảm ơn thầy Ngọc Anh rất nhiều!
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="padding15-0 text-center">
                                <iframe allowfullscreen="" src="" frameborder="0" height="315"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="section-title text-center">CHI PHÍ ĐẦU TƯ</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="text-center">Chúng tôi dành 60 vé ưu đãi dành cho những ai đăng ký ngay và sớm (xem thời hạn đăng ký bên dưới)</p>
                            <table class="tickets">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#dangky"><img src="<?php echo base_url(); ?>public/kt1202/img/general-pack.png" alt="Vé GENERAL - 900.000 đ"></a>
                                        </td>
                                        <td>
                                            <a href="#dangky"><img src="<?php echo base_url(); ?>public/kt1202/img/vip-pack.png" alt="Vé VIP - 2.500.000 đ"></a>
                                        </td>
                                        <td>
                                            <a href="#dangky"><img src="<?php echo base_url(); ?>public/kt1202/img/super-pack.png" alt="Vé SUPER VIP - 9.000.000 đ"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <p>&nbsp;</p>
                            <p><img class="img-rounded" alt="Quyền lợi các loại vé" style="max-width: 580px; width: 100%;" src="<?php echo base_url(); ?>public/kt1202/img/graph.png" /></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p>&nbsp;</p>
                            <p class="">Vì là Tổ chức giáo dục số 1 Việt Nam, chúng tôi luôn nỗ lực mang đến dịch vụ sự kiện ở <b>tiêu chuẩn 5*</b>, đặc biệt ở khâu sĩ số, đón tiếp và phục vụ. Vì vậy <b>khoá sĩ số sớm</b> là một trong những yêu cầu quan trọng nhất, chúng tôi luôn hỗ trợ và dành ưu đãi cho học viên đặt chỗ sớm.</p> 
                            <p>Nếu Đăng ký NGAY, bạn sẽ có lợi hơn về phí tham dự, cụ thể:</p>
                            <p class="text-center"><img alt="Vé Ưu đãi khi đăng ký sớm" src="<?php echo base_url(); ?>public/kt1202/img/grapph-2.png" /></p>
                            <p class="padding20-0"><b>Lưu ý:</b> Nếu ngày mai bạn quay trở lại mà không nhìn thấy mức phí ưu đãi nghĩa là số chỗ đã bán hết, khi đó hoặc bạn sẽ phải mua mức phí cao hơn hoặc chờ khoá sau (thường là vài tháng hoặc lâu hơn theo lịch giảng dạy diễn giả)</p>
                            <div class="btn-container text-center">
                                <table>
                                    <tbody><tr>
                                            <td><img alt="=>" src="<?php echo base_url(); ?>public/kt1202/img/arrow-right.gif"></td>
                                            <td><a class="reg-button" href="#dangky">GIỮ CHO TÔI MỘT CHỖ</a></td>
                                            <td><img alt="<=" src="<?php echo base_url(); ?>public/kt1202/img/arrow-left.gif"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <a name="dangky"></a>
            <div class="section-inner">
                <h2 class="section-title text-center">ĐĂNG KÝ THAM DỰ</h2>
                <div class="form container-fluid" style="padding: 0;">
                    <form class="LeadPanel_form promo-panel_action e_submit e_form_submit form-inline" action="<?php echo $code_ladingpage.'/';?>thank-you.html" method="post" accept-charset="utf-8">
                        <a name="dangky"></a>
                        <div id="msbox">        
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4">
                                <label>Họ tên: </label>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <input class="form-control full-size" required="" type="text" name="name" placeholder="VD: Nguyễn Loan" value="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4">
                                <label>Số điện thoại: </label>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <input class="form-control full-size" required="" maxlength="32" type="text" name="phone" placeholder="VD: 09491649xx" value="" />
                            </div>
                        </div>
                        <div class="row" style="margin: 0;">
                            <div class="col-xs-12 text-center">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4">
                                <label>Email: </label>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <input class="form-control full-size" required="" maxlength="128" type="email" name="email" placeholder="VD: youremail@gmail.com" value="" />
                                <div class="small">(Chúng tôi sẽ gửi hướng dẫn tham dự cho bạn qua email này)</div>
                            </div>
                        </div>
                        <div class="row tickets">
                            <div class="col-xs-4 col-sm-4">
                                <label>Giới tính: </label>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <label>
                                    <input checked="" value="Nữ" name="gender" type="radio"> Nữ
                                </label>
                                <label>
                                    <input value="Nam" name="gender" type="radio"> Nam
                                </label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4">
                                <label>Ngày sinh: </label>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <select class="form-control" name="dob_d"  required="">
                                    <option value="01">Ngày</option>
                                    <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> / 
                                <select class="form-control" name="dob_m"  required="">
                                    <option value="01">Tháng</option>
                                    <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>            </select> / <select class="form-control" name="dob_y"  required="">
                                    <option value="1994">Năm</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option>            </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-4 col-sm-4">
                                <label>Nơi học: </label>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <label>
                                    <input value="1" name="city_id" checked="" type="radio"> Hà Nội
                                </label>
                                <label>
                                    <input value="2" name="city_id"  type="radio"> Tp Hồ Chí Minh
                                </label>
                            </div>
                        </div>
                        <div class="row tickets">
                            <div class="col-xs-4 col-sm-4">
                                <label>Loại vé: </label>
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <label>
                                    <input checked="" value="ge" name="ticket" type="radio"> GENERAL
                                </label>
                                <label>
                                    <input value="vip" name="ticket" type="radio"> VIP
                                </label>
                                <label>
                                    <input value="svip" name="ticket" type="radio"> SUPER VIP
                                </label>
                            </div>
                        </div>
                        <div style="margin: 30px 10px;" class="text-center">
                            <input type="hidden" value="<?php echo (isset($_GET['link'])) ? $_GET['link'] : 0; ?>" name="link_id" />
                            <input type="hidden" value="<?php echo $code_ladingpage; ?>" name="code_landingpage" />
                            <input class="mybtn LeadPanel_action button radius e_btn_submit reg_bt" type="submit" name="some_name" value="Xác Nhận Đặt Chỗ Của Tôi" id="form-submit"/>
                            <div style="height: 0;overflow: hidden;">
                                <input style="height: 0;" class="mybtn" type="submit" name="reg2" value="Xác Nhận Đặt Chỗ Của Tôi" />
                            </div>
                            <noscript>
                            <style type="text/css">
                                #btn-reg {
                                    display: none;
                                }
                            </style>
                            <input class="mybtn" type="submit" name="reg" value="Xác Nhận Đặt Chỗ Của Tôi" />
                            </noscript>
                            <div class="hotline">
                                <p class="course-hotline">HOẶC GỌI <a href="tel:1900636195" title="1900636195">1900636195</a></p>
                                <p style="margin-top: 0;line-height: 14px;"><small>(miễn phí cuộc gọi)</small></p>
                            </div>
                        </div>

                    </form></div>
                <div id="loading" style="z-index: 10; display: none; position: fixed; top: 0; left: 0; width: 100%; min-height: 800px; background: rgba(0, 0, 0, 0.8);">
                    <div style="margin-top: 10px; text-align: center; color: white; font-size: 20px; font-weight: bold;">Đang xử lý đăng ký, vui lòng chờ trong giây lát<br /><img src="https://lh3.googleusercontent.com/-I8u03SEppj0/VhMnxYB66MI/AAAAAAAABwU/dr6Jfx2wowo/s220-Ic42/loading.gif" alt="..." /></div>
                </div>
            </div>
        </section>
        <section>
            <a name="chitiet"></a>
            <div class="section-inner">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <br />
                            <img src="<?php echo base_url(); ?>public/kt1202/img/fb1.jpg" />
                            <img src="<?php echo base_url(); ?>public/kt1202/img/fb2.jpg" />
                            <div class="btn-container text-center">
                                <table>
                                    <tbody><tr>
                                            <td><img alt="=>" src="<?php echo base_url(); ?>public/kt1202/img/arrow-right.gif"></td>
                                            <td><a class="reg-button" href="#dangky">GIỮ CHO TÔI MỘT CHỖ</a></td>
                                            <td><img alt="<=" src="<?php echo base_url(); ?>public/kt1202/img/arrow-left.gif"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br />
                            <img src="<?php echo base_url(); ?>public/kt1202/img/fb31.jpg" />
                            <img src="<?php echo base_url(); ?>public/kt1202/img/fb32.jpg" />
                            <img src="<?php echo base_url(); ?>public/kt1202/img/fb41.jpg" />
                            <img src="<?php echo base_url(); ?>public/kt1202/img/fb42.jpg" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="section-title text-center">MỘT SỐ HÌNH ẢNH TẠI KHÓA HỌC</h2>
                            <div class="section-content images">                                
                                <div><img src="<?php echo base_url(); ?>public/kt1202/img/img-course.jpg" alt="Hình ảnh tại khóa học Wake Up" /></div>
                                <div class="clearfix"></div>
                                <p class="text-center">
                                    <a href="/" target="_blank">Xem các hình ảnh khác</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-xs-12 col-sm-4">
                            <h4>Facebook: </h4>
                            <p><a href="" target="_blank" rel="nofollow">Khóa học WAKE UP</a></p>
                            <p><a href="" target="_blank" rel="nofollow">Công Ty CP Đào Tạo ASK</a></p>
                            <p><a href="" target="_blank" rel="nofollow">Doanh nhân PHẠM NGỌC ANH</a></p>

                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <h4>Youtube:</h4>
                            <p><a href="" target="_blank" rel="nofollow">ASK TV</a></p>
                            <p><a href="" target="_blank" rel="nofollow">Phạm Ngọc Anh</a></p>



                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <h4>Website:</h4>
                            <p><a href="" target="_blank" rel="nofollow">askwhy.vn</a></p>
                            <p><a href="" target="_blank" rel="nofollow">wakeup.vn</a></p>
                            <p><a href="" target="_blank" rel="nofollow">phamngocanh.com</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <h4 class="lead">Hãy nhớ phí ưu đãi có giới hạn hoặc chúng tôi có thể khóa sớm hơn nếu đã hết chỗ. Bạn có thể giữ chỗ NGAY BÂY GIỜ</h4>
                            <div class="btn-container text-center">
                                <table>
                                    <tbody><tr>
                                            <td><img alt="=>" src="<?php echo base_url(); ?>public/kt1202/img/arrow-right.gif"></td>
                                            <td><a class="reg-button" href="#dangky">GIỮ CHO TÔI MỘT CHỖ</a></td>
                                            <td><img alt="<=" src="<?php echo base_url(); ?>public/kt1202/img/arrow-left.gif"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <!-- Nav Bar -->
            <script type="text/javascript">
                function scrollToAnchor(aid) {
                    var aTag = $("a[name='" + aid + "']");
                    $('html,body').animate({scrollTop: aTag.offset().top}, 'slow');
                }
            </script>
            <!-- End Nav Bar -->
        </footer>



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
                background: url(https://lakita.vn/styles/v2.0/img/loading.gif) center center no-repeat;
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