<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validate extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->import('classes','validate');
    }

    function index_get() {
        $this->load->helper('url');
        $this->load->view('v1/user/contact/validate');
    }

    function phone_post($phone = null) {
        $phone = $this->post('phone'); //($phone==null)?$this->post('phone'):$phone;
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

    function email_post($email = null) {
        $email = $this->post('email'); //($email==null)?$this->post('email'):$email;
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

    function password_get() {
        $this->response(['error' => '204', 'message' => 'POST Method Required']);
    }

}
