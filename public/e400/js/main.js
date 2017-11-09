var course_id = '55c3306344616e0ca600001f';
var course_name = 'Làm chủ Excel trong 4 giờ';
$(document).ready(function(){
  //Scroll
  $("a[href^='#']").click(function () {
      var url = window.location.href;
      var idDiv = $(this).attr("href").substr(1,$(this).attr("href").length);
      var sizeEnough = $(window).height() - $('#' + idDiv).height();
      $('html,body').animate({
              scrollTop: $($(this).attr("href")).offset().top - ($(window).height() - $('#' + idDiv).height())
      }, 1000);
  });

  var data_vid = {
    4:"http://d3c5ulldcb6uls.cloudfront.net/excel-co-ban/04/hls_1500_.m3u8",
    8:"http://d3c5ulldcb6uls.cloudfront.net/excel-co-ban/08/hls_1500_.m3u8",
    10:"http://d3c5ulldcb6uls.cloudfront.net/excel-co-ban/10/hls_1500_.m3u8"
  }
  $(".btn-small-preview").bind("click", function(){
    var title = $(this).parent().text().replace("Học thử","");
    $(".modal-title").text(title);
    $("#video_panel").modal("show");
  });

  $("#video_panel").on("hidden.bs.modal", function(){
    $("#vid").hide();
  })

  $(".item").bind('click', function(){
    $(".item").removeClass("active");
    $(this).addClass("active");
  });

  

  $("#ipt_submit").bind("click", function(){
    var name = $(".form_c3").find("input[name='name']").val();
    var mobile = $(".form_c3").find("input[name='tel']").val();
    var email = $(".form_c3").find("input[name='email']").val();
    var msg = window.location.href;
    var detail = name + "," + email + "," + mobile + "," + $("input[name='address']").val() + "," + $("input[name='district']").val() + "," + $("input[name='city']").val() + ".";
    detail += msg;

    if(name == "" || mobile == ""){
      alert("Bạn phải điền đủ thông tin!");
      return false;
    }else if(mobile.length < 8 || (email != "" && email.indexOf('@') == -1)){
      alert("Thông tin bạn điền chưa chính xác, vui lòng điền lại!");
      return false;
    }
    // }else if(!validatePhoneNumber(mobile)){
    //   alert("Vui lòng nhập lại đúng số điện thoại");
    //   return false;
    // }

    $(".form_c3").find("input[name='name']").val("");
    $(".form_c3").find("input[name='tel']").val("");
    $(".form_c3").find("input[name='email']").val("");

    var params = {
      'course_id': course_id,
      'course_name': course_name,
      'email': email,
      'name': name,
      'mobile': mobile,
      'type': 'c3_cod',
      'msg': detail
    }
    var flowURL = 'http://flow.pedia.vn:8000/notify/c3/create';
    var backupURL = 'http://pedia.vn/contactc3s/insert';


    send_c3(backupURL, params, function(){
      send_c3(flowURL, params, function(){
        window.location = "http://lamchuexcel3.pedia.vn/thankyou/";
      }, function(){
        window.location = "http://lamchuexcel3.pedia.vn/thankyou/";
      });
    }, function(){
      alert('Lỗi mạng hoặc số điện thoại đã được sử dụng, xin vui lòng thử lại!');
    });
    track_c3_cod({
      'name': name,
      'mobile': mobile,
      'email': email,
      'msg': detail
    });
    // Track c3_cod, to: Google Analytics
    ga('send', 'event', 'c3_cod', 'submit', 'NTD01');
    return false;
  });

  // Start countdown if there is a sale
  var exprired = auto_time().split('/');
  var today = new Date();
  var days = 1;
  var stop_time = new Date(exprired[1]+"/"+exprired[0]+"/"+exprired[2]+" 23:59:59");
  $("#stop_day").text(stop_time.getDate());
  $("#stop_month").text(stop_time.getMonth() + 1);
  $("#stop_year").text(stop_time.getFullYear());

  //var tag_day = $(".countdown-amount")[0];
  var tag_hour = $(".countdown-amount")[0];
  var tag_minute = $(".countdown-amount")[1];
  var tag_second = $(".countdown-amount")[2];
  saleCoundownter(
    (stop_time.getTime() - Date.now()) / 1000,
    function (days, hours, minutes, seconds) {
      //tag_day.textContent = days;
      tag_hour.textContent = hours;
      tag_minute.textContent = minutes;
      tag_second.textContent = seconds;
    })

});

