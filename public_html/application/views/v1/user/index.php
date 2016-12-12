<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - Testing Server - User</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server - User</span>
    </span></h1>

    <div id="body">

<h2><a href="<?php echo site_url('v1/user/contact'); ?>">Contact</a></h2>
    <ul>
        <li>
            /v1/user/contact/validate
        </li>
        <li>
            /v1/user/contact/verify
        </li>
    </ul>

<h2><a href="<?php echo site_url('v1/user/validate'); ?>">Validate</a></h2>
    <ul>
        <li>
            /v1/user/validate/username - [POST]
        </li>
        <li>
            /v1/user/validate/password - [POST]
        </li>
        <li>
            /v1/user/validate/pin - [POST]
        </li>
    </ul>


    </div>

    <p class="footer"></p>
</div>

</body>
</html>
