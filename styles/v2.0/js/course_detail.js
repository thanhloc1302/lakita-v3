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
            // $('#myModal3').modal({show: true});
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
            /*****************************************************SEARCH**********************************************/
            $("input#key_word").on({
                focus: function () {
                    $(this).val('');
                },
                blur: function () {
                    if ($(this).val() == '')
                        $(this).val('Tìm các khóa học bạn quan tâm...');
                }
            });
            $('.searchIcon').click(
                    function () {
                        $("#searchForm").submit();
                    }
            );
            /*****************************************************SEARCH (HẾT)**********************************************/

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
                                console.log(response);
                                if (response.success == 0) {
                                    alert('Không tồn tại mã voucher!');
                                } else if (response.success == 1) {
                                    alert('Mã voucher này không áp dụng cho khóa học này, bạn vui lòng kiểm tra lại!');
                                } else if (response.success == 2) {
                                    alert('Mã voucher này chỉ áp dụng khi bạn đã đăng ký khóa "Bí quyết làm chủ Excel 2010" hoặc khóa "Bí quyết làm chủ Excel 2007"!');
                                } else {
                                    $(".voucher").html('<span style="color: red;">Áp dụng thành công mã voucher trị giá ' + response.voucher_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + ' VNĐ !</span>');
                                    $('.price').text(response.course_price_sale.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + ' VNĐ ');
                                }
                                return false;
                            },
                            complete: function () {
                                $(".popup-wrapper").hide();
                            }
                        });
                    }
            );

            /*===============================yêu thích khóa học =======================================*/

            $(".love_link").click(function () {
                var courses_id = $("#vote_course_id_2").val();
                jQuery.ajax({
                    type: "POST",
                    url: 'student/save_love',
                    data: {
                        courses_id: courses_id
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
                        console.log(response);
                        if (response == 1)
                        {
                            alert('Thêm khóa học vào danh sách yêu thích thành công');
                            $(".love_link").html('<i class="fa fa-heart red" aria-hidden="true"></i>  Tôi thích khóa học này');
                        } else
                        {
                            alert(response);
                        }
                        return false;
                    }
                });
                return false;
            });
            $(".love_link_no_login").click(function () {
                alert("Bạn cần đăng nhập để đưa khoá học này vào danh sách yêu thích của bạn!");
                $("a#menu_login").click();
                return false;
            });
        });

