/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {
    //thời gian chuyển slide
    $('.carousel').carousel({
        interval: 10000
    });
    /*============ đặt chiều cao cho carousel ===========*/
    var max_height = 0;
    $(".student-content").each(function () {
        if (max_height < $(this).height())
            max_height = $(this).height();
    });
    $(".student-content").each(function () {
        $(this).height(max_height);
    });

    /*========================== đồng hồ đếm ngược =================*/
    countdown();
    setInterval(function () {
        countdown();
    }, 1000);
    var d = new Date();
    $(".fullyear").text(d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear());
    $("a[href^='#']").click(function () {
        var idDiv = $(this).attr("href").substr(1,$(this).attr("href").length);
        var sizeEnough = $(window).height() - $('#' + idDiv).height();
        $('html,body').animate({
                scrollTop: $($(this).attr("href")).offset().top - ($(window).height() - $('#' + idDiv).height())
        }, 1000);
    });

    function countdown() {
        var d = new Date();
        var r_hours = 24 - d.getHours();
        r_hours = (r_hours < 10) ? '0' + r_hours : r_hours;
        var r_minus = 59 - d.getMinutes();
        r_minus = (r_minus < 10) ? '0' + r_minus : r_minus;
        var r_seconds = 59 - d.getSeconds();
        r_seconds = (r_seconds < 10) ? '0' + r_seconds : r_seconds;
        $(".num-hour").text(r_hours);
        $(".num-minute").text(r_minus);
        $(".num-second").text(r_seconds);
    }
});