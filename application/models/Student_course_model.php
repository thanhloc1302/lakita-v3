<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student_courses
 *
 * @author phong
 */
class Student_course_model extends MY_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->table = 'student_courses';
    }

}
