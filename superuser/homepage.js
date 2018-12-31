function renderManageUser(){
    window.location.replace('manageuser.php');
}

function renderManageCategory(){
    window.location.replace('managecategory.php');
}

function renderManageProduct(){
    window.location.replace('manageproduct.php');
}

function logout(){
    $.ajax({
        type: "GET",
        url: "../DoLogout.php",
        success: function(result){
            window.location.replace('../login.php');
        }
    });
}

$('#btn-manage-user').click(renderManageUser);
$('#btn-manage-category').click(renderManageCategory);
$('#btn-manage-product').click(renderManageProduct);
$('#btn-logout').click(logout);