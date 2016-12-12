<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('register_model');
        $this->import('classes','validate');
        $this->import('libraries','user');
    }

    function index_get() {
        $this->load->view('v1/register');
    }

    function validate_invitation_code_get() {

        $code = $this->get('code');
        if(empty($code)) $code = $this->get('validate_invitation_code');

        if(empty($code))
            $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = $this->register_model->get_invitation_code($code);

        if(!$validate)
            $this->response(['error' => '102', 'message' => 'Invalid Invitation Code']);

        $data = new userObject();
//        $data->invitation_code = $code;
        $data = $validate;

        $this->response(['success'=>'Invitation Code is Valid', 'data'=>array("InvitationCode"=>$data)]);

    }

    function validate_customer_number_get() {

        $number = $this->get('number');
        if(empty($number)) $number = $this->get('validate_customer_number');

        if(empty($number))
            $this->response(['error' => '101', 'message' => 'Invalid Entry']);

        $validate = $this->register_model->get_customer_number($number);
        
        if(!$validate)
            $this->response(['error' => '102', 'message' => 'Invalid Customer Number']);
        
        $data = new userObject();
//        $data->customer_number = $number;
        $data = $validate;

        $this->response(['success'=>'Customer Number is Valid', 'data'=>array("CustomerNumber"=>$data)]);

    }

    function create_user_get() {
        $this->response(['error' => '204', 'message' => 'POST Method Required']);
    }

    function create_user_post() {
//        $params = $this->post('first_name');
        // default simulation data
        $params = new userObject();
        $params->invitation_code = $this->post('invitation_code');
        $params->customer_number = '';
        $params->first_name = $this->post('first_name'); //'john';
        $params->last_name = $this->post('last_name'); //'smith';
        $params->phone = $this->post('phone'); //'(561) 555-1234';
        $params->email = $this->post('email'); //'webteam@hotwiremail.com';
        $params->password = $this->post('password'); //'aBc3d7*8gL';
        $params->pin = $this->post('pin'); //'1234';
        $params->head_of_household = '1';
        
        $verify = ($this->post('verify')?true:false);
            
        $data = new userObject();
        foreach((array) $data as $k => $v){
            $data->{$k} = $params->{$k};
            if(empty($data->{$k}) && $k!='id' && $k!='customer_number' && $k!='invitation_code' && $k!='property_address_id' && $k!='property_object' && $k!='property_name')
                $this->response(['error' => '101', 'message' => 'Invalid Entry - '.$k]);
//                $this->response(['status' => FALSE, 'error' => '101', 'message' => 'Invalid Entry - '.$k], REST_Controller::HTTP_OK);
        }

        $validate = new validateClass();

        if( !$validate->isEmail($data->email))
            $this->response(['error' => '102', 'message' => 'Invalid Email Address']);

        if( !$validate->isPhone($data->phone))
            $this->response(['error' => '102', 'message' => 'Invalid Phone Number']);

        $data->phone = $validate->value;

        // synacor
        // if(synacor->create_user($data)) {

        $result = $this->register_model->create_user($data);
/*        if(isset($result['user_id'])&&$verify){
            $this->load_library('verify');
            $this->verify->send($data->email);
            $this->verify->send($data->phone);
        }
*/
        // perform_login();
        
        $this->response(['success'=>'Registration Successful', 'data'=>array("User"=>$result)]);
//        $this->response(['status' => TRUE, 'success'=>'Registration Successful', 'data'=>$data], REST_Controller::HTTP_OK);

    }

}
