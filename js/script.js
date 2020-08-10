$(document).ready(function(){
// check change event of the text field
$("#email").keyup(function(){
// get text username text field value
var email = $("#email").val();

// check username name only if length is greater than or equal to 3
if(email.length >= 3)
{
//$("#status").html('<img src="loader.gif" /> Checking availability...');
// check username
$.post("serverfiles/server.php", {email: email}, function(data, status){
//$("#status").html("<button onclick=document.getElementById('id01').style.display='block'>Login</button>");
if(data == 'Y'){
$("#status").html("You already have an account with us. <a href='javascript:void(0)' onclick=document.getElementById('id01').style.display='block' style=color:#1a9a55>Sign in</a> or continue as guest.");
}
if(data == 'N'){
$("#status").html("You can craete an account after checkout");
}
});
}
});
});