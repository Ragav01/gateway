$(function () {

    $("#username_error_message").hide();
    $("#phone_error_message").hide();
    $("#email_error_message").hide();

    var error_username = false;
    var error_phone = false;
    var error_email = false;

    $("#form_username").focusout(function () {

      check_username();

    });

  $("#form_phone").focusout(function () {

      check_phone();

    });
    $("#form_email").focusout(function () {

      check_email();

    });

    function check_username() {

      var username_length = $("#form_username").val().length;

      if (username_length < 5 || username_length > 20) {
        $("#username_error_message").html("Should be between 5-20 characters");
        $("#username_error_message").show();
        error_username = true;
      } else {
        $("#username_error_message").hide();
      }

    }

    function check_phone() {

      var phone_length = $("#form_phone").val().length;

      if (phone_length < 10 || phone_length > 11) {
        $("#phone_error_message").html("Enter valid phone number");
        $("#phone_error_message").show();
        error_phone = true;
      } else {
        $("#phone_error_message").hide();
      }

    }



    function check_email() {

      var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);

      if (pattern.test($("#form_email").val())) {
        $("#email_error_message").hide();
      } else {
        $("#email_error_message").html("Invalid email address");
        $("#email_error_message").show();
        error_email = true;
      }

    }

    $("#registration_form").submit(function () {

      error_username = false;
      error_phone = false;
      error_email = false;

      check_username();
      check_phone();
      check_email();

      if (error_username == false && error_phone == false && error_email == false) {
        return true;
      } else {
        return false;
      }

    });

  });
