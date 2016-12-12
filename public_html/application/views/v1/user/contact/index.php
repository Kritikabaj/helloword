<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - Testing Server - User/Contact</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server - User/Contact</span>
    </span></h1>

    <div id="body">

<h2><a href="<?php echo site_url('v1/user/contact/validate'); ?>">Validate</a></h2>
    <ul>
        <li>
            /v1/user/contact/validate/phone - [POST]
        </li>
        <li>
            /v1/user/contact/validate/email - [POST]
        </li>
    </ul>

<h2><a href="<?php echo site_url('v1/user/contact/verify'); ?>">Verify</a></h2>
    <ul>
        <li>
            /v1/user/contact/verify/send - [GET/POST]
        </li>
        <li>
            /v1/user/contact/verify/phone - [GET]
        </li>
        <li>
            /v1/user/contact/verify/email - [GET]
        </li>
    </ul>


    </div>

    <p class="footer"></p>
</div>

</body>
</html>
