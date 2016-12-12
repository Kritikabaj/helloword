<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends REST_Controller {

    public function index_get($contact_id = null, $user_id = null) {
        if(empty($contact_id)){
            $this->load->helper('url');
            $this->load->view('v1/user/contact/index');
        } else {
            $this->load->model('contact_model');
            $contact = $this->contact_model->get_contact($contact_id);

            $this->response(['success'=>'Got user/contact', 'data'=>array("Contact"=>array($contact))]);
        }
    }

    public function index_put($contact_id = null, $user_id = null) {
        $this->load->model('contact_model');
        $contact = $this->contact_model->update_contact($contact_id, $this->put('content'));
        if(empty($contact))
            $this->response(['error'=>'101', 'message'=>'Failed to save contact information']);

        $this->response(['success'=>'Successfully saved contact information', 'data'=>array("Contact"=>array($contact))]);
    }

}
