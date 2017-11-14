<?php

class Ci_sessions_model extends MY_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->table = 'ci_sessions';
    }
}

