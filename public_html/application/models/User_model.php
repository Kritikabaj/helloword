<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends SP_Model {

    function __construct() {
        $this->load->database();
    }

    function get_user($input = null) {
        if(empty($input)) return false;
		return $this->sp_call_single_result("SP_Get_User('".$input."')");
    }

    function update_user($input = null) {
        if(empty($input)) return false;
		return $this->sp_call_single_result("SP_Update_User('".$input."')");
    }

	function get_contacts($input = null) {
        if(empty($input)) return false;
		return $this->sp_call_multiple_results("SP_Get_Contacts('".$input."')");
    }

}
