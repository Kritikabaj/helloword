<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends SP_Model {

    function __construct() {
        $this->load->database(); 
    }

    function get_invitation_code($code = null) {
        if(empty($code)) return false;
		return $this->sp_call_single_result("SP_Get_InvitationCode('".$code."')"); //78846
    }
    
    function get_customer_number($number = null) {
        if(empty($number)) return false;
		return $this->sp_call_single_result("SP_Get_CustomerNumber('".$number."', @error)");
    }

    function create_user($params) {
        if(empty($params)) return false;

		$invite_code_id = 0;
		$cloud_id = 1;
		$mod_person_id = 1;
		$error_return = '';

		return $this->sp_call_single_result("SP_INSERT_ACCOUNT_REGISTRATION(
								  '".$params->invitation_code."',
								  '".$params->first_name."',
								  '".$params->last_name."',
								  '".$params->email."',
								  '".$params->phone."',
								  '".$params->pin."',
								  '".$params->password."',
								  '".$cloud_id."',
								  '".$params->head_of_household."',
								  '".$mod_person_id."')"); //$query;

    }

}
