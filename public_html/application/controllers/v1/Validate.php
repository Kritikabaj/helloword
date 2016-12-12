<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validate extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->import('classes','validate');
    }

    function index_get() {
        $this->load->view('validate');
    }

    function phone_get($phone = null) {
        //$phone = $this->get_input('phone');
//        $exists = $this->get('exists');
        if(empty($phone)) $this->response(['error'=>'101', 'message'=>'Invalid Entry']);

        $validate = new validateClass($phone);
        if( !$validate->isPhone()) $this->response(['error'=>'102', 'message'=>'Invalid Phone Number']);
        $phone = $validate->value;

//        if(!empty($exists)){
            $this->load->model('contact_model');
            $result = $this->contact_model->check_contact_exists($phone);
            if($result['result']=='1')
                $this->response(['error' => '112', 'message' => 'Phone Number is already used']);
//        }

        $this->response(['success'=>'Phone Number is Valid', 'data'=>array("Phone"=>$validate->value)]);
    }

    function email_get($email = null) {
        //$email = $this->get_input('email');
//        $exists = $this->get('exists');
        if(empty($email)) $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = new validateClass($email);
        if( !$validate->isEmail()) $this->response(['error' => '102', 'message' => 'Invalid Email Address']);

//        if(!empty($exists)){
            $this->load->model('contact_model');
            $result = $this->contact_model->check_contact_exists($email);
            if($result['result']=='1')
                $this->response(['error' => '112', 'message' => 'Email Address is already used']);
//        }

        $this->response(['success'=>'Email Address is Valid', 'data'=>array("Email"=>$email)]);

    }

    function username_get() {
        $username = $this->get_input('username');
        if(empty($username)) $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = new validateClass($username);
        if( !$validate->isString()) $this->response(['error' => '102', 'message' => 'Invalid Username']);

        $this->response(['success'=>'Username is Valid', 'data'=>array("Username"=>$username)]);

    }

    function password_get() {
        $this->response(['error' => '204', 'message' => 'POST Method Required'], REST_Controller::HTTP_OK);
    }

    function password_post() {
        $password = $this->post('password');
        if(empty($password)) $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = new validateClass($password);
        $val = $validate->isPassword();
        if(is_array($val)) $this->response(['error' => key($val), 'message' => $val[key($val)]]);

        $this->response(['success'=>'Password is Valid', 'data'=>'']);

    }

    function pin_get() {
        $pin = $this->get_input('pin');
        if(empty($pin)) $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = new validateClass($pin);
        if( !$validate->isPin()) $this->response(['error' => '102', 'message' => 'Invalid PIN']);

        $this->response(['success'=>'PIN is Valid', 'data'=>array("Pin"=>$pin)]);

    }    

}
