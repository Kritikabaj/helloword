<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - Register - Testing Server</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server - Register</span>
    </span></h1>

    <div id="body">

<h2>Register</h2>

        <p>
            /register/validate_invitation_code - [GET]
        </p>

        <ol>
            <li><a target="_blank" href="<?php echo 'register/validate_invitation_code/format/json'; ?>">validate_invitation_code</a> - without code - JSON</li>
            <li><a target="_blank" href="<?php echo 'register/validate_invitation_code/78846/format/json'; ?>">validate_invitation_code</a> - with code - JSON</li>
            <li><a target="_blank" href="<?php echo 'register/validate_invitation_code/format/xml'; ?>">validate_invitation_code</a> - without code - XML</li>
            <li><a target="_blank" href="<?php echo 'register/validate_invitation_code/78846/format/xml'; ?>">validate_invitation_code</a> - with code - XML</li>
            <li><a target="_blank" href="<?php echo 'register/validate_invitation_code/format/generic'; ?>">validate_invitation_code</a> - without code - generic (JSON)</li>
            <li><a target="_blank" href="<?php echo 'register/validate_invitation_code/78846/format/generic'; ?>">validate_invitation_code</a> - with code - generic (JSON)</li>
            <li><a id="ajax" href="<?php echo 'register/validate_invitation_code/78846/format/generic'; ?>">validate_invitation_code</a> - JSON (AJAX request)</li>

        </ol>

        <p>
            /register/validate_customer_number - [GET]
        </p>

        <ol>
            <li><a target="_blank" href="<?php echo 'register/validate_customer_number/format/json'; ?>">validate_customer_number</a> - without number - JSON</li>
            <li><a target="_blank" href="<?php echo 'register/validate_customer_number/3767823652323/format/json'; ?>">validate_customer_number</a> - with number - JSON</li>
            <li><a target="_blank" href="<?php echo 'register/validate_customer_number/format/xml'; ?>">validate_customer_number</a> - without number - XML</li>
            <li><a target="_blank" href="<?php echo 'register/validate_customer_number/979ewr66dfhsk/format/xml'; ?>">validate_customer_number</a> - with number - XML</li>
            <li><a target="_blank" href="<?php echo 'register/validate_customer_number/format/generic'; ?>">validate_customer_number</a> - without number - generic (JSON)</li>
            <li><a target="_blank" href="<?php echo 'register/validate_customer_number/979ewr66dfhsk/format/generic'; ?>">validate_customer_number</a> - with number - generic (JSON)</li>

        </ol>

        <p>
            /register/create_user - [GET]
        </p>

        <ol>
            <li><a target="_blank" href="<?php echo 'register/create_user/format/json'; ?>">create_user</a> - POST Method Required - JSON</li>
            <li><a target="_blank" href="<?php echo 'register/create_user/format/xml'; ?>">create_user</a> - POST Method Required - XML</li>
            <li><a target="_blank" href="<?php echo 'register/create_user/format/generic'; ?>">create_user</a> - POST Method Required - generic (JSON)</li>

        </ol>

        <p>
            /register/create_user - [POST] (simulated)
        </p>
        
        <form id="create_user" action="" method="POST">
            <table>
                <tr>
                    <td>Invitation Code: </td>
                    <td><input type="text" name="invitation_code" id="invitation_code" value="935155"></td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td><input type="text" name="first_name" id="first_name" value="John"></td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" name="last_name" id="last_name" value="Smith"></td>
                </tr>
                <tr>
                    <td>Phone Number: </td>
                    <td><input type="text" name="phone" id="phone" value="(561) 555-1234"></td>
                </tr>
                <tr>
                    <td>Email Address: </td>
                    <td><input type="text" name="email" id="email" value="webteam@hotwiremail.com"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="text" name="password" id="password" value="aBc3d7*8gL"></td>
                </tr>
                <tr>
                    <td>PIN: </td>
                    <td><input type="text" name="pin" id="pin" value="1234"></td>
                </tr>
                <tr>
                    <td>Send Verification Codes: </td>
                    <td><input type="checkbox" name="verify" id="verify" value="true"></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="form_feedback">
                        <p class="bg-danger text-danger"><i>(Default information provided)</i><!-- Please fill in the required fields highlighted in red --></p>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="submit" value="Create User"></td>
                </tr>
            </table>
        </form>

</div>

<script src="https://code.jquery.com/jquery-1.12.0.js"></script>

<script>

        jQuery.fn.extend({
          setError: function(msg) {
              this.children().removeClass('bg-warning').removeClass('text-warning')
                             .removeClass('bg-success').removeClass('text-success')
                             .removeClass('bg-info').removeClass('text-info')
                             .addClass('bg-danger').addClass('text-danger').html(msg);
              this.show().removeClass('hidden');
          },
          setWarning: function(msg) {
              this.children().removeClass('bg-danger').removeClass('text-danger')
                             .removeClass('bg-success').removeClass('text-success')
                             .removeClass('bg-info').removeClass('text-info')
                             .addClass('bg-warning').addClass('text-warning').html(msg);
              this.show().removeClass('hidden');
          },
          setSuccess: function(msg) {
              this.children().removeClass('bg-danger').removeClass('text-danger')
                             .removeClass('bg-warning').removeClass('text-warning')
                             .removeClass('bg-info').removeClass('text-info')
                             .addClass('bg-success').addClass('text-success').html(msg);
              this.show().removeClass('hidden');
          },
          setInfo: function(msg) {
              this.children().removeClass('bg-danger').removeClass('text-danger')
                             .removeClass('bg-warning').removeClass('text-warning')
                             .removeClass('bg-success').removeClass('text-success')
                             .addClass('bg-info').addClass('text-info').html(msg);
              this.show().removeClass('hidden');
          }
        });

$(document)
	.ready(function() { })
    .on('click', '#submit', function(){
        $('#form_feedback').setInfo('Saving data...');
        $('#form_feedback').show().removeClass('hidden');

		var data = $('#create_user').serializeArray();

/*        $.post('/v1/register/create_user/format/json',data,function(req) {
            if (req.success){ //"The user has been saved successfully - "+
                $('#form_feedback').setSuccess(req.success);
                $(data).each(function(i, field){
                    $('#'+field.name).val(req.data[field.name]);
                });
            } else { //"There was an error in submission. - "+
                $('#form_feedback').setError(req.error+" - "+req.message);
            }
		});*/

        $.post('/v1/register/create_user/format/generic',data,function(req) {
            if (req.Success){ //"The user has been saved successfully - "+
                $('#form_feedback').setSuccess(req.Message);
                $(data).each(function(i, field){
                    if (field.name=='phone') {
                        $('#'+field.name).val(req.Data.User[field.name]);
                    }
                });
                $('#form_feedback').children().append("<br>");
                if ($('#verify')[0].checked == true) {
                    $.get('/v1/verify/send/'+$('#email').val()+'/format/generic',data,function(req) {
                        if (req.Success){ 
                            $('#form_feedback').children().append(req.Message);
                        } else {
                            $('#form_feedback').children().append(req.ErrorCode+" - "+req.Message);
                        }
                        $('#form_feedback').children().append("<br>");
                    });

                    $.get('/v1/verify/send/'+$('#phone').val()+'/format/generic',{ phone: $('#phone').val() },function(req) {
                        if (req.Success){ 
                            $('#form_feedback').children().append(req.Message);
                        } else {
                            $('#form_feedback').children().append(req.ErrorCode+" - "+req.Message);
                        }
                        $('#form_feedback').children().append("<br>");
                    });
            
                }
            } else { //"There was an error in submission. - "+
                $('#form_feedback').setError(req.ErrorCode+" - "+req.Message);
            }
		});
 
    });

    // Create an 'App' namespace
    var App = App || {};

    // Basic rest module using an IIFE as a way of enclosing private variables
    App.rest = (function restModule(window) {
        // Fields
        var _alert = window.alert;
        var _JSON = window.JSON;

        // Cache the jQuery selector
        var _$ajax = null;

        // Cache the jQuery object
        var $ = null;

        // Methods (private)

        /**
         * Called on Ajax done
         *
         * @return {undefined}
         */
        function _ajaxDone(data) {
            // The 'data' parameter is an array of objects that can be iterated over
            _alert(_JSON.stringify(data, null, 2));
        }

        /**
         * Called on Ajax fail
         *
         * @return {undefined}
         */
        function _ajaxFail() {
            _alert('Oh no! A problem with the Ajax request!');
        }

        /**
         * On Ajax request
         *
         * @param {jQuery} $element Current element selected
         * @return {undefined}
         */
        function _ajaxEvent($element) {
            $.ajax({
                    // URL from the link that was 'clicked' on
                    url: $element.attr('href')
                })
                .done(_ajaxDone)
                .fail(_ajaxFail);
        }

        /**
         * Bind events
         *
         * @return {undefined}
         */
        function _bindEvents() {
            // Namespace the 'click' event
            _$ajax.on('click.app.rest.module', function (event) {
                event.preventDefault();

                // Pass this to the Ajax event function
                _ajaxEvent($(this));
            });
        }

        /**
         * Cache the DOM node(s)
         *
         * @return {undefined}
         */
        function _cacheDom() {
            _$ajax = $('#ajax');
        }

        // Public API
        return {
            /**
             * Initialise the following module
             *
             * @param {object} jQuery Reference to jQuery
             * @return {undefined}
             */
            init: function init(jQuery) {
                $ = jQuery;

                // Cache the DOM and bind event(s)
                _cacheDom();
                _bindEvents();
            }
        };
    }(window));

    // DOM ready event
    $(function domReady($) {
        // Initialise the App module
        App.rest.init($);
    });
</script>

</body>
</html>
