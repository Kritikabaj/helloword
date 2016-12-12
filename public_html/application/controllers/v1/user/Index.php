<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends REST_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index_get($id = null) {
        if(empty($id)){
            $this->load->helper('url');
            $this->load->view('v1/user/index');
        } else {
            $this->load->model('user_model');
            $this->load->model('contact_model');
            $user = $this->user_model->get_user($id);
            $user['contacts'] = $this->contact_model->get_contacts($id);
            $this->response(['success'=>'Got user', 'data'=>array("User"=>$user)]);
        }
    }

    public function index_put($contact_id = null, $user_id = null) {
        $this->load->model('contact_model');
        $contact = $this->contact_model->update_user($contact_id, $this->put('content'));
        if(empty($contact))
            $this->response(['error'=>'101', 'message'=>'Failed to save contact information']);

        $this->response(['success'=>'Successfully saved contact information', 'data'=>array("Contact"=>array($contact))]);
    }

    public function index_post() {
        $this->load->helper('url');
        $this->load->view('v1/user/index');
    }

    
}
