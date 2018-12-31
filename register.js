function registerUser(){
    let data = {
        email: $('#email').val(),
        password: $('#password').val(),
        cpassword: $('#cpassword').val(),
        name: $('#name').val(),
        address: $('#address').val(),
        dob: $('#dob').val()
    }

    if(data.password === data.cpassword){
        alert('Confirm password must be the same with password');
    }
    else if(data.email == "" || data.password == "" || data.cpassword == "" || data.name == "" || data.address == "" || data.dob == ""){
        alert("fill the form");
    }
    else{
        $.ajax({
            type: "POST",
            url: "DoRegister.php",
            data: data,
            success: function(result){
                window.location.replace("login.php");
            },
            error: function (error){
                console.log(error);
            }
        });
    }
}

$('.main-body > div > #btn-register').click(registerUser);