$(function(){
    // jQuery code goes here.
    
    $('#username').css("background-color", "red");

    $('#password').click(function() {
        var passwordVal = $('#password').val();
        if(passwordVal == "") {
            alert("Please type in your password.");
        }
    });
});