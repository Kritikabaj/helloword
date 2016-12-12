<?

class validateClass {

    public $value = null;

    function __construct($value = null) {
        $this->value = $value;
    }
    
    function isPrime($number = null) {
        $number = ($number!=null)?$number:$this->value;
        return ( !empty($number) && is_numeric($number) && gmp_prob_prime($number)==2)?true:false;        
    }
    function isEven($number = null){
        $number = ($number!=null)?$number:$this->value;
        return ( !empty($number) && is_numeric($number) && ($number%2)==0)?true:false; 
    }
    function isOdd($number = null){
        $number = ($number!=null)?$number:$this->value;
        return ( !empty($number) && is_numeric($number) && ($number%2)!=0)?true:false; 
    }
    function minLength($length, $value = null){
        $value = ($value!=null)?$value:$this->value;
        return ( !empty($value) && strlen($value)>=$length)?true:false;        
    }
    function maxLength($length, $value = null){
        $value = ($value!=null)?$value:$this->value;
        return ( !empty($value) && strlen($value)<=$length)?true:false; 
    }
    function numRange($min, $max, $value = null){
        $this->value = ($value!=null)?$value:$this->value;
        return ( !empty($this->value) && ($this->isNumeric() && $this->maxLength($max) && $this->minLength($min)))?true:false;
    }
    function isAlpha($value = null){
        $value = ($value!=null)?$value:$this->value;
        return ctype_alpha($value);
	}
    function isAlphaNumeric($value = null){
        $value = ($value!=null)?$value:$this->value;
        return ctype_alnum((string) $value);
    }
    function isNumeric($value = null){
        $value = ($value!=null)?$value:$this->value;
        return ( !empty($value) && is_numeric($value))?true:false; 
    }
    function isString($value = null){
        $this->value = ($value!=null)?$value:$this->value;
        return ( !empty($this->value) && is_string($this->value))?true:false;
    }
    function isPassword($value = null){
        $this->value = ($value!=null)?$value:$this->value;
        if(!$this->minLength(7)) return array(103=>"minimum 7 characters required");
        if(!$this->maxLength(20)) return array(104=>"maximum 20 characters required");
        if(!preg_match('/[A-Z]/', $this->value)) return array(108=>"at least 1 uppercase letter required (e.g. ABC)");
        if(!preg_match('/[a-z]/', $this->value)) return array(109=>"at least 1 lowercase letter required (e.g. abc)");
        if(!preg_match('/[0-9]/', $this->value)) return array(110=>"at least 1 number required (e.g. 1234)");
        if(!preg_match('/[#$%^&*!@]/', $this->value)) return array(111=>"at least 1 special character required (e.g. !@#$^&*)");
        return ( !empty($this->value) && ($this->maxLength(20) && $this->minLength(7)))?true:false;
    }
    function isEmail($value = null){
        $value = ($value!=null)?$value:$this->value;
        return ( !empty($value) && filter_var($value, FILTER_VALIDATE_EMAIL))?true:false;
    }
    function isPhone($value = null){
        $this->value = $this->strip_phone(($value!=null)?$value:$this->value);
        return ( !empty($this->value) && ($this->isNumeric() && $this->maxLength(10) && $this->minLength(10)))?true:false;
    }
    function isPin($value = null){
        $this->value = ($value!=null)?$value:$this->value;
        return ( !empty($this->value) && ($this->isNumeric() && $this->maxLength(4) && $this->minLength(4)))?true:false;
    }
    private function strip_phone($value = null){
        $value = ($value!=null)?$value:$this->value;
        return preg_replace("/[^0-9]/", "", urldecode($value));
    }
}
?>