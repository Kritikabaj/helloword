<?

class userObject {

    public  $id = '',
            $invitation_code = '',
            $customer_number = '',
            $first_name = '',
            $last_name = '',
            $phone = '',
            $email = '',
            $password = '',
            $pin = '',
            $head_of_household = '',
            $property_name = '',
            $property_address_id = '',
            $property_object = '';

    function __construct() {
        return $this;
    }

    function set($field, $input = null) { $this->{$field} = $input; }
    function get($field){ return $this->{$field}; }
    function reset(){ foreach((array) $this as $k => $v){ $this->{$k} = ''; } }

}

?>