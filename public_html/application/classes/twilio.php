<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once APPPATH.'/third_party/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;

class twilio {

    private $sid = TWILIO_SID;
    private $token = TWILIO_TOKEN;
    private $client = null;

    function __construct() {
        $this->client = new Client($this->sid, $this->token);
    }

    function send_message($to, $from, $message, $media = "https://gethotwired.com/images/logo.png") {
        $this->client->messages->create(
            $to,
            array(
                'from' => $from,
                'body' => $message,
                //'mediaUrl' => $media,
            )
        );
    }
}