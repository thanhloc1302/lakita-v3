<?php

class Courses_model extends MY_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->table = 'courses';
    }

    function find_course_id($course_code) {
        $input2 = array();
        $input2['where'] = array('course_code' => $course_code);
        $courses = $this->load_all($input2);
        if (!empty($courses)) {
            return $courses[0]['id'];
        }
        return 10;
    }

    function find_course_price($course_code) {
        $input2 = array();
        $input2['where'] = array('course_code' => $course_code);
        $courses = $this->load_all($input2);
        if (!empty($courses)) {
            return str_replace('.', '', $courses[0]['price_root2']);
        }
        return 600000;
    }

    function find_price_course_event($course_code) {
        $input2 = array();
        $input2['where'] = array('course_code' => $course_code);
        $input2['select'] = 'price_sale';
        $courses = $this->load_all($input2);
        if (!empty($courses)) {
            return str_replace('.', '', $courses[0]['price_sale']);
        }
        return 295000;
    }

    function get_all_price_sale() {
        $result = array();
        $input2 = array();
        $input2['select'] = 'course_code, price_sale';
        $input2['where'] = array('status' => 1);
        $courses = $this->load_all($input2);
        foreach ($courses as $value) {
            $result[$value['course_code']] = $value['price_sale'];
        }
        return $result;
    }

}
