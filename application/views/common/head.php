
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({'gtm.start':
                    new Date().getTime(), event: 'gtm.js'});
        var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KRX79Q5');</script>
<!-- End Google Tag Manager -->
<base href="<?php echo base_url(); ?>" />   
<meta http-equiv="content-language" content="vi" />
<link rel="alternate" href="https://lakita.vn" hreflang="vi-vn" />
<title><?php echo $title; ?></title>    
<meta name="description" content="<?php echo $title; ?>. Học excel cơ bản, excel dành cho kế toán, excel cho nhân sự, làm chủ hóa đơn chứng từ." />
<meta name="keywords" content="học excel, hoc excel, tự học excel, học excel cơ bản, học excel co ban, excel kế toán, excel ke toan, làm chủ hóa đơn chứng từ, lam chu hoa don chung tu, <?php if (isset($keywords)) echo $keywords; ?>" />
<meta name="robots" content="noodp" />
<meta name="author" content="<?php echo base_url(); ?>" />
<meta name="robots" content="index,follow"/>
<meta name="revisit-after" content="3 days"/>
<meta http-equiv="audience" content="General"/>
<meta name="resource-type" content="Document"/>
<meta name="distribution" content="Global"/>
<meta name="rating" content="General"/>
<!-- Open Graph Tags  -->
<meta property="og:url" content="<?php
$pageURL = 'https';
$pageURL .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
} else {
    $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
}
echo $pageURL;
?>" />
<meta property="og:type" content="website" />
<meta property="og:title"         content="<?php echo $title; ?>" />
<meta property="og:description"   content="Hệ thống đào tạo trực tuyến lakita – Cùng bạn vươn xa Học Online qua Video bài giảng - Học Online thỏa thích mọi lúc, mọi nơi - Học trên mọi thiết bị - Học với giảng viên, chuyên gia hàng đầu trong lĩnh vực - Hóa đơn chứng từ - Làm chủ hóa đơn chứng từ" />
<?php if (isset($image)) { ?>
    <meta property="og:image" content="<?php if (isset($image)) echo $image; ?>"/>
<?php }else { ?>
    <meta property="og:image" content="<?php echo base_url() . 'data/logo/share.jpg'; ?>"/>
<?php } ?>
<meta name="description" content="Hệ thống đào tạo trực tuyến lakita – Cùng bạn vươn xa Học Online qua Video bài giảng - Học Online thỏa thích mọi lúc, mọi nơi - Học trên mọi thiết bị - Học với giảng viên, chuyên gia hàng đầu trong lĩnh vực - Hóa đơn chứng từ - Làm chủ hóa đơn chứng từ" />
<!-- Schema.org markup for Google+ --> 
<meta name="google-site-verification" content="sMPDm2UwHcFhdiIMKCrV_QFe7rwUT7P0-gkEZkr-k50" />
<meta itemprop="name" content="<?php
if (isset($meta_title)) {
    echo $meta_title;
} else {
    echo $setting[0]['name'];
}
?>" /> 
<meta itemprop="description" content="<?php
if (isset($meta_description)) {
    echo $meta_description;
} else {
    echo $setting[0]['description'];
}
?>" /> 
<script>
    Notification.requestPermission(function (p) {
        if (p === "denied")
        {
            /*                alert("Bạn đã không cho phép thông báo trên trình duyệt.");*/
        }
    });

</script>
<script type="text/javascript">
    console.log("%cLưu ý: Đây là chế độ dành cho nhà phát triển. Bạn không nên truy cập vào phần này. Xin cảm ơn!", "background: red; color: yellow; font-size: 40px;font-weight: bold;");
</script>
<link rel="shortcut icon" href="<?php echo base_url() . $setting[0]['favicon'] ?>" type="image/x-icon" />

<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- boootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap-theme.min.css" />

<!-- bootstrap-select -->
<script src="<?php echo base_url(); ?>plugin/boostrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>plugin/boostrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

<!-- font Roboto google -->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css' />

<!-- font awesome -->
<script src="https://use.fontawesome.com/0b216c5f11.js"></script>

<!-- my css -->
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>styles/v2.0/css/reset.css" />
<link type="text/css" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/general.css" />
<link type="text/css" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/media.css" /> 
<link type="text/css" rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/v2.0/css/define.css" />

<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=315347858825221";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<?php include_once("plugin/analyticstracking.php") ?>

<?php
    if (isset($load_css) && is_array($load_css)) {
    foreach ($load_css as $value) {
        $this->load->view('common/css/' . $value);
    }
}
?>
