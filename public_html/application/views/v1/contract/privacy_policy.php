<?php
//die("cc");
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - Contract/privacy_policy - Testing Server</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server - User/Contact/Validate</span>
    </span></h1>

    <div id="body">

<h2>Contract/privacy_policy</h2>

        <h3>/v1/Contract/privacy_policy - [GET]</h3>

        <form id="getpp" action="" method="GET">
            <table>
                <tr>
                    <td colspan=2>Generated Endpoint: </td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="endpoint" id="pp_endpoint">
                        http://<?=$_SERVER['HTTP_HOST']?>/v1/v1/Contract/privacy_policy/format/{format}
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
                    <td><select name="format" id="language_format">
                        <option value="json">json</option>
                        <?/* <option value="xml">xml</option> */?>
                        <option value="generic">generic</option>
                    <select/></td>
                </tr>
                <tr>
                    <td>language: </td>
                    <td><input type="text" name="language" id="language" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="email_form_feedback">
                        <p class="bg-danger text-danger"><i>(Results displayed here)</i></p>
                    </div>
                    <div class="form_response hidden" id="email_form_response">
                        <pre>(Response displayed here)</pre>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="submit_email" value="Get Privacy Policy"></td>
                </tr>
            </table>
        </form>
<br><br>

        <h3>/v1/user/contact/validate/phone - [POST]</h3>

        <form id="check_phone" action="" method="POST">
            <table>
                <tr>
                    <td colspan=2>Generated Endpoint: </td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="endpoint" id="phone_endpoint">
                        http://<?=$_SERVER['HTTP_HOST']?>/v1/user/contact/validate/phone/format/{format}
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
                    <td><select name="format" id="phone_format">
                        <option value="json">json</option>
                        <?/* <option value="xml">xml</option> */?>
                        <option value="generic">generic</option>
                    <select/></td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td><input type="text" name="phone" id="phone" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="phone_form_feedback">
                        <p class="bg-danger text-danger"><i>(Results displayed here)</i></p>
                    </div>
                    <div class="form_response hidden" id="phone_form_response">
                        <pre>(Response displayed here)</pre>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="submit_phone" value="Check Phone"></td>
                </tr>
            </table>
        </form>
<br><br>


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
    .on('click', '#submit_email', function(){
        $('#email_form_feedback').setInfo('Checking Email...');
        $('#email_form_feedback').show().removeClass('hidden');

		var data = $('#getpp').serializeArray();

        var endpoint = '/v1/Contract/privacy_policy/'+$('#language').val(); //'+$('#password').val()+'
        $('#pp_endpoint').html('http://<?=$_SERVER['HTTP_HOST']?>'+endpoint);
console.log(endpoint);
        $.get(endpoint,data,function(req) {
            if ($('#email_format').val()=='generic') {
                if (req.Success==true){
                    $('#email_form_feedback').setSuccess(req.Message);
                } else {
                    $('#email_form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#email_format').val()=='json') {
                if (req.success){
                    $('#email_form_feedback').setSuccess(req.success);
                } else {
                    $('#email_form_feedback').setError(req.error+" - "+req.message);
                }
            }
            var data = JSON.stringify(req, null, '\t');
            $('#email_form_response').children().html("Response Data Size: "+data.length+"\n"+data);
		});
 
    })
    .on('click', '#submit_phone', function(){
        $('#phone_form_feedback').setInfo('Checking Phone...');
        $('#phone_form_feedback').show().removeClass('hidden');

		var data = $('#check_phone').serializeArray();
        var endpoint = '/v1/user/contact/validate/phone/format/'+$('#language_format').val(); //'+$('#phone').val()+'

        $('#phone_endpoint').html('http://<?=$_SERVER['HTTP_HOST']?>'+endpoint);

        $.post(endpoint,data,function(req) {
            if ($('#phone_format').val()=='generic') {
                if (req.Success==true){
                    $('#phone_form_feedback').setSuccess(req.Message);
                } else {
                    $('#phone_form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#phone_format').val()=='json') {
                if (req.success){
                    $('#phone_form_feedback').setSuccess(req.success);
                } else {
                    $('#phone_form_feedback').setError(req.error+" - "+req.message);
                }
            }
            var data = JSON.stringify(req, null, '\t');
            $('#phone_form_response').children().html("Response Data Size: "+data.length+"\n"+data);
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
