$(document).ready(function () {

    $('input[type="checkbox"]').change(function () {

        var sub_category = [];
        $.each($("input[id='sub_categorys']:checked"), function () {
            sub_category.push($(this).val());
        });
        var sub_categorys = sub_category.toString();

//        var $brand = [];
//        $.each($("input[id='brand']:checked"), function () {
//            $brand.push($(this).val());
//        });
//        var $brands = $brand.toString();
//        alert($brands);

        $.ajax({
            url: "post-and-get/ajax/product.php",
            type: "POST",
            data: {
                sub_categorys: sub_categorys,
                action: 'GETPRODUCTFILTER'
            },
            dataType: "JSON",
            success: function (jsonStr) {

                var html = '<ul class="row product-grid">';
                $.each(jsonStr, function (i, data) {

                    html += '<li class="col-md-4 col-sm-6 col-xs-12">';
                    html += '<div class="item-product">';
                    html += '<div class="product-thumb">';
                    html += '<a class="product-thumb-link" href="view-product.php?id=' + data.id + '">';
                    html += '<img class="first-thumb" alt="" src="upload/product-categories/sub-product/product/photos/' + data.image_name + '" >';
                    html += '</a>';
                    html += '<div class="product-info-cart">';
                    html += '<div class="product-extra-link">';
                    html += '<a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>';
                    html += '<a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>';
                    html += '<a class="quickview-link fancybox.ajax" href="quick-view.html"><i class="fa fa-search"></i></a>';
                    html += '</div>';
                    html += '<a class="addcart-link" href="#"><i class="fa fa-shopping-basket"></i> Add to Cart</a>';
                    html += '</div>';
                    html += '</div>';

                    //cal Discount
                    var price = parseFloat(data.price);
                    var discount = data.discount;
                    var discount_amount = (price * discount) / 100;
                    var discount_price = price - discount_amount;

                    html += '<div class="product-info">';
                    html += '<h3 class="title-product"> ' + data.name + '</a></h3>';
                    html += '<div class="info-price">';

                    if (discount > 0) {
                        html += '<span id="price-details">Rs: ' + discount_price + '</span><del>Rs: ' + data.price + '</del>';
                    } else {
                        html += '<span id="price-details">Rs: ' + data.price + '</span>';
                    }

                    html += ' </div>';
                    html += ' </div>';
                    if (discount > 0) {
                        html += ' <div class="percent-saleoff">';
                        html += ' <span><label>' + discount + ' %</label> OFF</span>';
                        html += ' </div>';
                    }

                    html += ' </div>';
                    html += ' </li>';
                });
                html += ' </ul>';
                $('#filter_data_hide').hide();
                $('.filter_data').empty();
                $('.filter_data').append(html);

            }
        });

    });

}); 