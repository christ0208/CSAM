function addCategory(){
    let name = $('#name').val();

    $.ajax({
        type: "POST",
        url: "DoAddCategory.php",
        data: {
            name: name
        },
        success: function (result){
            alert(result);
            window.location.replace("managecategory.php");
        }
    });
}

function selectCategory(id){
    $('#id').val(id);

    $.ajax({
        type: 'GET',
        url: 'DoSelectCategory.php',
        data:{
            id: id
        },
        success: function(result){
            result = JSON.parse(result);
            $('#name').val(result.name);
        },
        error: function (error){
            console.log(error);
        }
    });
}

function updateCategory(){
    let id = $('#id').val();
    let name = $('#name').val();

    if(id == '' || name == '') alert("fill the form");
    else{
        $.ajax({
            type: "POST",
            url: "DoUpdateCategory.php",
            data: {
                id: id,
                name: name
            },
            success: function (result){
                alert(result);
                window.location.replace("managecategory.php");
            }
        });
    }
}

function deleteCategory(){
    let id = $('#id').val();
    if(id == '') alert('fill the id');
    else{
        $.ajax({
            type: "POST",
            url: "DoDeleteCategory.php",
            data: {
                id: id
            },
            success: function (result){
                alert(result);
                window.location.replace("managecategory.php");
            }
        });
    }
}

function resetCategory(){
    $('#id').val('');
    $('#name').val('');
}

$('#btn-add-category').click(addCategory);
$('#btn-update-category').click(updateCategory);
$('#btn-delete-category').click(deleteCategory);
$('#btn-reset-category').click(resetCategory);