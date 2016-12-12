<?

class verifyLibrary {

    function __construct() {
        $this->parent = & get_instance();
        $this->parent->load->model('verify_model');
        $this->parent->import('classes','validate');
    }

    function send($input = null) {
        if(empty($input)) return array('error' => '101', 'message' => 'Invalid Entry');

        $result = $this->parent->verify_model->generate_verify_code($input);

        if(isset($result['verified']))
			return array('error'=>'205', 'message'=>$input.' has already been verified');

        if(!isset($result['code']))
			return array('error'=>'204', 'message'=>'failed to generate verification code');
        
        $code = $result['code'];
        $message = "Your Hotwire Communications verification code:\n".$code."\n\nThis code will expire in 20 minutes from time of receipt.";

        $validate = new validateClass($input);

        if( $validate->isPhone($input)){
            $this->parent->import('classes','twilio');

            $client = new twilio();
            $client->send_message("+1".$input, '+19542800017', $message);
        }
        elseif( $validate->isEmail($input)){
            mail($input,"Verification Code",$message);
        }
        else return array('error'=>'102', 'message'=>'Invalid Input');
        
        return array('success'=>"Verification Code has sent to '".$input."'", 'data'=>array("Code"=>$code));

    }

    function email($email, $code) {
        if(empty($email)||empty($code)) return array('error' => '101', 'message' => 'Invalid Entry');

        if(!$result = $this->parent->verify_model->check_verify_code($code, $email))
			return array('error' => '501', 'message' => 'Internal Connection Issue');

        if(isset($result['expired'])&&$result['expired']==1)
            return array('error'=>'212', 'message'=>'Verification code is expired');

        if(isset($result['verified'])&&$result['verified']==0)
            return array('error'=>'213', 'message'=>'Failed to verify email address');

        return array('success'=>'Email Verified');

    }
    
    function phone($phone, $code) {
        if(empty($phone)||empty($code)) return array('error' => '101', 'message' => 'Invalid Entry');

        if(!$result = $this->parent->verify_model->check_verify_code($code, $phone))
			return array('error' => '501', 'message' => 'Internal Connection Issue');

        if(isset($result['expired'])&&$result['expired']==1)
			return array('error'=>'212', 'message'=>'Verification code is expired');

        if(isset($result['verified'])&&$result['verified']==0)
			return array('error'=>'213', 'message'=>'Failed to verify phone number');

        return array('success'=>'Phone Verified');

    }

}
?>