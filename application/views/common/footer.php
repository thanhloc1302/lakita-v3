<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!$this->agent->is_mobile()) {
    ?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/57fb6f373d527557044541f9/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <?php
} else {
    ?>
    <button class="btn btn-success scrollup" style="position: fixed; bottom: 5px; right: 16px; background-image: none;padding: 6px 13px;"> <i class="fa fa-arrow-circle-up" aria-hidden="true" style="font-size: 2em !important;"></i> </button>
    <script type="text/javascript">
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.scrollup').fadeIn();
                } else {
                    $('.scrollup').fadeOut();
                }
            });

            $('.scrollup').click(function () {
                $("html, body").animate({scrollTop: 0}, 600);
                return false;
            });

        });
    </script>
<?php } ?>

<script>
    if ($(window).width() < 1024) {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $("#myModal3").html("");
        }
    }
</script>
<?php 
if (isset($load_js) && is_array($load_js)) {
    foreach ($load_js as $value) {
        $this->load->view('common/js/' . $value);
    }
}
?>

