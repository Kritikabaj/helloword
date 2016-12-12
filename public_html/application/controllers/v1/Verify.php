<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load_library('verify');
    }

    function index_get() {
        $this->load->view('verify');
    }

    function send_post() {
        $this->send_get($this->post('send'));
    }

    function send_get($input = null) {
        $this->response($this->verify->send($input));
    }

    function email_get($email = null, $code = null) {
        $this->response($this->verify->email($email, $code));
    }
    
    function phone_get($phone = null, $code = null) {
        $this->response($this->verify->phone($phone, $code));
    }

}
