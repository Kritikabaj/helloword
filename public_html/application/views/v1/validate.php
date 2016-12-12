<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - Validate - Testing Server</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server - Validate</span>
    </span></h1>

    <div id="body">

<h2>Validate</h2>
        <p>
            /validate/phone - [GET]
        </p>

        <ol>
            <li><a target="_blank" href="<?php echo 'validate/phone/format/json'; ?>">validate/phone</a> - without phone - JSON</li>
            <li><a target="_blank" href="<?php echo 'validate/phone/(561) 555-1234/format/json'; ?>">validate/phone</a> - with phone - JSON</li>
            <li><a target="_blank" href="<?php echo 'validate/phone/format/xml'; ?>">validate/phone</a> - without phone - XML</li>
            <li><a target="_blank" href="<?php echo 'validate/phone/(561) 555-1234/format/xml'; ?>">validate/phone</a> - with phone - XML</li>
            <li><a target="_blank" href="<?php echo 'validate/phone/format/generic'; ?>">validate/phone</a> - without phone - generic (JSON)</li>
            <li><a target="_blank" href="<?php echo 'validate/phone/(561) 555-1234/format/generic'; ?>">validate/phone</a> - with phone - generic (JSON)</li>

        </ol>

        <p>
            /validate/email - [GET]
        </p>

        <ol>
            <li><a target="_blank" href="<?php echo 'validate/email/format/json'; ?>">validate/email</a> - without email - JSON</li>
            <li><a target="_blank" href="<?php echo 'validate/email/harley.fischel@hotwiremail.com/format/json'; ?>">validate/email</a> - with email - JSON</li>
            <li><a target="_blank" href="<?php echo 'validate/email/format/xml'; ?>">validate/email</a> - without email - XML</li>
            <li><a target="_blank" href="<?php echo 'validate/email/harley.fischel@hotwiremail.com/format/xml'; ?>">validate/email</a> - with email - XML</li>
            <li><a target="_blank" href="<?php echo 'validate/email/format/generic'; ?>">validate/email</a> - without email - generic (JSON)</li>
            <li><a target="_blank" href="<?php echo 'validate/email/harley.fischel@hotwiremail.com/format/generic'; ?>">validate/email</a> - with email - generic (JSON)</li>

        </ol>

        <p>
            /validate/password - [GET]
        </p>

        <ol>
            <li><a target="_blank" href="<?php echo 'validate/password/format/json'; ?>">validate/password</a> - POST Method Required - JSON</li>
            <li><a target="_blank" href="<?php echo 'validate/password/format/xml'; ?>">validate/password</a> - POST Method Required - XML</li>
            <li><a target="_blank" href="<?php echo 'validate/password/format/generic'; ?>">validate/password</a> - POST Method Required - generic (JSON)</li>
        </ol>

        <p>
            /validate/password - [POST]
        </p>

        <form id="check_password" action="" method="POST">
            <table>
                <tr>
                    <td>Generated Endpoint: </td>
                    <td>
                    <div class="endpoint" id="password_endpoint">
                        /v1/validate/password/format/{format}
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div>&nbsp;</div>
                    </td>
                </tr>
                <tr>
                    <td>Format: </td>
                    <td><select name="format" id="password_format">
                        <option value="json">json</option>
                        <?/* <option value="xml">xml</option> */?>
                        <option value="generic">generic</option>
                    <select/></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="text" name="password" id="password" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="password_form_feedback">
                        <p class="bg-danger text-danger"><i>(Results displayed here)</i></p>
                    </div>
                    <div class="form_response hidden" id="password_form_response">
                        <pre>(Response displayed here)</pre>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="submit_password" value="Check Password"></td>
                </tr>
            </table>
        </form>

        <p>
            /validate/pin - [GET]
        </p>

        <ol>
            <li><a target="_blank" href="<?php echo 'validate/pin/format/json'; ?>">validate/pin</a> - without pin - JSON</li>
            <li><a target="_blank" href="<?php echo 'validate/pin/1234/format/json'; ?>">validate/pin</a> - with pin - JSON</li>
            <li><a target="_blank" href="<?php echo 'validate/pin/format/xml'; ?>">validate/pin</a> - without pin - XML</li>
            <li><a target="_blank" href="<?php echo 'validate/pin/1234/format/xml'; ?>">validate/pin</a> - with pin - XML</li>
            <li><a target="_blank" href="<?php echo 'validate/pin/format/generic'; ?>">validate/pin</a> - without pin - generic (JSON)</li>
            <li><a target="_blank" href="<?php echo 'validate/pin/1234/format/generic'; ?>">validate/pin</a> - with pin - generic (JSON)</li>

        </ol>

    </div>

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
    .on('click', '#submit_password', function(){
        $('#password_form_feedback').setInfo('Checking Password...');
        $('#password_form_feedback').show().removeClass('hidden');

		var data = $('#check_password').serializeArray();

        var endpoint = '/v1/validate/password/format/'+$('#password_format').val(); //'+$('#password').val()+'
        $('#password_endpoint').html(endpoint);

        $.post(endpoint,data,function(req) {
            if ($('#password_format').val()=='generic') {
                if (req.Success=='true'){
                    $('#password_form_feedback').setSuccess(req.Message);
                } else {
                    $('#password_form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#password_format').val()=='json') {
                if (req.success){
                    $('#password_form_feedback').setSuccess(req.success);
                } else {
                    $('#password_form_feedback').setError(req.error+" - "+req.message);
                }
            }
            var data = JSON.stringify(req, null, '\t');
            $('#password_form_response').children().html("Response Data Size: "+data.length+"\n"+data);
		});
 
    })
    .on('click', '#submit', function(){
        $('#form_feedback').setInfo('Checking Password...');
        $('#form_feedback').show().removeClass('hidden');

		var data = $('#check_password').serializeArray();

/*        $.post('/v1/validate/password/format/json',data,function(req) {
            if (req.success){
                $('#form_feedback').setSuccess(req.success);
            } else {
                $('#form_feedback').setError(req.error+" - "+req.message);
            }
		});
*/
        $.post('/v1/validate/password/format/generic',data,function(req) {
            if (req.Success){
                $('#form_feedback').setSuccess(req.Message);
            } else {
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
