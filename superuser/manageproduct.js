function selectProduct(id){
    $.ajax({
        type: "GET",
        url: "DoSelectProduct.php",
        data: {
            id: id
        },
        success: function(result){
            result = JSON.parse(result);
            $('#id').val(result.id);
            $('#category').val(result.category_id);
            $('#user').val(result.user_id);
            $('#name').val(result.name);
            $('#description').val(result.description);
            $('#price').val(result.price);
            $('#stock').val(result.stock);
        }
    });
}

function addProduct(){
    let data = {
        name: $('#name').val(),
        category: $('#category').val(),
        user: $('#user').val(),
        description: $('#description').val(),
        price: parseInt($('#price').val()),
        stock: parseInt($('#stock').val())
    };

    if(data.name == "" || data.category == "" || data.user == "" || data.price == 0){
        alert("Fill the form");
    }
    else{
        $.ajax({
            type: "POST",
            url: "DoAddProduct.php",
            data: data,
            success: function(result){
                alert(result);
                window.location.replace("manageproduct.php");
            }
        });
    }
}

function updateProduct(){
    let data = {
        id: $('#id').val(),
        name: $('#name').val(),
        category: $('#category').val(),
        user: $('#user').val(),
        description: $('#description').val(),
        price: parseInt($('#price').val()),
        stock: parseInt($('#stock').val())
    };

    if(data.id == "" || data.name == "" || data.category == "" || data.user == "" || data.price == 0){
        alert("Fill the form");
    }
    else{
        $.ajax({
            type: "POST",
            url: "DoUpdateProduct.php",
            data: data,
            success: function(result){
                alert(result);
                window.location.replace("manageproduct.php");
            }
        });
    }
}

function deleteProduct(){
    let id = $('#id').val();

    if(id == ""){
        alert("Fill the form");
    }
    else{
        $.ajax({
            type: "POST",
            url: "DoDeleteProduct.php",
            data: {
                id: id
            },
            success: function(result){
                alert(result);
                window.location.replace("manageproduct.php");
            }
        });
    }
}

function resetForm(){
    $('#id').val('');
    $('#name').val('');
    $('#description').val('');
    $('#price').val('');
    $('#stock').val('');
}

$('#btn-add-product').click(addProduct);
$('#btn-update-product').click(updateProduct);
$('#btn-delete-product').click(deleteProduct);
$('#btn-reset-product').click(resetForm);