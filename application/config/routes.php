<?php

defined('BASEPATH') OR exit('No direct script access allowed');





$route['quantriketoan'] = 'landingpage/show/1';
$route['ky-thuat-quyet-toan-thue.html'] = 'landingpage/show/kt800';
$route['quyet-toan-thue-tu-a-den-z.html'] = 'landingpage/show/kt210';
$route['lap-bao-cao-tai-chinh-2016.html'] = 'landingpage/show/kt400';
$route['lap-bao-cao-tai-chinh-2017.html'] = 'landingpage/show/kt400';
$route['tron-bo-lap-bao-cao-tai-chinh-2017.html'] = 'landingpage/show/kt4002';
$route['cach-xac-dinh-chi-phi-hop-ly.html'] = 'landingpage/show/kt110';
$route['quan-tri-ke-toan.html'] = 'landingpage/show/kt120';
$route['bao-cao-tai-chinh-nang-cao.html'] = 'landingpage/show/kt130';
$route['nghiep-vu-ke-toan-doanh-nghiep-thuong-mai.html'] = 'landingpage/show/kt310';
$route['nghiep-vu-ke-toan-doanh-nghiep-kinh-doanh-dich-vu.html'] = 'landingpage/show/kt320';
$route['nghiep-vu-ke-toan-doanh-nghiep-xay-dung.html'] = 'landingpage/show/kt330';
$route['thue-gia-tri-gia-tang-co-ban-den-nang-cao.html'] = 'landingpage/show/kt340';
$route['thue-thu-nhap-doanh-nghiep-co-ban-den-nang-cao.html'] = 'landingpage/show/kt350';
$route['thue-thu-nhap-ca-nhan-co-ban-den-nang-cao.html'] = 'landingpage/show/kt360';
$route['thuc-hanh-ke-toan-tren-excel.html'] = 'landingpage/show/kt510';
$route['tron-bo-quyet-toan-thue-tu-a-den-z.html'] = 'landingpage/show/kt2102';
$route['ke-toan-danh-cho-giam-doc.html'] = 'landingpage/show/kt1202';
$route['bi-quyet-lam-chu-excel-2017.html'] = 'landingpage/show/e100';
$route['excel-tu-a-den-z.html'] = 'landingpage/show/e400';
$route['save_c3'] = 'landingpage/save_c3';
$route['thank-you.html'] = 'landingpage/save_c3';
$route['(:any)/thank-you.html'] = 'landingpage/save_c3';





$route['lap-bao-cao-tai-chinh.html'] = 'landingpage/index/1';
$route['nhomthaoluan'] = 'landingpage/index/2';
$route['emailyoutube.html'] = 'landingpage/index/3';
$route['meoexcel.html'] = 'landingpage/index/4';
$route['ex100youtube.html'] = 'landingpage/index/5';
$route['ex200youtube.html'] = 'landingpage/index/6';
$route['ex300youtube.html'] = 'landingpage/index/7';





$route['dich-vu-excel.html'] = 'excel/index';
$route['tin-tuc.html'] = 'news/view_all_news';
$route['tin-tuc/(:any).html'] = 'news/view_news/$1';

$route['cod'] = 'guest/cod';
$route['khoa-hoc/xem-tat-ca.html'] = 'course/view_all';
$route['nhom-khoa-hoc/(:any).html'] = 'course/view_group_course/$1';

$route['mua-khoa-hoc-thanh-cong.html'] = 'course/purchase_success_cod';
$route['tim-kiem.html'] = 'course/search'; 

$route['dang-nhap-qua-facebook.html'] = 'guest/login_fb';

$route['khoa-hoc-cua-toi.html'] = 'student';
$route['kich-hoat-khoa-hoc.html'] = 'student/activecod';
$route['thong-bao.html'] = 'notification';
$route['nap-tien-vao-tai-khoan.html'] = 'student/charge'; 
$route['thong-tin-tai-khoan.html'] = 'student/user_info';
$route['lich-su-thanh-toan.html'] = 'student/history_transaction';
$route['bai-tap-luyen-tap.html'] = 'student2/studying/index';
$route['dang-xuat.html'] = 'student/logout'; 

$route['tuyendung/tuyen-02-digital-marketing.html']='about/tuyendung/1';
$route['tuyendung/tuyen-08-thuc-tap-digital-marketing.html']='about/tuyendung/2';
$route['tuyendung/Partner-Relations-Coordinator.html']='about/tuyendung/3';
$route['tuyendung/tuyen-02-telesale.html']='about/tuyendung/5';
$route['tuyendung'] = 'about/tuyendung/0';

$route['tro-giang.html'] = 'tutor/index2';
$route['tro-thanh-giang-vien.html'] = 'teacher';
$route['tri-an-hoc-vien-(:num).html'] = 'news/index/$1';
$route['nhan-qua-tang.html'] = 'student/active_special_cod';
$route['tai-ve.html/(:any)'] = 'course/download/$1';
$route['tai-bai-chua.html/(:any)'] = 'student2/studying/download2/$1';
$route['(:any).html'] = "home/index/$1";

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

