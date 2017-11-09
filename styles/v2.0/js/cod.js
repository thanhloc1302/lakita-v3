function activate() {
    var cod_cod = jQuery("#cod_cod").val();
    var intive_code = jQuery("#invite_code").val();
    var filter = /^LKT+[0-9]{5}$/;
    if (cod_cod == '') {
        alert("Bạn phải nhập mã kích hoạt!");
        return;
    }
    
    if (!filter.test(intive_code))
    {
        alert('Mã giới thiệu chưa đúng định dạng');
        return;
    }
    jQuery.ajax({
        type: "POST",
        url: 'student/action_activecod',
        data: {
            cod_cod: cod_cod,
            invite_code: intive_code,
            submit_cod: 'submit_cod'
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
            var resultArr = response.split("_");
            if (resultArr[0] == 1)
            {
                console.log(response);
                alert("Chúc mừng bạn đã kích hoạt thành công khóa học \"" + resultArr[2] + "\", chúng tôi sẽ đưa bạn đến trang khóa học để học ngay!");
                location.replace(resultArr[1]);
            } else if(resultArr[0] == 99){
                location.assign('nhan-qua-tang.html');
            }
            else
            {
                alert(resultArr[1]);
            }
            return false;
        }
    });
}
$("#nap").click(
        function () {
            activate();
        });
$('body').on('keypress', '#cod_cod', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        activate();
    }
});

