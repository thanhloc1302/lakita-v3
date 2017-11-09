<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="vi"> 
    <?php $this->load->view('head') ?>
    <body style="overflow-x: hidden;">
        <div id="fb-root"></div>
<!--        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=315347858825221";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>-->
        <!--ghi thời gian học viên đang đăng nhâp-->
        <?php $this->load->view('student/watching_video') ?>
        <?php
        if (($time_start_sale - 12 * 3600 < time()) && ($time_end_sale > time())) {
            $this->load->view('home/event');
        } else {
            $this->load->view('home/comboKTE');
            $this->load->view('home/bannerExcel');
        }
        ?>
        <?php $this->load->view('home/try_learn'); ?>
        <?php //$this->load->view('home/event2'); ?>
        <?php
        if (isset($content)) {
            $this->load->view($content);
        }
        $this->load->view('home/footer');
        ?>
        <?php $this->load->view('footer') ?>
    </body>
</html>