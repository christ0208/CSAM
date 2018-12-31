function addUser(){
    let role = $('#role-selection').val();
    let email = $('#email').val();
    let password = $('#password').val();
    let name = $('#name').val();
    let address = $('#address').val();
    let dob = $('#dob').val();
    // alert(id + " " + role + " " + email + " " + password + " " + name + " " + address + " " + dob);

    let formdata = 'role=' + role + '&email=' + email + '&password=' + password + '&name=' + name + '&address=' + address + '&dob=' + dob;
    if(role == '' || email == '' || password == '' || name == '' || address == '' || dob == '')
        alert('Fill all fields');
    
    $.ajax({
        type: 'POST',
        url: 'DoAddUser.php',
        data: formdata,
        cache: false,
        success: function(result){
            alert(result);
            window.location.replace('manageuser.php');
        }
    });
}

function selectUser(id){
    $('#id').val(id);

    $.ajax({
        type: 'GET',
        url: 'DoSelectUser.php',
        data:{
            id: id
        },
        success: function(result){
            result = JSON.parse(result);
            $('#role-selection').val(result.role);
            $('#email').val(result.email);
            $('#password').val(result.password);
            $('#name').val(result.name);
            $('#address').val(result.address);
            $('#dob').val(result.dob);
        },
        error: function (error){
            console.log(error);
        }
    });
}

function updateUser(){
    let id = $('#id').val();
    let role = $('#role-selection').val();
    let email = $('#email').val();
    let password = $('#password').val();
    let name = $('#name').val();
    let address = $('#address').val();
    let dob = $('#dob').val();
    // alert(id + " " + role + " " + email + " " + password + " " + name + " " + address + " " + dob);

    let formdata = 'id=' + id + '&role=' + role + '&email=' + email + '&password=' + password + '&name=' + name + '&address=' + address + '&dob=' + dob;
    if(id == '' || role == '' || email == '' || password == '' || name == '' || address == '' || dob == '')
        alert('Fill all fields');
    
    $.ajax({
        type: 'POST',
        url: 'DoUpdateUser.php',
        data: formdata,
        cache: false,
        success: function(result){
            alert(result);
            window.location.replace('manageuser.php');
        }
    });
}

function deleteUser(){
    let id = $('#id').val();

    let formdata = 'id=' + id;
    $.ajax({
        type: "POST",
        url: "DoDeleteUser.php",
        data: formdata,
        success: function(status){
            alert(status);
            window.location.replace('manageuser.php');
        }
    })
}

function resetForm(){
    $('#id').val('');
    $('#role-selection').val('e586b774-e4b5-429c-8f37-512fe7cb936e')
    $('#email').val('');
    $('#password').val('');
    $('#name').val('');
    $('#address').val('');
    $('#dob').val('');
}

$('#btn-add-user').click(addUser);
$('#btn-update-user').click(updateUser);
$('#btn-delete-user').click(deleteUser);
$('#btn-reset-form').click(resetForm);