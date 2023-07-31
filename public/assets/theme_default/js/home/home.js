function formatPrice(price) {
    return price.toLocaleString("vi-VN", {
        style: "currency",
        currency: "VND",
    });
}

$(document).ready(function () {
    var currentURL = window.location.href;

    var code = currentURL.split("/")[3];

    var categoryId = null;

    var page = 1;

    function loadProducts() {
        var url = z512 + "/" + code + "/products?category_id=" + categoryId + "&page=" + page;

        $.ajax({
            url: url,
            type: "GET",
            async: false,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {},
            success: function (data) {
                var products = data.data.products.data;

                if (products.length < 10) {
                    $(".click-load-products").css("display", "none");
                }

                var html = "";

                products.forEach(function (product) {
                    html += "<div class='item'>";
                    html += '<a style="text-decoration: none" href="' + z512 + '/' + code + "/products/" + product.slug + '">';
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

    $(".load-product-by-category").click(function (event) {

        $(".load-product-by-category").removeClass("active");

        $(this).addClass("active");

        $(".click-load-products").show();

        categoryId = $(this).attr("id");

        if (typeof categoryId === "undefined") {
            categoryId = null;
        } else {
            categoryId = categoryId.split("-")[1];
        }

        page = 1;

        loadProducts();
    });

    function loadFullProduct() {
        $(".click-load-products").show();

        loadProducts();
    }

    loadFullProduct();

    $(".product-all-hot").slick({
        infinite: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
    });

    $(".list-categories").slick({
        infinite: false,
        speed: 500,
        slidesToShow: 1,
        variableWidth: true,
        arrows: false,
    });

    $(".slide").slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        autoplay: true,
        prevArrow: false,
        nextArrow: false,
        autoplaySpeed: 3000
    });
});
