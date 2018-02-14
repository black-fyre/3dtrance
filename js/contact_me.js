/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function () {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        submitError: function ($form, event, errors) {
            $('#success').html("<div class='alert alert-warning'>");
            const alertParagrah = $('#success > .alert-warning');
            alertParagrah.html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                .append("</button>");
            alertParagrah
                .append("<strong>Ooops! Seems like some fields aren't filled or valid. </strong>");
            alertParagrah
                .append('</div>');
        },
        submitSuccess: function ($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var form = new FormData(document.getElementById('contactForm'));
            var name = $("input#name").val();
            // var phone = $("input#phone").val();
            // var email = $("input#email").val();
            // var attachmentData = $('#attachment').prop("files")[0];
            // var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "mail/contact_me.php",
                method: "POST",
                data: form,
                // enctype: 'multipart/form-data',
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                    $('#attachmentLabel').html('');

                    console.log(data);
                },
                error: function (data) {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:dahunsi.fehinti@gmail.com?Subject=Message from 3dtrance.com'>dahunsi.fehinti@gmail.com</a> ? Sorry for the inconvenience!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                    $('#attachmentLabel').html('');
                }
            })
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function (e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function () {
    $('#success').html('');
});
