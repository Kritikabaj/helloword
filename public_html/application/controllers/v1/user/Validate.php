<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validate extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->import('classes','validate');
    }

    function index_get() {
        $this->load->helper('url');
        $this->load->view('v1/user/validate');
    }

    function username_post() {
        $username = $this->get_input('username');
        if(empty($username)) $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = new validateClass($username);
        if( !$validate->isString()) $this->response(['error' => '102', 'message' => 'Invalid Username']);

        $this->response(['success'=>'Username is Valid', 'data'=>array("Username"=>$username)]);

    }

    function password_get() {
        $this->response(['error' => '204', 'message' => 'POST Method Required']);
    }

    function password_post() {
        $password = $this->post('password');
        if(empty($password)) $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = new validateClass($password);
        $val = $validate->isPassword();
        if(is_array($val)) $this->response(['error' => key($val), 'message' => $val[key($val)]]);

        $this->response(['success'=>'Password is Valid', 'data'=>'']);

    }

    function pin_post() {
        $pin = $this->post('pin');
        if(empty($pin)) $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = new validateClass($pin);
        if( !$validate->isPin()) $this->response(['error' => '102', 'message' => 'Invalid PIN']);

        $this->response(['success'=>'PIN is Valid', 'data'=>array("Pin"=>$pin)]);

    }    

}
