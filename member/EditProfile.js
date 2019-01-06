function editProfile(){
    let name = $('#name').val();
    let file_data = $('#photo').prop('files')[0];
    let form_data = new FormData();

    form_data.append("name", name);
    form_data.append("photo", file_data);

    $.ajax({
        type: "POST",
        url: "DoUpdateUser.php",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        success: function(result){
            alert(result);
        }
    });
}

$('#btn-update').click(editProfile);