function renderLoginPage(){
    window.location.replace('login.php');
}

function renderRegisterPage(){
    window.location.replace('register.php');
}

function logout(){
    $.ajax({
        type: "GET",
        url: "../DoLogout.php",
        success: function(result){
            window.location.replace('login.php');
        }
    });
}

$('#btn-login').click(renderLoginPage);
$('#btn-register').click(renderRegisterPage);
$('#btn-logout').click(logout);
$('#homepage-logo').click(function(){
    window.location.replace("index.php");
})