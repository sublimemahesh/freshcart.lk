$(document).ready(function () {

    $('#product_category').change(function () {
        
        var proCategoryID = $(this).val();
        
        $.ajax({
            url: "post-and-get/ajax/product.php",
            type: "POST",
            data: {
                proCategoryID: proCategoryID,
                action: 'GETPRODUCTBYCATEGORY'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<option> -- Please Select a Product -- </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.id + '">';
                    html += data.name;
                    html += '</option>';
                });
                $('#product').empty();
                $('#product').append(html);
            }
        });
    });

});
 