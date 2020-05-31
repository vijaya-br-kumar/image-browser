let content = $('#category-content').val();
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
        $('.category-list').append(content.replace('_category_item', value).replace('_category_path', (categoryPath + value)));
    });
}