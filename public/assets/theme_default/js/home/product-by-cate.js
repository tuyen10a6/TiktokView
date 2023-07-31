function formatPrice(price) {
    return price.toLocaleString("vi-VN", {
        style: "currency",
        currency: "VND",
    });
}

$(document).ready(function () {
    var code = window.location.href.split("/")[3];
    var categoryId = $("#category-id").val();
    var position = 0;
    var page = 1;

    function loadProducts() {
        var url = z512 + "/" + code + "/products?category_id=" + categoryId + "&page=" + page;

        $.ajax({
            url: url,
            type: "GET",
            async: false,
            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),},
            data: {},
            success: function (data) {
                var products = data.data.products.data;
                var html = "";

                products.forEach(function (product) {
                    html += "<div class='item'>";
                    html += '<a href="' + z512 + '/' + code + "/products/" + product.slug + '">';
                    html += '<div class="img-container">';
                    html += '<img src="' + cdn_static_file + '/' +
                        product.default_img + '" alt="' + product.name + '">';
                    html += "</div>";
                    html += "<div class='name'>" + product.name + "</div>";
                    html += "<div class='price'>" + formatPrice(product.price) + "</div>";
                    html += "</a>";
                    html += "</div>";
                });

                if (page === 1) {
                    $("#list-product").html(html);
                } else {
                    $("#list-product").append(html);
                }
            },
        });
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() > position + 400) {
            position = $(window).scrollTop();
            page += 1;
            if (categoryId) {
                loadProducts();
            }
        }
    });

    loadProducts();
});
