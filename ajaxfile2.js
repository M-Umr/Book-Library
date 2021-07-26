$('#loginid').click(function() {
    var emailid = $('inputEmail').val();
    var pass = $('inputPassword').val();
    //alert(emailid);
    //alert(pass);
    $.ajax({
        type: 'POST',
        url: 'login.php',
        data1: { emailid: emailid, pass: pass },
        success: function(data1) {
            $('#loginid').html(data1);
        }
    });
});