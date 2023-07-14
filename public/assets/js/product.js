$(function () {
    var productCircledProductSlider = new Swiper(".product-circledProduct-slider", {
        spaceBetween: 20,
        lazy: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            300: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            700: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 30,
            },
        },
        navigation: {
            nextEl: ".circledProduct",
            prevEl: ".circledProduct",
        },
        pagination: {
            el: ".circledProduct-pagination",
            clickable: true,
        },
        scrollbar: {
            el: ".circledProduct",
            hide: true,
        },
    });
    $("#productImage").ezPlus({
        zoomType: 'inner',
        cursor: 'crosshair',
        scrollZoom: true,
    });
    $(".hover-expand").on("click", function (e) {
        if (!$(this).hasClass("active")) {
            $(this).addClass("active");
        }
        e.stopPropagation()
    });
    $(".hover-expand .text").on("click", function (e) {
        var modal = document.createElement("div");
        $(modal).attr("class", "light-box-modal");
        var image = document.createElement("img");
        var src = $("#productImage").attr("data-zoom-image");
        $(image).attr("src", src);
        $(image).attr("alt", "productImage");
        var closeModal = document.createElement("div");
        $(closeModal).attr("class", "closeModal");
        var textNode = document.createTextNode("x");
        closeModal.addEventListener("click", function () {
            $(modal).remove();
        });
        $(closeModal).append(textNode);
        $(modal).append(image);
        $(modal).append(closeModal);
        $("footer").append(modal);
    });

});

