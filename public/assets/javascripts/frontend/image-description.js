$(document).ready(function(){
    $.ajax({
        url: categoryApiUrl,
        method: "GET"
    })
    .done(function( response ) {
        if(response.success)
        {
            appendCategoryItems(response.data);
        }
        else
        {
            alert(response.message);
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown){
        alert("Error Occurred");
    });
});

function appendCategoryItems(categoryItems){
    $.each(categoryItems, function(index, value){
        let content = $('#sidebar-prototype').val();
        content = content.replace('_category_item', value).replace('_category_path', (categoryPath + value));
        if(value == currentCategory)
        {
            content = content.replace('_active_class', 'active');
        }
        else
        {
            content = content.replace('_active_class', '');
        }
        $('#sidebar-contents').append(content);
    });
}

$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(document).ready(function(){
    $.ajax({
        url: imageDetailsApi,
        method: "GET"
    })
        .done(function( response ) {
            if(response.success)
            {
                appendImageDescription(response.data);
            }
            else
            {
                alert(response.message);
            }
        })
        .fail(function(jqXHR, textStatus, errorThrown){
            alert("Error Occurred");
        });
});

function appendImageDescription(obj){
    let content = $("#image-description-prototype").val();
    $('#image-description').append(content.replace('_image_path', obj.path).replace('_image_description', obj.description));
}