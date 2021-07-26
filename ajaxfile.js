$('#register_button').click(function() {
    var fname = $('fname').val();
    var lname = $('lname').val();
    var mailid = $('inputEmailid').val();
    var pass = $('inputPass').val();
    var phone = $('inputPhone').val();

    $.ajax({
        type: 'POST',
        url: 'register.php',
        data: { fname: fname, lname: lname, emilid: mailid, pass: pass, phone: phone },
        success: function(data) {
            $('#register_button').html(data);
        }
    });
});