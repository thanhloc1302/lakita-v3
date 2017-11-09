<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Khóa học đào tạo kiến thức kiểm tra kế toán dành cho giám đốc doanh nghiệp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="fb:admins" content="100001432238036"/>
        <meta property="fb:app_id" content="315347858825221" />
        <meta property="og:type"   content="website" /> 
        <meta property="og:url" content="<?php echo current_url(); ?>" />
        <meta property="og:title" content="Kế toán dành cho giám đốc và các nhà quản lý" />
        <meta property="og:image" content="https://lakita.vn/data/source/courses/360x260/ke-toan-giam-doc.png" />
        <meta property="og:description" content="Khóa học đào tạo kiến thức kiểm tra kế toán dành cho giám đốc doanh nghiệp" />

        <meta name="description" content="Hệ thống đào tạo trực tuyến lakita – Cùng bạn vươn xa Học Online qua Video bài giảng - Học Online thỏa thích mọi lúc, mọi nơi - Học trên mọi thiết bị - Học với giảng viên, chuyên gia hàng đầu trong lĩnh vực - Hóa đơn chứng từ - Làm chủ hóa đơn chứng từ" />
        <link rel="icon" href="https://lakita.vn/data/source/setting/favicon.png" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url(); ?>public/kt120/main.css" rel="stylesheet" type="text/css"/>
        <script src="https://use.fontawesome.com/0b216c5f11.js"></script>
        <script src="<?php echo base_url(); ?>public/my.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/kt120/newcss.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/kt120/newstyle.css" />
        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
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
            }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
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
    <?php
    $files = glob(APPPATH . 'views/landingpage/kt120/html-file/*.php');
    foreach ($files as $file) {
        require($file);
    }
    ?>
    <!-- Google Code for KT120 All Visitors -->
    <!-- Google Code for Remarketing Tag -->
    <!--------------------------------------------------
    Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
    --------------------------------------------------->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 845378743;
        var google_conversion_label = "QV4TCJrsjXMQt-mNkwM";
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/845378743/?value=1.00&amp;label=QV4TCJrsjXMQt-mNkwM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
</body>
</html>
