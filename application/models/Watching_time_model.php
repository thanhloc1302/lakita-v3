<?php

class Watching_time_model extends MY_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->table = 'watching_time';
    }
}
