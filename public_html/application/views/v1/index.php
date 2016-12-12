<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - Testing Server - V1</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server - V1</span>
    </span></h1>

    <div id="body">

<h2><a href="<?php echo site_url('v1/user'); ?>">User</a></h2>

<h2><a href="<?php echo site_url('v1/user/validate'); ?>">User/Validate</a></h2>
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

<h2><a href="<?php echo site_url('v1/user/contact'); ?>">User/Contact</a></h2>

<h2><a href="<?php echo site_url('v1/user/contact/validate'); ?>">User/Contact/Validate</a></h2>
    <ul>
        <li>
            /v1/user/contact/validate/phone - [POST]
        </li>
        <li>
            /v1/user/contact/validate/email - [POST]
        </li>
    </ul>

<h2><a href="<?php echo site_url('v1/user/contact/verify'); ?>">User/Contact/Verify</a></h2>
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


<h2><a href="<?php echo site_url('v1/register'); ?>">Register</a></h2>
    <ul>
        <li>
            /v1/register/validate_invitation_code - [GET]
        </li>
        <li>
            /v1/register/validate_customer_number - [GET]
        </li>
        <li>
            /v1/register/create_user - [POST]
        </li>
    </ul>
<? /*
<h2><a href="<?php echo site_url('v1/validate'); ?>">Validate</a></h2>
    <ul>
        <li>
            /v1/validate/phone - [GET]
        </li>
        <li>
            /v1/validate/email - [GET]
        </li>
        <li>
            /v1/validate/username - [GET]
        </li>
        <li>
            /v1/validate/password - [POST]
        </li>
        <li>
            /v1/validate/pin - [GET]
        </li>
    </ul>

<h2><a href="<?php echo site_url('v1/verify'); ?>">Verify</a></h2>
    <ul>
        <li>
            /v1/verify/send - [GET]
        </li>
        <li>
            /v1/verify/phone - [GET]
        </li>
        <li>
            /v1/verify/email - [GET]
        </li>
    </ul>
*/ ?>

    </div>


    <p class="footer"></p>
</div>


</body>
</html>
