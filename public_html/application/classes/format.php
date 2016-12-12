<?

class formatClass {

    public $value = null;

    function __construct($value = null) {
        $this->value = $value;
    }
    
    function stripPhone($value = null){
        $this->value = ($value!=null)?$value:$this->value;
        return preg_replace("/[^0-9]/", "", urldecode($this->value));
    }
    function formatPhone($value = null){
        $this->value = $this->stripPhone($value);
        return (strlen($this->value) != 10)?$this->value:preg_replace("/(\d{3})(\d{3})(\d{4})/", "($1) $2-$3", $this->value);
    }
}
?>