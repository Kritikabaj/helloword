<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - Verify - Testing Server</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server - Verify</span>
    </span></h1>

    <div id="body">

<h2>Verify</h2>

        <p>
            /verify/send - [GET/POST]
        </p>

        <form id="send_code" action="" method="POST">
            <table>
                <tr>
                    <td>Generated Endpoint: </td>
                    <td>
                    <div class="endpoint" id="send_code_endpoint">
                        /v1/verify/send/{phone or email}/format/{format}
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
                    <td><select name="format" id="format">
                        <option value="json">json</option>
                        <?/* <option value="xml">xml</option> */?>
                        <option value="generic">generic</option>
                    <select/></td>
                </tr>
                <tr>
                    <td>Method: </td>
                    <td><select name="method" id="method">
                        <option value="POST">POST</option>
                        <option value="GET">GET</option>
                    <select/></td>
                </tr>
                <tr>
                    <td>Recipient: </td>
                    <td><input type="text" name="send" id="send" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="form_feedback">
                        <p class="bg-danger text-danger"><i>(Results displayed here)</i></p>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="send_submit" value="Send Code"></td>
                </tr>
            </table>
        </form>

        <p>
            /verify/phone - [GET]
        </p>
        <form id="verify_phone" action="" method="GET">
            <table>
                <tr>
                    <td>Generated Endpoint: </td>
                    <td>
                    <div class="endpoint" id="verify_phone_endpoint">
                        /v1/verify/phone/{phone}/code/{code}/format/{format}
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
                    <td><select name="format" id="verify_phone_format">
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
                    <td>Code: </td>
                    <td><input type="text" name="code" id="phone_code" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="verify_phone_form_feedback">
                        <p class="bg-danger text-danger"><i>(Results displayed here)</i></p>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="verify_phone_submit" value="Send Code"></td>
                </tr>
            </table>
        </form>

        <p>
            /verify/email - [GET]
        </p>
        <form id="verify_email" action="" method="GET">
            <table>
                <tr>
                    <td>Generated Endpoint: </td>
                    <td>
                    <div class="endpoint" id="verify_email_endpoint">
                        /v1/verify/email/{email}/code/{code}/format/{format}
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
                    <td><select name="format" id="verify_email_format">
                        <option value="json">json</option>
                        <?/* <option value="xml">xml</option> */?>
                        <option value="generic">generic</option>
                    <select/></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" id="email" value=""></td>
                </tr>
                <tr>
                    <td>Code: </td>
                    <td><input type="text" name="code" id="email_code" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="verify_email_form_feedback">
                        <p class="bg-danger text-danger"><i>(Results displayed here)</i></p>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="verify_email_submit" value="Send Code"></td>
                </tr>
            </table>
        </form>


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
    .on('click', '#send_submit', function(){
        $('#form_feedback').setInfo('Sending Code...');
        $('#form_feedback').show().removeClass('hidden');

		var data = $('#send_code').serializeArray();
 
        var endpoint = '/v1/verify/send/'+$('#send').val()+'/format/'+$('#format').val();
        $('#send_code_endpoint').html(endpoint);
        if ($('#method').val()=='POST') {
        $.post(endpoint,data,function(req) {
            if ($('#format').val()=='generic') {
                if (req.Success=='true'){
                    $('#form_feedback').setSuccess(req.Message+' - ['+$('#method').val()+']');
                } else {
                    $('#form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#format').val()=='json') {
                if (req.success){
                    $('#form_feedback').setSuccess(req.success+' - ['+$('#method').val()+']');
                } else {
                    $('#form_feedback').setError(req.error+" - "+req.message);
                }
            }
/*            else {
                //var xml = $.parseXML(req),
                var xml = $($.parseXML(req));
                var success = xml.find("success");
                alert(success.text());
                if (xml.getElementsByTagName("success")[0].childNodes[0].nodeValue){
                    $('#form_feedback').setSuccess(req.success+' - ['+$('#method').val()+']');
                } else {
                    $('#form_feedback').setError(req.error+" - "+req.message);
                }
            }*/
		});
        } else {
        $.get(endpoint,data,function(req) {
            if ($('#format').val()=='generic') {
                if (req.Success=='true'){
                    $('#form_feedback').setSuccess(req.Message+' - ['+$('#method').val()+']');
                } else {
                    $('#form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#format').val()=='json') {
                if (req.success){
                    $('#form_feedback').setSuccess(req.success+' - ['+$('#method').val()+']');
                } else {
                    $('#form_feedback').setError(req.error+" - "+req.message);
                }
            }

		});
        }

 
    })
    .on('click', '#verify_phone_submit', function(){
        $('#verify_phone_form_feedback').setInfo('Verifying Code...');
        $('#verify_phone_form_feedback').show().removeClass('hidden');

		var data = $('#verify_phone').serializeArray();
 
        var endpoint = '/v1/verify/phone/'+$('#phone').val()+'/code/'+$('#phone_code').val()+'/format/'+$('#verify_phone_format').val();
        $('#verify_phone_endpoint').html(endpoint);
        $.get(endpoint,data,function(req) {
            if ($('#verify_phone_format').val()=='generic') {
                if (req.Success=='true'){
                    $('#verify_phone_form_feedback').setSuccess(req.Message+'');
                } else {
                    $('#verify_phone_form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#verify_phone_format').val()=='json') {
                if (req.success){
                    $('#verify_phone_form_feedback').setSuccess(req.success+'');
                } else {
                    $('#verify_phone_form_feedback').setError(req.error+" - "+req.message);
                }
            }
		});
 
    })
    .on('click', '#verify_email_submit', function(){
        $('#verify_email_form_feedback').setInfo('Verifying Code...');
        $('#verify_email_form_feedback').show().removeClass('hidden');

		var data = $('#verify_email').serializeArray();
 
        var endpoint = '/v1/verify/email/'+$('#email').val()+'/code/'+$('#email_code').val()+'/format/'+$('#verify_email_format').val();
        $('#verify_email_endpoint').html(endpoint);
        $.get(endpoint,data,function(req) {
            if ($('#verify_email_format').val()=='generic') {
                if (req.Success=='true'){
                    $('#verify_email_form_feedback').setSuccess(req.Message+'');
                } else {
                    $('#verify_email_form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#verify_email_format').val()=='json') {
                if (req.success){
                    $('#verify_email_form_feedback').setSuccess(req.success+'');
                } else {
                    $('#verify_email_form_feedback').setError(req.error+" - "+req.message);
                }
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
