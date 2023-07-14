$(function () {
   var swiper = new Swiper(".mySwiperCssMode", {
        spaceBetween: 30,
        centeredSlides: true,
        lazy: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true,
    });
    var swiper = new Swiper(".product-slider", {
        slidesPerView: 4,
        spaceBetween: 30,
        lazy: true,
        loop: true,
        // grid: {
        //     rows: 2,
        //   },
        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            700:{
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 24,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },      
    });
    var swiper = new Swiper(".product-sliders", {
        spaceBetween: 30,
        lazy: true,
        loop: true,
        // grid: {
        //     rows: 2,
        //   },
        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            700:{
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 24,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },      
    });
    var swiper = new Swiper(".product-single-slider", {
        spaceBetween: 20,
        lazy: true,
        loop: true,
        // centeredSlides: true,
        breakpoints: {
            300: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            700:{
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 24,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiper = new Swiper(".product-newest-slider", {
        spaceBetween: 20,
        lazy: true,
        loop: true,
        breakpoints: {
            300: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            700:{
                slidesPerView: 6,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView:6,
                spaceBetween: 24,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next.newest",
            prevEl: ".swiper-button-prev.newest",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var productCircledProductSlider = new Swiper(".product-circledProduct-slider", {
        spaceBetween: 50,
        lazy: true,
        // loop: true,
        breakpoints: {
            300: {
                slidesPerView: 6,
                spaceBetween: 10,
            },
            700:{
                slidesPerView: 6,
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
    $(".bars").on("click",function(){
        $("#mainmenu").toggleClass("active animate");
        $("#cross").toggleClass("d-none");
    });
    $("#cross").click(function(){
        $("#mainmenu").toggleClass("active animate");
        $("#cross").toggleClass("d-none");
    });
    $("header>nav>ul>li:first-child>ul>li").on("click",function(){
        $(this).toggleClass("active");
        console.log("A");

    });
    $(window).scroll(function(){
        if($(window).scrollTop()>80){
            if(!$("#mainmenu").hasClass("scrolled")){
                $("#mainmenu").addClass("scrolled");
            }
        }else{
            $("#mainmenu").removeClass("scrolled");
        }
    });

});