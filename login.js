function loginUser(){
    let data = {
        email: $('#email').val(),
        password: $('#password').val()
    }

    if(data.email == "" || data.password == ""){
        alert("fill the form");
    }
    else{
        $.ajax({
            type: "POST",
            url: "DoLogin.php",
            data: data,
            success: function (result){
                // console.log(result);
                if(result === 'Superuser'){
                    window.location.replace('superuser/homepage.php');
                }
                else if(result == 'Not found'){
                    alert("Wrong username or password");
                }
                else{
                    window.location.replace('index.php');
                }
            }
        });
    }
}

$('.main-body > div > #btn-login').click(loginUser);