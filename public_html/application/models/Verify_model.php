<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Verify_model extends SP_Model {

    function __construct() {
        $this->load->database();
    }

    function generate_verify_code($input = null) {
        if(empty($input)) return false;
		return $this->sp_call_single_result("SP_Generate_VerifyCode('".$input."')");
    }

    function check_verify_code($code = null, $input = null) {
        if(empty($code)||empty($input)) return false;
		return $this->sp_call_single_result("SP_Check_VerifyCode('".$code."', '".$input."')");
    }

}
