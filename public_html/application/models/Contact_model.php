<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends SP_Model {

    function __construct() {
        $this->load->database(); 
    }

    function check_contact_exists($input = null) {
        if(empty($input)) return false;
		return $this->sp_call_single_result("SP_Check_ContactExists('".$input."')");
    }

    function get_contact($input = null) {
        if(empty($input)) return false;
		return $this->sp_call_single_result("SP_Get_Contact('".$input."')");
    }

	function get_contacts($input = null) {
        if(empty($input)) return false;
		return $this->sp_call_multiple_results("SP_Get_Contacts('".$input."')");
    }

    function update_contact($id = null, $content = null) {
        if(empty($id)||empty($content)) return false;
		return $this->sp_call_single_result("SP_Update_Contact('".$id."', '".$content."')");
    }

}
