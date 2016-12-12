<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo json_encode(array('error'=>$heading, 'type'=>'db', 'message'=>strip_tags($message)));