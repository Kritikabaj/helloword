<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - Testing Server</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server</span>
    </span></h1>

    <div id="body">

<h2><a target="_blank" href="<?php echo site_url('v1/register'); ?>">Register</a></h2>
    <ul>
        <li>
            /register/validate_invitation_code - [GET]
        </li>
        <li>
            /register/validate_customer_number - [GET]
        </li>
        <li>
            /register/create_user - [POST]
        </li>
    </ul>

<h2><a target="_blank" href="<?php echo site_url('v1/validate'); ?>">Validate</a></h2>
    <ul>
        <li>
            /validate/phone - [GET]
        </li>
        <li>
            /validate/email - [GET]
        </li>
        <li>
            /validate/username - [GET]
        </li>
        <li>
            /validate/password - [POST]
        </li>
        <li>
            /validate/pin - [GET]
        </li>
    </ul>

<h2><a target="_blank" href="<?php echo site_url('v1/verify'); ?>">Verify</a></h2>
    <ul>
        <li>
            /verify/send - [GET]
        </li>
        <li>
            /verify/phone - [GET]
        </li>
        <li>
            /verify/email - [GET]
        </li>
    </ul>


    </div>


    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>'.CI_VERSION.'</strong>' : '' ?></p>
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
    .on('click', '#create_submit', function(){
        $('#create_form_feedback').setInfo('Saving data...');
        $('#create_form_feedback').show().removeClass('hidden');

		var data = $('#create_user').serializeArray();

        /*$.post('/v1/register/create_user/format/json',data,function(req) {
            if (req.success){ //"The user has been saved successfully - "+
                $('#create_form_feedback').setSuccess(req.success);
                $(data).each(function(i, field){
                    $('#'+field.name).val(req.data[field.name]);
                });
            } else { //"There was an error in submission. - "+
                $('#create_form_feedback').setError(req.error+" - "+req.message);
            }
		});*/

        $.post('/v1/register/create_user/format/generic',data,function(req) {
            if (req.Success){ //"The user has been saved successfully - "+
                $('#create_form_feedback').setSuccess(req.Message);
                $(data).each(function(i, field){
                    $('#'+field.name).val(req.Data.User[field.name]);
                });
            } else { //"There was an error in submission. - "+
                $('#create_form_feedback').setError(req.ErrorCode+" - "+req.Message);
            }
		}); 
    })
    .on('click', '#password_submit', function(){
        $('#password_form_feedback').setInfo('Checking Password...');
        $('#password_form_feedback').show().removeClass('hidden');

		var data = $('#check_password').serializeArray();

/*        $.post('/v1/validate/password/format/json',data,function(req) {
            if (req.success){
                $('#password_form_feedback').setSuccess(req.success);
            } else {
                $('#password_form_feedback').setError(req.error+" - "+req.message);
            }
		});*/

        $.post('/v1/validate/password/format/generic',data,function(req) {
            if (req.Success){
                $('#password_form_feedback').setSuccess(req.Message);
            } else {
                $('#password_form_feedback').setError(req.ErrorCode+" - "+req.Message);
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
