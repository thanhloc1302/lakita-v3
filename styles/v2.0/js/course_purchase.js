$(
        function () {
            $("#menu_register").click(function () {
                $("#show_modal").click();
                $("a#tab_register").click();
                return false;
            });
            $("#menu_login").click(function () {
                $("#show_modal").click();
                $("a#tab_login").click();
                return false;
            });
            $(".menu_login").click(function () {
                $("#show_modal").click();
                $("a#tab_login").click();
                return false;
            });
            $(".menu_login_mobile").click(function () {
                $(".login_link_mobile").click();
                return false;
            });
            $("a#link_register").click(function () {
                $("a#tab_register").click();
                return false;
            });
            $("a#link_login").click(function () {
                $("a#tab_login").click();
                return false;
            });
            $("a#link_forgetpassword").click(function () {
                $("a#tab_forgetpassword").click();
                return false;
            });
            $('.carousel').carousel({
                interval: 15000
            });
            var contentWidthFooter = $('div.footer').innerWidth();
            $('div.footer div.row').css({"width": contentWidthFooter});
            $(window).resize(function () {
                var contentHeight = $('div.TestimonialHighlight').innerHeight();
                var contentWidth = $('div.TestimonialHighlight').innerWidth();
                $('div.content').css({"height": contentHeight, "width": contentWidth});
                var contentWidthFooter = $('div.footer').innerWidth();
                $('div.footer div.row').css({"width": contentWidthFooter});
            });

            /*************************************  QUÊN MẬT KHẨU *************************************/

            $("#forgetPasswordHTML2").hide();
            $("#forgetPassBtn").click(
                    function () {

                        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                        var forget_email = jQuery("#forgetPasswordEmail").val();
                        if (!filter.test(forget_email))
                        {
                            alert('Địa chỉ Email chưa đúng định dạng');
                            return;
                        } else {

                            $(".popup-wrapper").show();
                            jQuery.ajax({
                                type: "POST",
                                url: 'guest/forgetPassword',
                                data: {
                                    forget_email: forget_email
                                },
                                dataType: "text",
                                scriptCharset: "utf-8",
                                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                                beforeSend: function (xhr)
                                {
                                    xhr.setRequestHeader("Ajax-Request", "true");
                                },
                                success: function (response)
                                {

                                    if (response == 0)
                                    {
                                        $(".popup-wrapper").hide();
                                        alert('Email không tồn tại trên hệ thống. Vui lòng kiểm tra lại!');
                                    } else
                                    {
                                        alert('Chúng tôi đã gửi 1 mã xác nhận việc quên mật khẩu vào email của bạn, vui lòng kiểm tra email để lấy mã xác nhận!');
                                        $("#forgetPasswordHTML1").hide();
                                        $("#forgetPasswordHTML2").show();
                                        $("#email_forget_send").text(forget_email);
                                        $(".popup-wrapper").hide();
                                    }
                                    return false;
                                }
                            });
                        }
                    }
            );
            $("#CreatePassBtn").click(function () {
                var code_forget = $("#code_forget").val();
                if (code_forget.length == 0) {
                    alert("Vui lòng nhập mã xác nhận!");
                    return;
                }
                if (code_forget.length != 8) {
                    alert("Mã xác thực không đúng. Vui lòng kiểm tra lại!");
                    return;
                }
                var password_forget = $("#password_forget").val();
                var re_password_forget = $("#re_password_forget").val();
                if (password_forget.length == 0) {
                    alert("Vui lòng nhập mật khẩu!");
                    return;
                }

                if (password_forget != re_password_forget) {
                    alert("Mật khẩu xác nhận không khớp. Vui lòng kiểm tra lại!");
                    return;
                }
                if (password_forget.length < 6 || re_password_forget.length < 6)
                {
                    alert("Mật khẩu phải nhiều hơn 5 kí tự. Vui lòng nhập lại!");
                    return;
                }
                jQuery.ajax({
                    type: "POST",
                    url: 'guest/sendCodeForget',
                    data: {
                        code_forget: code_forget,
                        password_forget: password_forget,
                        re_password_forget: re_password_forget
                    },
                    dataType: "text",
                    scriptCharset: "utf-8",
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    beforeSend: function (xhr)
                    {
                        xhr.setRequestHeader("Ajax-Request", "true");
                    },
                    success: function (response)
                    {
                        var result = response.split("_");
                        if (result[0] == 0)
                        {
                            alert(result[1]);
                        } else
                        {
                            alert(result[1]);
                            $("a#tab_login").click();
                        }
                        return false;
                    }
                });
            });
            /*************************************  QUÊN MẬT KHẨU (HẾT) *************************************/
            /***********************************************VOUCHER*************************************************/
            $("#voucher1").click(
                    function () {
                        var coupon = $("#coupon").val();
                        if (coupon == '') {
                            alert('Vui lòng nhập vào mã voucher!');
                            return;
                        }
                        var url = "course/applyVoucher";
                        jQuery.ajax({
                            type: "POST",
                            url: url,
                            data: {
                                coupon: coupon
                            },
                            dataType: "json",
                            scriptCharset: "utf-8",
                            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                            beforeSend: function (xhr)
                            {
                                xhr.setRequestHeader("Ajax-Request", "true");
                                $(".popup-wrapper").show();
                            },
                            success: function (response)
                            {
                                if (response.success == 0) {
                                    alert('Không tồn tại mã voucher!');
                                } else if (response.success == 1) {
                                    alert('Mã voucher này không áp dụng cho khóa học này, bạn vui lòng kiểm tra lại!');
                                } else if (response.success == 2) {
                                    alert('Mã voucher này chỉ áp dụng khi bạn đã đăng ký khóa "Bí quyết làm chủ Excel 2010" hoặc khóa "Bí quyết làm chủ Excel 2007"!');
                                } else {
                                    $(".voucher").html('<span style="color: red;">Áp dụng thành công mã voucher trị giá ' + response.voucher_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + ' VNĐ !</span>');
                                    $(".voucher-modal").html('<strong> ' + response.voucher_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + ' VNĐ !</strong>');
                                    $('.price-modal').html('<strong>' + response.course_price_sale.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + ' VNĐ </strong>');
                                }
                                return false;
                            },
                            complete: function () {
                                $(".popup-wrapper").hide();
                            }
                        });
                    }
            );
            /***********************************************VOUCHER - HẾT*************************************************/

            /*==============================================MUA KHÓA HỌC BẰNG COD========================================*/
            $(".btn-cod").click(function () {
                var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                var filter_phone = /^[0-9]{10,11}$/;

                var name = $("[name='cod_name']").val();
                if (name == '') {
                    alert('Vui lòng nhập họ tên!');
                    return;
                }

                var email = $("[name='cod_email']").val();
                if (email == '') {
                    alert('Vui lòng email!');
                    return;
                }

                var tinh = $("[name='cod_tinh']").val();
                if (tinh == '') {
                    alert('Vui lòng tên tỉnh!');
                    return;
                }

                var quan = $("[name='cod_quan']").val();
                if (quan == '') {
                    alert('Vui lòng tên quận/huyện!');
                    return;
                }

                var dia_chi = $("[name='cod_dia_chi']").val();
                if (dia_chi == '') {
                    alert('Vui lòng nhập địa chỉ!');
                    return;
                }

                var phone = $("[name='cod_phone']").val();
                if (phone == '') {
                    alert('Vui lòng nhập số điện thoại!');
                    return;
                }

                if (!filter.test(email))
                {
                    alert('Địa chỉ Email chưa đúng định dạng');
                    return;
                }
                if (!filter_phone.test(phone))
                {
                    alert('Số điện thoại chưa đúng định dạng');
                    return;
                }

                jQuery.ajax({
                    type: "POST",
                    url: 'course/purchase_by_cod',
                    data: {
                        name: name,
                        email: email,
                        tinh: tinh,
                        quan: quan,
                        dia_chi: dia_chi,
                        phone: phone,
                        submit_form: 'purchase_by_cod'
                    },
                    dataType: "text",
                    scriptCharset: "utf-8",
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    beforeSend: function (xhr)
                    {
                        xhr.setRequestHeader("Ajax-Request", "true");
                        $(".popup-wrapper").show();
                    },
                    success: function (response)
                    {
                        if (response == '104')
                            location.assign("mua-khoa-hoc-thanh-cong.html");
                        else
                            alert("Có lỗi xảy ra, bạn vui lòng quay lại sau!");
                        return false;
                    },
                    complete: function () {
                        $(".popup-wrapper").hide();
                    }
                });
            });

            /*==============================================MUA KHÓA HỌC BẰNG COD (hết)========================================*/

            /*==============================================MUA KHÓA HỌC THANH TOÁN TRỰC TIẾP========================================*/
            $(".btn-direct").click(function () {
                var filter_phone = /^[0-9]{10,11}$/;
                var name = $("[name='direct_name']").val();
                if (name == '') {
                    alert('Vui lòng nhập họ tên!');
                    return;
                }
                var phone = $("[name='direct_phone']").val();
                if (phone == '') {
                    alert('Vui lòng nhập số điện thoại!');
                    return;
                }
                if (!filter_phone.test(phone))
                {
                    alert('Số điện thoại chưa đúng định dạng');
                    return;
                }
                jQuery.ajax({
                    type: "POST",
                    url: 'course/purchase_direct',
                    data: {
                        name: name,
                        phone: phone,
                        submit_form: 'purchase_by_direct'
                    },
                    dataType: "text",
                    scriptCharset: "utf-8",
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    beforeSend: function (xhr)
                    {
                        xhr.setRequestHeader("Ajax-Request", "true");
                        $(".popup-wrapper").show();
                    },
                    success: function (response)
                    {
                        if (response == '104')
                            location.assign("mua-khoa-hoc-thanh-cong.html");
                        else
                            alert("Có lỗi xảy ra, bạn vui lòng quay lại sau!");
                        return false;
                    },
                    complete: function () {
                        $(".popup-wrapper").hide();
                    }
                });
            });

            /*==============================================MUA KHÓA HỌC THANH TOÁN TRỰC TIẾP (hết)========================================*/

            /*==============================================MUA KHÓA HỌC CHUYỂN KHOẢN========================================*/
            $(".btn-transfer").click(function () {
                var filter_phone = /^[0-9]{10,11}$/;
                var name = $("[name='transfer_name']").val();
                if (name == '') {
                    alert('Vui lòng nhập họ tên!');
                    return;
                }
                var phone = $("[name='transfer_phone']").val();
                if (phone == '') {
                    alert('Vui lòng nhập số điện thoại!');
                    return;
                }
                if (!filter_phone.test(phone))
                {
                    alert('Số điện thoại chưa đúng định dạng');
                    return;
                }
                jQuery.ajax({
                    type: "POST",
                    url: 'course/purchase_transfer',
                    data: {
                        name: name,
                        phone: phone,
                        submit_form: 'purchase_by_transfer'
                    },
                    dataType: "text",
                    scriptCharset: "utf-8",
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    beforeSend: function (xhr)
                    {
                        xhr.setRequestHeader("Ajax-Request", "true");
                        $(".popup-wrapper").show();
                    },
                    success: function (response)
                    {
                        if (response == '104')
                            location.assign("mua-khoa-hoc-thanh-cong.html");
                        else
                            alert("Có lỗi xảy ra, bạn vui lòng quay lại sau!");
                        return false;
                    },
                    complete: function () {
                        $(".popup-wrapper").hide();
                    }
                });
            });

            /*==============================================MUA KHÓA HỌC CHUYỂN KHOẢN (hết)========================================*/
            /*==============================================MUA KHÓA HỌC BẰNG SỐ DƯ LAKITA ========================================*/
            $(".btn-lakita").click(function () {
                jQuery.ajax({
                    type: "POST",
                    url: 'course/purchase_by_lakita_balance',
                    data: {
                        submit_form: 'purchase_by_lakita'
                    },
                    dataType: "text",
                    scriptCharset: "utf-8",
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    beforeSend: function (xhr)
                    {
                        xhr.setRequestHeader("Ajax-Request", "true");
                        $(".popup-wrapper").show();
                    },
                    success: function (response)
                    {
                        console.log(response);

                        if (response == 0)
                        {
                            alert("Số dư của bạn không đủ để mua khóa học. Vui lòng nạp thêm tiền để mua khóa học!");
                            location.replace('https://lakita.vn/nap-tien-vao-tai-khoan.html');
                        } else
                        {
                            alert("Chúc mừng bạn đã mua khóa học thành công! Hệ thống sẽ đưa bạn đến trang học tập để bạn học ngay.");
                            location.replace(response);
                        }
                        return false;
                    },
                    complete: function () {
                        $(".popup-wrapper").hide();
                    }
                });
            });
            /*==============================================MUA KHÓA HỌC BẰNG SỐ DƯ LAKITA (hết)========================================*/

        });