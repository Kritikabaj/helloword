<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends REST_Controller {

    public function index_get() {
        $this->load->helper('url');
        $this->load->view('v1/index');
    }
}
