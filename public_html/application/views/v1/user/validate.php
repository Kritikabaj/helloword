<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HWC REST API - User/Validate - Testing Server</title>
    <link rel="stylesheet" type="text/css" href="/css/default.css"/>
</head>
<body>

<div id="container">
    <h1><span class="header">
        <img src="https://gethotwired.com/images/logo.png" title="Hotwire Communications" alt="Hotwire Communications">
        <span>REST API - Testing Server - User/Validate</span>
    </span></h1>

    <div id="body">

<h2>User/Validate</h2>

        <h3>/v1/user/validate/username - [POST]</h3>

        <form id="check_username" action="" method="POST">
            <table>
                <tr>
                    <td colspan=2>Generated Endpoint: </td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="endpoint" id="username_endpoint">
                        http://<?=$_SERVER['HTTP_HOST']?>/v1/user/validate/username/format/{format}
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
                    <td><select name="format" id="username_format">
                        <option value="json">json</option>
                        <?/* <option value="xml">xml</option> */?>
                        <option value="generic">generic</option>
                    <select/></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" id="username" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="username_form_feedback">
                        <p class="bg-danger text-danger"><i>(Results displayed here)</i></p>
                    </div>
                    <div class="form_response hidden" id="username_form_response">
                        <pre>(Response displayed here)</pre>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="submit_username" value="Check Username"></td>
                </tr>
            </table>
        </form>
<br><br>

        <h3>/v1/user/validate/password - [POST]</h3>

        <form id="check_password" action="" method="POST">
            <table>
                <tr>
                    <td colspan=2>Generated Endpoint: </td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="endpoint" id="password_endpoint">
                        http://<?=$_SERVER['HTTP_HOST']?>/v1/user/validate/password/format/{format}
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
<br><br>

        <h3>/v1/user/validate/pin - [POST]</h3>

        <form id="check_pin" action="" method="POST">
            <table>
                <tr>
                    <td colspan=2>Generated Endpoint: </td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="endpoint" id="pin_endpoint">
                        http://<?=$_SERVER['HTTP_HOST']?>/v1/user/validate/pin/format/{format}
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
                    <td><select name="format" id="pin_format">
                        <option value="json">json</option>
                        <?/* <option value="xml">xml</option> */?>
                        <option value="generic">generic</option>
                    <select/></td>
                </tr>
                <tr>
                    <td>Pin: </td>
                    <td><input type="text" name="pin" id="pin" value=""></td>
                </tr>
                <tr>
                    <td colspan=2>
                    <div class="form_feedback hidden" id="pin_form_feedback">
                        <p class="bg-danger text-danger"><i>(Results displayed here)</i></p>
                    </div>
                    <div class="form_response hidden" id="pin_form_response">
                        <pre>(Response displayed here)</pre>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td colspan=2><input type="button" name="submit" id="submit_pin" value="Check PIN"></td>
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
    .on('click', '#submit_username', function(){
        $('#username_form_feedback').setInfo('Checking Username...');
        $('#username_form_feedback').show().removeClass('hidden');

		var data = $('#check_username').serializeArray();

        var endpoint = '/v1/user/validate/username/format/'+$('#username_format').val(); //'+$('#password').val()+'
        $('#username_endpoint').html('http://<?=$_SERVER['HTTP_HOST']?>'+endpoint);

        $.post(endpoint,data,function(req) {
            if ($('#username_format').val()=='generic') {
                if (req.Success=='true'){
                    $('#username_form_feedback').setSuccess(req.Message);
                } else {
                    $('#username_form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#username_format').val()=='json') {
                if (req.success){
                    $('#username_form_feedback').setSuccess(req.success);
                } else {
                    $('#username_form_feedback').setError(req.error+" - "+req.message);
                }
            }
            var data = JSON.stringify(req, null, '\t');
            $('#username_form_response').children().html("Response Data Size: "+data.length+"\n"+data);
		});
 
    })
    .on('click', '#submit_password', function(){
        $('#password_form_feedback').setInfo('Checking Password...');
        $('#password_form_feedback').show().removeClass('hidden');

		var data = $('#check_password').serializeArray();

        var endpoint = '/v1/user/validate/password/format/'+$('#password_format').val(); //'+$('#password').val()+'
        $('#password_endpoint').html('http://<?=$_SERVER['HTTP_HOST']?>'+endpoint);

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
    .on('click', '#submit_pin', function(){
        $('#pin_form_feedback').setInfo('Checking PIN...');
        $('#pin_form_feedback').show().removeClass('hidden');

		var data = $('#check_pin').serializeArray();

        var endpoint = '/v1/user/validate/pin/format/'+$('#pin_format').val(); //'+$('#password').val()+'
        $('#pin_endpoint').html('http://<?=$_SERVER['HTTP_HOST']?>'+endpoint);

        $.post(endpoint,data,function(req) {
            if ($('#pin_format').val()=='generic') {
                if (req.Success=='true'){
                    $('#pin_form_feedback').setSuccess(req.Message);
                } else {
                    $('#pin_form_feedback').setError(req.ErrorCode+" - "+req.Message);
                }
            }
            else if ($('#pin_format').val()=='json') {
                if (req.success){
                    $('#pin_form_feedback').setSuccess(req.success);
                } else {
                    $('#pin_form_feedback').setError(req.error+" - "+req.message);
                }
            }
            var data = JSON.stringify(req, null, '\t');
            $('#pin_form_response').children().html("Response Data Size: "+data.length+"\n"+data);
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
