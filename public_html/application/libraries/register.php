<?

class registerObject {

    public  $invitation_code = '',
            $customer_number = '',
            $first_name = '',
            $last_name = '',
            $phone = '',
            $email = '',
            $password = '',
            $pin = '',
            $property_id = '',
            $head_of_household = '';

    function __construct() {
        return $this;
    }

    function set($field, $input = null) { $this->{$field} = $input; }
    function get($field){ return $this->{$field}; }
    function reset(){ foreach((array) $this as $k => $v){ $this->{$k} = ''; } }

}

?>