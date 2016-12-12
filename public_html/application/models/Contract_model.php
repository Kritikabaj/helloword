<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contract_model extends SP_Model {

    function __construct() {
        $this->load->database(); 
    }

    function get_privacy_policy($language_code = 'en') {
        //if(empty($input)) return false;
	return $this->sp_call_single_result("SP_GET_CONTRACT_PP('".$language_code."')");
    }
    function get_terms_of_service($language_code = 'en'){
        return $this->sp_call_single_result("SP_GET_CONTRACT_TOS('".$language_code."')");
    }
    
    function get_contract($contract_type , $language_code = 'en')
	{ 
        switch($contract_type){
            case "TOS":
                return $this->sp_call_single_result("SP_GET_CONTRACT_TOS('".$language_code."')");
                break;
             case "PP":
                return $this->sp_call_single_result("SP_GET_CONTRACT_PP('".$language_code."')"); 
                break;
            }
        }
}
