<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract  extends REST_Controller {

    function __construct() {
        parent::__construct();
    }

    function index_get() {
           $this->load->helper('url');
        $this->load->view('v1/contract/index');
    }
    
    function privacy_policy_get() { 
    $lang = $this->get_input('lang');
    $lang_array = array('en','spn');
     if(!in_array($lang,$lang_array)) $this->response(['error'=>'101', 'message'=>'Invalid Entry']);   
        
        $this->load->model('contract_model');
        $data =  $this->contract_model->get_privacy_policy($lang);
        $this->response(['success'=>'True', 'data'=>array("Privecy Policy"=>$data['text'])]);
    }
    
    function terms_of_service_get() { 
        $lang = $this->get_input('lang');
        $lang_array = array('en','spn');
        if(!in_array($lang,$lang_array)) $this->response(['error'=>'101', 'message'=>'Invalid Entry']); 
        $this->load->model('contract_model');
        $data =  $this->contract_model->get_terms_of_service($lang);
        $this->response(['success'=>'True', 'data'=>array("Terms of Service"=>$data['text'])]);
    }
    public function retrieve_get($contract_type) { 
        if(empty($contract_type)) $this->response(['error'=>'101', 'message'=>'Invalid Entry']);
        $this->load->model('Contract_model');  		
	$data=$this->Contract_model->get_contract($contract_type);
	$this->response(['success'=>'True','data'=>array($data['text'])]);
    }
}
