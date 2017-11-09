<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index($page = '') {
        //==========================================================TRANG CHỦ =======================================================
        if (empty($page)) {
            $this->load->helper('cookie');
            if (get_cookie('357a466f0c8940e87378a641479e9ff8d9770318') != '') {
                $temp_pass = get_cookie('357a466f0c8940e87378a641479e9ff8d9770318');
                $member = $this->lib_mod->load_all('student', '', array('temp_pass' => $temp_pass), '', '', '');
                if (count($member)) {
                    $this->session->set_userdata('user_id', $member[0]['id']);
                    $this->session->set_userdata('user_name', $member[0]['name']);
                }
            }
            $data = $this->data;
            $data['group_courses'] = $this->lib_mod->load_all('group_courses', 'id,name,slug', array('status' => 1), 5, '', array('sort' => 'asc'));
            $data['banner_main'] = $this->lib_mod->load_all('banner', '', array('status' => 1, 'type_id' => 0), 1, '', array('sort' => 'desc'));
            $data['banner_1'] = $this->lib_mod->load_all('banner', '', array('status' => 1, 'type_id' => 1), 1, '', array('sort' => 'desc'));
            $data['banner_2'] = $this->lib_mod->load_all('banner', '', array('status' => 1, 'type_id' => 2), 2, '', array('sort' => 'desc'));

            $this->load->model('courses_model');
            $input = array();
            $input1['select_max'] = 'time_start_sale';
            $time_start_sale = $this->courses_model->load_all($input1);

            $input2['select_max'] = 'time_end_sale';
            $time_end_sale = $this->courses_model->load_all($input2);

            if (($time_start_sale[0]['time_start_sale'] - 12 * 3600 < time()) && ($time_end_sale[0]['time_end_sale'] > time())) {
                $data['courses'] = $this->lib_mod->load_all('courses', '', array('status' => 1), 12, '', array('price_sale' => 'asc'));
            } else {
                $data['courses'] = $this->lib_mod->load_all('courses', '', array('status' => 1), 12, '', array('sort' => 'desc'));
            }
            
            $data['rates'] = $this->lib_mod->load_all('rate', '', array('status' => 1), 12, '', array('create_date' => 'desc'), 'name');
            $data['title'] = 'Hệ thống học trực tuyến lakita, cùng bạn vươn xa - lakita.vn';
            $user_id = $this->session->userdata('user_id');
            if (!isset($user_id)) {
                $data['content'] = 'home/index';
            } else {
                $this->_check_exist_login($user_id, false);
                redirect(base_url() . 'khoa-hoc/xem-tat-ca.html');
            }
            $this->load->view('template', $data);
            $this->output->cache(20);
        } else {
            $name = str_replace('.html', '', $page);
            $flag = explode('-', $name);
            $flag = end($flag);
            if (empty($flag)) {
                redirect(site_url());
            }
            $sub_flag = intval(substr($flag, 0, 1));
            $id = intval(substr($flag, 1));

            //================================= CHI TIẾT KHÓA HỌC ============================================
            if ($sub_flag == 2) {
                $curr_courses = $this->lib_mod->detail('courses', array('id' => $id));
                if (count($curr_courses) == 0) {
                    redirect(site_url());
                }

                $data = $this->data;
                $user_id = $this->session->userdata('user_id');
                if (isset($user_id)) {
                    $data['student'] = $this->lib_mod->detail('student', array('id' => $user_id));
                    if (count($this->lib_mod->detail('student_courses', array('student_id' => $user_id, 'courses_id' => $id, 'trial_learn' => 0)))) {
                        $data['first_lesson'] = $this->find_first_lesson($id);
                    }
                    $data['love_course'] = $this->lib_mod->detail('love', array('user_id' => $user_id, 'course_id' => $id));
                }
                $data['first_lesson_trial_learn'] = $this->find_first_lesson_trial_learn($id);

                $videoDemoArr = [
                    '37' => '784', //excel 2010
                    '41' => '435', // 99 tuyet chieu
                    '65' => '497', // 99 thu thuat van phong
                    '67' => '591', // excel a-z
                    '39' => '366', // 18 thu thuat
                    '16' => '175', //excel ke toan
                    '69' => '647', //thu thuat excel
                    '68' => '635', //ke toan (Nhung)
                    '66' => '513', //ke toan Elink
                    '10' => '160', //excel 2007
                    '71' => '696', //báo cáo tài chính elink
                    '72' => '724', //xác định chi phí
                    '73' => '726', //báo cáo tài chính nhungpt
                    '74' => '788', //quyết toán thuế
                    '77' => '872', //quyết toán thuế ThơĐT
                    '78' => '953', //trọn bộ kế toán thuế từ a đến z
                    '80' => '1012', // giám đốc vè quản lý TrungHQ
                    '81' => '1086',
                    '82' => '1087'
                ];
                if (array_key_exists($id, $videoDemoArr)) {
                    $data['id_video_demo'] = $videoDemoArr[$id];
                } else
                    $data['id_video_demo'] = 0;
                $this->session->set_tempdata('is_trial_view', 'yes', 3600);
                $data['group_courses'] = $this->lib_mod->detail('group_courses', array('id' => $curr_courses[0]['group_courses_id']));
                $data['chapter'] = $this->lib_mod->load_all('chapter', '', array("courses_id" => $id, 'status' => 1), '', '', array("sort" => 'asc'));
                $data['rates'] = $this->lib_mod->load_all('rate', '', array("course_id" => $id), '', '', '');
                $speaker = str_replace('-', '', array_filter(explode(',', $curr_courses[0]['speaker_id'])));
                $data['speaker_detail'] = $this->lib_mod->detail('speaker', array('id' => $speaker[0]));
                $data['curr_courses'] = $curr_courses;
                $data['curr_page'] = 'courses';
                $data['curr_id'] = $id;
                $data['other_courses'] = $this->lib_mod->load_all('courses', '', array('status' => 1, 'id !=' => $id), 12, '', array('sort' => 'desc'));
                $data['chapter'] = $this->lib_mod->load_all('chapter', '', array("courses_id" => $id, 'status' => 1), '', '', array("sort" => 'asc'));
                foreach ($data['chapter'] as $key => $value) {
                    $data['all_learn'][$key] = $this->lib_mod->load_all('learn', '', array("chapter_id" => $value['id'], 'status' => 1), '', '', array("sort" => 'asc'));
                }
                $data['content'] = 'course/detail/index.php';
                if (!empty($curr_courses[0]['image_share'])) {
                    $data['image'] = base_url() . $curr_courses[0]['image_share'];
                } else {
                    $data['image'] = \base_url() . $curr_courses[0]['image'];
                }
                $data['title'] = $curr_courses[0]['name'];
                $data['meta_title'] = $curr_courses[0]['name'];
                $data['meta_description'] = $curr_courses[0]['description'];
                $data['meta_keyword'] = $curr_courses[0]['keyword'];

                $data['vote'] = $this->lib_mod->load_all('vote', '', array('courseID' => $id), '', '', array('time' => 'desc'));
                $data['vote_1'] = count($this->lib_mod->detail('vote', array('courseID' => $id, 'vote_star_number' => 1)));
                $data['vote_2'] = count($this->lib_mod->detail('vote', array('courseID' => $id, 'vote_star_number' => 2)));
                $data['vote_3'] = count($this->lib_mod->detail('vote', array('courseID' => $id, 'vote_star_number' => 3)));
                $data['vote_4'] = count($this->lib_mod->detail('vote', array('courseID' => $id, 'vote_star_number' => 4)));
                $data['vote_5'] = count($this->lib_mod->detail('vote', array('courseID' => $id, 'vote_star_number' => 5)));

                $data['rates'] = $this->lib_mod->load_all('rate', '', array('course_id' => $id), '', '', array('name' => 'desc'), 'name');

                $this->session->set_tempdata('curr_course_id', $id, 3600 * 12);
                //$this->session->set_tempdata('curr_course_purchase', 'yes', 1800);
                if (array_key_exists($id, $videoDemoArr))
                    $this->session->set_tempdata('is_playable', $videoDemoArr[$id], 3600);

                //xóa voucher khóa học cũ
                $courseVouched = $this->session->tempdata('courseVouched');
                if (isset($courseVouched) && $courseVouched != $id) {
                    unset($_SESSION['voucherName']);
                    unset($_SESSION['priceVouched']);
                    unset($_SESSION['courseVouched']);
                }
                $this->load->view('template', $data);
            }
            //============================MUA KHÓA HỌC=================================================
            else if ($sub_flag == 3) {
                $curr_courses = $this->lib_mod->detail('courses', array('id' => $id));
                if (count($curr_courses) == 0) {
                    redirect(site_url());
                }
                $data = $this->data;
                $user_id = $this->session->userdata('user_id');

                $payed = $this->lib_mod->load_all('student_courses', 'courses_id', array('student_id' => $user_id, 'courses_id' => $id), $limit = '', $offset = '', $order = '', $group_by = '');
                if (empty($payed)) {
                    $data['payed'] = FALSE;
                } else {
                    $data['payed'] = TRUE;
                    $data['first_lesson'] = $this->find_first_lesson($id);
                }

                if (isset($user_id)) {
                    $data['student'] = $this->lib_mod->load_all('student', '', array('id' => $user_id), '', '', '');
                    $data['solansai'] = count($this->lib_mod->load_all('lichsunapthe', 'id', array('card_amount' => 0, 'user_id' => $user_id), '', '', ''));
                }
                $data['curr_courses'] = $curr_courses;
                $data['title'] = 'Mua khóa học ' . $curr_courses[0]['name'] . '- lakita.vn';
                $data['content'] = 'course/purchase';
                $this->session->set_tempdata('curr_course_id', $id, 3600 * 12);

                //xóa voucher khóa học cũ
                $courseVouched = $this->session->tempdata('courseVouched');
                if (isset($courseVouched) && $courseVouched != $id) {
                    unset($_SESSION['voucherName']);
                    unset($_SESSION['priceVouched']);
                    unset($_SESSION['courseVouched']);
                }

                $this->load->view('template', $data);
            }

            //==============================================TRANG HỌC ============================================
            else if ($sub_flag == 4) {
                $user_id = $this->session->userdata('user_id');
                if (!isset($user_id)) {
                    echo '<script> alert("Bạn không có quyền truy cập vào trang này!");</script>';
                    die;
                    exit;
                }

                //thông tin bài học hiện tại
                $curr_learn = $this->lib_mod->detail('learn', array('id' => $id));
                if (count($curr_learn) == 0) {
                    echo '<script> alert("Video không tồn tại");</script>';
                    die;
                    exit;
                }

                // $course_slug = $this->lib_mod->load_all('courses', 'slug', array("id" => $curr_learn[0]['courses_id']), '1', '', array("sort" => 'asc'));
                //kiểm tra xem học viên đã mua khóa học chưa
                $student_courses = $this->lib_mod->detail('student_courses', array('courses_id' => $curr_learn[0]['courses_id'], 'student_id' => $user_id, 'status' => 1));
                if (!isset($student_courses[0])) {
                    echo '<script> alert("Xin lỗi, bạn chưa mua khóa học này!");</script>';
                    die;
                    exit;
                }

                $trial_learn_view = $this->session->tempdata('is_trial_view');
                if (isset($trial_learn_view)) {
                    $this->session->unset_tempdata('is_trial_view');
                }

                /* =====================================HỌC THỬ===================================== */
//                if ($student_courses[0]['cod'] != '') {
//                    $cod = $this->lib_mod->detail('cod_course', array('cod' => $student_courses[0]['cod']));
//                    if (count($cod) && $cod[0]['trial_learn'] == 1) {
//                        if ((time() - $cod[0]['time']) > (7 * 3600 * 24)) {
//                            echo '<script> alert("Bạn đã hết quyền học thử!"); </script>';
//                            echo "<script>location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
//                            die;
//                        } else {
//                            if ($curr_learn[0]['trial_learn'] == 0) {
//                                echo '<script>alert("Bạn không có quyền học thử bài này"); </script>';
//                                echo "<script>location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
//                                die;
//                            }
//                        }
//                    }
//                }
                /* =====================================HỌC THỬ (HẾT)===================================== */
                $data = $this->data;
                $course = $this->lib_mod->detail('courses', array('id' => $curr_learn[0]['courses_id']));
                //học thử contact cc
                if ($student_courses[0]['trial_learn'] == 1 && !in_array($id, [269, 270, 271, 272, 273, 274, 275])) {
                    $this->session->set_tempdata('curr_course_id', $course[0]['id'], 3600 * 12);
                    echo '<script> alert("Xin lỗi, bạn cần mua khóa học để học được bài này!"); location.href="https://lakita.vn/mua-khoa-hoc.html"; </script>';
                    die;
                    exit;
                }
                if ($student_courses[0]['trial_learn'] == 1)
                    $data['trial_learn'] = 1;
                else
                    $data['trial_learn'] = 0;

                //tên khóa học
                $data['curr_course'] = $course;
                $data['course_name'] = $course[0]['name'];
                $data['course_id'] = $course[0]['id'];

                //tổng số bài học
                $data['total_video'] = count($this->lib_mod->detail('learn', array('courses_id' => $course[0]['id'], 'status' => 1)));

                //thông tin giảng viên
                $firs_courses = array_filter(explode(',', $course[0]['speaker_id']));
                $firs_courses = str_replace('-', '', $firs_courses[0]);
                $data['speaker'] = $this->lib_mod->detail('speaker', array('id' => $firs_courses));

                //tổng số bài đã học
                $data['count_all_learn'] = count($this->lib_mod->detail('student_learn', array('student_id' => $user_id, 'courseID' => $course[0]['id'])));

                $data['learn_note'] = $this->lib_mod->detail('learn_note', array('student_id' => $user_id, 'learn_id' => $id));
                $data['comment'] = $this->lib_mod->load_all('comment', '', array('courses_id' => $curr_learn[0]['courses_id'], 'learn_id' => $id, 'parent' => ''), '', '', array('createdate' => 'desc'));

                //danh sách bài học
                $data['chapter'] = $this->lib_mod->load_all('chapter', '', array("courses_id" => $curr_learn[0]['courses_id'], 'status' => 1), '', '', array("sort" => 'asc'));
                foreach ($data['chapter'] as $key => $value) {
                    $data['all_learn'][$key] = $this->get_course_learn($value['id'], $user_id);
                }
                $data['curr_learn'] = $curr_learn;

                $data['curr_id'] = $id;
                if (!empty($curr_learn[0]['image_share'])) {
                    $data['image'] = 'https://lakita.vn/' . $curr_learn[0]['image_share'];
                } else {
                    $data['image'] = 'https://lakita.vn/' . $curr_learn[0]['thumbnail'];
                }
                $data['title'] = $curr_learn[0]['name'] . ' - lakita.vn';
                $data['meta_title'] = $curr_learn[0]['title'];
                $data['meta_description'] = $curr_learn[0]['description'];
                //$data['meta_keyword'] = $curr_learn[0]['keyword'];
                $data['learn'] = 1;

                $data['learn_slug'] = base_url() . $curr_learn[0]['slug'] . '-4' . $curr_learn[0]['id'] . '.html';

                //cập nhật bài đã học
                $learned = $this->lib_mod->count('student_learn', array('student_id' => $user_id, 'learn_id' => $curr_learn[0]['id']));
                if ($learned == 0) {
                    $this->lib_mod->insert('student_learn', array('student_id' => $user_id, 'learn_id' => $curr_learn[0]['id'], 'status' => 0, 'courseID' => $course[0]['id'], 'time' => time()));
                }
                $data['love_course'] = $this->lib_mod->detail('love', array('user_id' => $user_id, 'course_id' => $course[0]['id']));
                $data['student'] = $this->lib_mod->detail('student', array('id' => $user_id));
                $data['content'] = 'student/learn';

                $data['is_learing'] = 1;
                $this->load->view('template', $data);
            } elseif ($sub_flag == 5) {

                //thông tin bài học hiện tại
                $curr_learn = $this->lib_mod->detail('learn', array('id' => $id));
                $course = $this->lib_mod->detail('courses', array('id' => $curr_learn[0]['courses_id']));
                if (count($curr_learn) == 0) {
                    echo '<script> alert("Video không tồn tại");</script>';
                    die;
                    exit;
                }
                if ($curr_learn[0]['trial_learn'] == 0) {
                    $this->session->set_tempdata('curr_course_id', $course[0]['id'], 3600 * 12);
                    echo '<script> alert("Bạn không có quyền học thử bài này! Vui lòng mua khóa học để học tiếp!"); location.href="https://lakita.vn/mua-khoa-hoc.html"; </script>';
                    die;
                    exit;
                }

                $data = $this->data;

                //tên khóa học
                $data['course_name'] = $course[0]['name'];
                $data['course_id'] = $course[0]['id'];
                $data['curr_course'] = $course;
                $this->session->set_tempdata('curr_course_id', $course[0]['id'], 3600 * 12);
                //tổng số bài học
                $data['total_video'] = count($this->lib_mod->detail('learn', array('courses_id' => $course[0]['id'], 'status' => 1)));

                //thông tin giảng viên
                $firs_courses = array_filter(explode(',', $course[0]['speaker_id']));
                $firs_courses = str_replace('-', '', $firs_courses[0]);
                $data['speaker'] = $this->lib_mod->detail('speaker', array('id' => $firs_courses));

                //danh sách bài học
                $data['chapter'] = $this->lib_mod->load_all('chapter', '', array("courses_id" => $curr_learn[0]['courses_id'], 'status' => 1), '', '', array("sort" => 'asc'));
                foreach ($data['chapter'] as $key => $value) {
                    $data['all_learn'][$key] = $this->get_course_learn($value['id'], 3916);
                }
                $data['curr_learn'] = $curr_learn;
                $data['curr_id'] = $id;
                $data['title'] = $curr_learn[0]['name'] . ' - lakita.vn';
                $data['meta_title'] = $curr_learn[0]['title'];
                $data['meta_description'] = $curr_learn[0]['description'];
                $data['content'] = 'student/trial_learn';

                $this->session->set_tempdata('is_trial_view', 'yes', 3600 * 24);
                $this->load->view('template', $data);
            } elseif ($sub_flag == 6) {
                $user_id = $this->session->userdata('user_id');
                if (!isset($user_id)) {
                    echo '<script> alert("Bạn phải đăng nhập để học thử!"); </script>';
                    echo "<script>location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
                    die;
                    exit;
                }
                //thông tin bài học hiện tại
                $curr_learn = $this->lib_mod->detail('learn', array('id' => $id));
                $course = $this->lib_mod->detail('courses', array('id' => $curr_learn[0]['courses_id']));
                if (count($curr_learn) == 0) {
                    echo '<script> alert("Video không tồn tại");</script>';
                    die;
                    exit;
                }

                $id_trial_learn = $this->session->tempdata('id_trial');
                if (!isset($id_trial_learn)) {
                    echo '<script> alert("Bạn đã hết 10 phút cho lần học thử này, vui lòng quay lại vào lần học thử tiếp theo hoặc mua khóa học để học tiếp!"); </script>';
                    echo "<script>location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
                    die;
                    exit;
                }
                $this->load->model('learn_trial_model');
                //Kiểm tra hạn 7 ngày
                $input1 = array();
                $input1['where'] = array('student_id' => $user_id);
                $input1['order'] = array('time_start' => 'ASC');
                $firt_learn = $this->learn_trial_model->load_all($input1);
                if (empty($firt_learn)) { //chưa học thử lần nào thì insert
                    $insert = array('student_id' => $user_id, 'datetime' => date("d/m/Y", time()),
                        'time_start' => time(), 'id_trial' => $id_trial_learn);
                    $this->learn_trial_model->insert($insert);
                } else {
                    if (time() - $firt_learn[0]['time_start'] - 5 * 24 * 3600 > 0) {
                        echo '<script> alert("Bạn đã hết hạn học thử trong 5 ngày, vui lòng mua khóa học để học tiếp!"); </script>';
                        echo "<script>location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
                        die;
                        exit;
                    }
                    // Kiểm tra 3 lần trong 1 ngày
                    else {
                        $input2 = array();
                        $input2['where'] = array('student_id' => $user_id, 'datetime' => date("d/m/Y", time()));
                        $sum_day = $this->learn_trial_model->load_all($input2);
                        if (count($sum_day) > 1) {
                            echo '<script> alert("Bạn đã hết 10 phút cho lần học thử hôm nay, vui lòng quay lại vào hôm sau hoặc mua khóa học để học tiếp!"); </script>';
                            die;
                            exit;
                        } else {
                            //Kiểm tra 10 phút
                            $input3 = array();
                            $input3['where'] = array('id_trial' => $id_trial_learn);
                            $id_trial_exist = $this->learn_trial_model->load_all($input3);
                            if (empty($id_trial_exist)) { // truy cập lần đầu thì insert dữ liệu
                                $this->learn_trial_model->insert(array('student_id' => $user_id,
                                    'datetime' => date("d/m/Y", time()), 'time_start' => time(), 'id_trial' => $id_trial_learn));
                            } else { // Nếu không thì kiểm tra 5'
                                if (time() - $id_trial_exist[0]['time_start'] - 10 * 60 > 0) {
                                    echo '<script> alert("Bạn đã hết 10 phút cho lần học thử này, vui lòng quay lại vào lần học thử tiếp theo hoặc mua khóa học để học tiếp!"); </script>';
                                    die;
                                    exit;
                                }
                            }
                        }
                    }
                }
                $input = array();
                $input['where'] = array('id_trial' => $id_trial_learn);
                $input['order'] = array('time_start' => 'DESC');
                $remain_time = $this->learn_trial_model->load_all($input);
                $this->load->vars(array('remain_time' => $remain_time[0]['time_start']));

                $data = $this->data;
                //tên khóa học
                $data['course_name'] = $course[0]['name'];
                $data['course_id'] = $course[0]['id'];
                $data['curr_course'] = $course;
                $this->session->set_tempdata('curr_course_id', $course[0]['id'], 3600 * 12);
                //tổng số bài học
                $data['total_video'] = count($this->lib_mod->detail('learn', array('courses_id' => $course[0]['id'], 'status' => 1)));

                //thông tin giảng viên
                $firs_courses = array_filter(explode(',', $course[0]['speaker_id']));
                $firs_courses = str_replace('-', '', $firs_courses[0]);
                $data['speaker'] = $this->lib_mod->detail('speaker', array('id' => $firs_courses));

                //danh sách bài học
                $data['chapter'] = $this->lib_mod->load_all('chapter', '', array("courses_id" => $curr_learn[0]['courses_id'], 'status' => 1), '', '', array("sort" => 'asc'));
                foreach ($data['chapter'] as $key => $value) {
                    $data['all_learn'][$key] = $this->get_course_learn($value['id'], 3916);
                }
                $data['curr_learn'] = $curr_learn;
                $data['curr_id'] = $id;
                $data['title'] = $curr_learn[0]['name'] . ' - lakita.vn';
                $data['meta_title'] = $curr_learn[0]['title'];
                $data['meta_description'] = $curr_learn[0]['description'];
                $data['content'] = 'student/trial_learn_5';
                $data['id_trial_learn'] = $id_trial_learn;
                $this->load->view('template', $data);
            } else {
                show_404();
                exit;
            }
        }
    }

    private function get_course_learn($chapter_id, $student_id) {
        return $this->lib_mod->load_all_join('learn', 'learn.*, student_learn.status as learn_status,student_learn.student_id', 'learn.chapter_id = \'' . $chapter_id . '\' and learn.status = 1 and (student_learn.student_id = \'' . $student_id . '\' or student_learn.student_id is null)', array('student_learn' => array('learn.id = student_learn.learn_id and student_learn.student_id=' . $student_id, 'left')), '', '', '', array('sort' => 'asc'));
    }

    private function find_first_lesson($courseID) {
        $learn_first = $this->lib_mod->load_all('learn', '', array("courses_id" => $courseID, 'status' => 1), '', '', array("sort" => 'asc'));
        return isset($learn_first[0]) ? (base_url() . $learn_first[0]['slug'] . '-4' . $learn_first[0]['id'] . '.html') : '';
    }

    private function find_first_lesson_trial_learn($courseID) {
        $learn_first = $this->lib_mod->load_all('learn', '', array("courses_id" => $courseID, 'status' => 1), '', '', array("sort" => 'asc'));
        return isset($learn_first[0]) ? (base_url() . $learn_first[0]['slug'] . '-6' . $learn_first[0]['id'] . '.html') : '';
    }

    private function find_first_lesson_id($courseID) {
        $learn_first = $this->lib_mod->load_all('learn', '', array("courses_id" => $courseID, 'status' => 1), '', '', array("sort" => 'asc'));
        return isset($learn_first[0]) ? $learn_first[0]['id'] : 0;
    }

}
