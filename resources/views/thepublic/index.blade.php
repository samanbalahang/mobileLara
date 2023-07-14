@extends('thepublic.layout.master')
@section("extraCss")

<link rel="stylesheet" href="{{url('/')}}/assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">

@endsection
@section("bodyClass")
home
@endsection

@section("main")
<main>
    <section class="circledProduct px-md-3">
        <div class="swiper swiper-container product-circledProduct-slider mb-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/light.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/mobilelens.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/noor.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/phone-1.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/phone-2.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/phone-3.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/light.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/mobilelens.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/noor.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/phone-1.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/phone-2.jpg" alt="img" class="w-50">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#">
                        <img src="assets/images/cat/circle/phone-3.jpg" alt="img" class="w-50">
                    </a>
                </div>
            </div>
            <div class="swiper-scrollbar circledProduct"></div>
            <!-- <div class="swiper-button-prev circledProduct"></div>
                <div class="swiper-button-next circledProduct"></div> -->
        </div>
    </section>
    <section id="slider" class="main-slider">
        <!-- Slider main container -->
        <div class="swiper swiper-container mySwiperCssMode">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="assets/images/nature-1.webp" alt="خرید موبایل"></div>
                <div class="swiper-slide"><img src="assets/images/nature-2.webp" alt="ارزانترین موبایل"></div>
                <div class="swiper-slide"><img src="assets/images/nature-3.webp" alt="لوازم جانبی موبایل"></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>

    <section class="cat-prod p-0 p-lg-3" id="cat">
        <div class="containerfluid">
            <div class="p-3">
                <h2 id="cats">
                    دسته بندی
                </h2>
                <div class="row">
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/bag.png" alt="bag">
                            </div>
                            <div class="card-body">
                                کوله پشتی
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/camcorder.png" alt="bag">
                            </div>
                            <div class="card-body">
                                دوربین
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/camera.png" alt="bag">
                            </div>
                            <div class="card-body">
                                دوربین عکاسی
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/lens.png" alt="bag">
                            </div>
                            <div class="card-body">
                                لنز دوربین
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/noor.png" alt="bag">
                            </div>
                            <div class="card-body">
                                نور
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/tripod.png" alt="bag">
                            </div>
                            <div class="card-body">
                                سه پایه
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/LCD.png" alt="lcd">
                            </div>
                            <div class="card-body">
                                محافظ و پایه LCD و کاور
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/mobilelens.png" alt="mobilelens">
                            </div>
                            <div class="card-body">
                                لنز مبایلی
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header" class="rounded-circle">
                                <img src="assets/images/cat/atolier.png" alt="atolier" class="rounded-circle">
                            </div>
                            <div class="card-body">
                                لوازم آتلیه
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/bag.png" alt="bag">
                            </div>
                            <div class="card-body">
                                کوله پشتی
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/camcorder.png" alt="bag">
                            </div>
                            <div class="card-body">
                                دوربین
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/camera.png" alt="bag">
                            </div>
                            <div class="card-body">
                                دوربین عکاسی
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/lens.png" alt="bag">
                            </div>
                            <div class="card-body">
                                لنز دوربین
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/noor.png" alt="bag">
                            </div>
                            <div class="card-body">
                                نور
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/tripod.png" alt="bag">
                            </div>
                            <div class="card-body">
                                سه پایه
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/LCD.png" alt="lcd">
                            </div>
                            <div class="card-body">
                                محافظ و کاور
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header">
                                <img src="assets/images/cat/mobilelens.png" alt="mobilelens">
                            </div>
                            <div class="card-body">
                                لنز مبایلی
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-md-3 col-lg-2 p-0">
                        <div class="digicala-cat-card">
                            <div class="card-header" class="rounded-circle">
                                <img src="assets/images/cat/atolier.png" alt="atolier" class="rounded-circle">
                            </div>
                            <div class="card-body">
                                لوازم آتلیه
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="forth-blue-adv  px-0 px-lg-3 py-1 mt-lg-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-3 mb-1 p-1 pb-0" id="forth-blue-adv">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="special">
        <div class="containerfluid px-3 pb-3">
            <h2 id="harajy">
                کالای حراجی و فروش ویژه
            </h2>
            <div class="row">
                <div class="col-12 col-md-2 d-none d-md-block">
                    <img src="assets/images/persentage.png" alt="persentage">
                </div>
                <div class="col-12 col-md-10">
                    <div class="product-slider-div">
                        <!-- Slider main container -->
                        <div class="swiper swiper-container product-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                عنوان محصول
                                            </h3>
                                            <div class="star"></div>
                                            <div class="price-container">
                                                <p class="new-price">
                                                    34.892 تومان
                                                </p>
                                                <div class="old-price">
                                                    <p>
                                                        39.600 تومان
                                                    </p>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="discount">
                                                <div class="inventory d-flex justify-content-between">
                                                    <p>
                                                        فروش رفته 
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                    <p>
                                                        موجودی
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="counter d-flex">
                                                <!-- <p id="demo"></p> -->
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            روزها
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ساعات
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            دقایق
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ثانیه ها
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                عنوان محصول
                                            </h3>
                                            <div class="star"></div>
                                            <div class="price-container">
                                                <p class="new-price">
                                                    34.892 تومان
                                                </p>
                                                <div class="old-price">
                                                    <p>
                                                        39.600 تومان
                                                    </p>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="discount">
                                                <div class="inventory d-flex justify-content-between">
                                                    <p>
                                                        فروش رفته 
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                    <p>
                                                        موجودی
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="counter d-flex">
                                                <!-- <p id="demo"></p> -->
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            روزها
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ساعات
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            دقایق
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ثانیه ها
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                عنوان محصول
                                            </h3>
                                            <div class="star"></div>
                                            <div class="price-container">
                                                <p class="new-price">
                                                    34.892 تومان
                                                </p>
                                                <div class="old-price">
                                                    <p>
                                                        39.600 تومان
                                                    </p>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="discount">
                                                <div class="inventory d-flex justify-content-between">
                                                    <p>
                                                        فروش رفته 
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                    <p>
                                                        موجودی
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="counter d-flex">
                                                <!-- <p id="demo"></p> -->
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            روزها
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ساعات
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            دقایق
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ثانیه ها
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                عنوان محصول
                                            </h3>
                                            <div class="star"></div>
                                            <div class="price-container">
                                                <p class="new-price">
                                                    34.892 تومان
                                                </p>
                                                <div class="old-price">
                                                    <p>
                                                        39.600 تومان
                                                    </p>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="discount">
                                                <div class="inventory d-flex justify-content-between">
                                                    <p>
                                                        فروش رفته 
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                    <p>
                                                        موجودی
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="counter d-flex">
                                                <!-- <p id="demo"></p> -->
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            روزها
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ساعات
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            دقایق
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ثانیه ها
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                عنوان محصول
                                            </h3>
                                            <div class="star"></div>
                                            <div class="price-container">
                                                <p class="new-price">
                                                    34.892 تومان
                                                </p>
                                                <div class="old-price">
                                                    <p>
                                                        39.600 تومان
                                                    </p>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="discount">
                                                <div class="inventory d-flex justify-content-between">
                                                    <p>
                                                        فروش رفته 
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                    <p>
                                                        موجودی
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="counter d-flex">
                                                <!-- <p id="demo"></p> -->
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            روزها
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ساعات
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            دقایق
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ثانیه ها
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                عنوان محصول
                                            </h3>
                                            <div class="star"></div>
                                            <div class="price-container">
                                                <p class="new-price">
                                                    34.892 تومان
                                                </p>
                                                <div class="old-price">
                                                    <p>
                                                        39.600 تومان
                                                    </p>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="discount">
                                                <div class="inventory d-flex justify-content-between">
                                                    <p>
                                                        فروش رفته 
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                    <p>
                                                        موجودی
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="counter d-flex">
                                                <!-- <p id="demo"></p> -->
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            روزها
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ساعات
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            دقایق
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ثانیه ها
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                عنوان محصول
                                            </h3>
                                            <div class="star"></div>
                                            <div class="price-container">
                                                <p class="new-price">
                                                    34.892 تومان
                                                </p>
                                                <div class="old-price">
                                                    <p>
                                                        39.600 تومان
                                                    </p>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="discount">
                                                <div class="inventory d-flex justify-content-between">
                                                    <p>
                                                        فروش رفته 
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                    <p>
                                                        موجودی
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="counter d-flex">
                                                <!-- <p id="demo"></p> -->
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            روزها
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ساعات
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            دقایق
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ثانیه ها
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="img">
                                        </div>
                                        <div class="card-body">
                                            <h3>
                                                عنوان محصول
                                            </h3>
                                            <div class="star"></div>
                                            <div class="price-container">
                                                <p class="new-price">
                                                    34.892 تومان
                                                </p>
                                                <div class="old-price">
                                                    <p>
                                                        39.600 تومان
                                                    </p>
                                                </div>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="discount">
                                                <div class="inventory d-flex justify-content-between">
                                                    <p>
                                                        فروش رفته 
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                    <p>
                                                        موجودی
                                                        <span>
                                                            5
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="counter d-flex">
                                                <!-- <p id="demo"></p> -->
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            روزها
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ساعات
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            دقایق
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="days px-2">
                                                    <p>
                                                        <span>
                                                            180
                                                        </span>
                                                    </p>
                                                    <p>
                                                        <span>
                                                            ثانیه ها
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- If we need pagination -->
                            <!-- <div class="swiper-pagination"></div> -->
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <!-- If we need scrollbar -->
                            <!-- <div class="swiper-scrollbar"></div> -->
                        </div>
                    </div>
                    <div class="d-flex justify-content-end p-1">
                        <a href="#" class="see-more in-red-color">
                            مشاهده همه
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="forth-blue-adv  px-0 px-lg-3 py-1 mt-lg-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-3 mb-1 p-1 pb-0" id="forth-blue-adv">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="flash px-0 px-lg-3 py-3">
        <div class="contaner-fluid px-3">
            <div class="desktopborder product-slider-div">
                <h2 id="flash">
                    فلش اورجینال را ارزانتر از همه جا بخرید!
                </h2>
                <!-- Slider main container -->
                <section class="product-slider-div px-md-3">
                    <!-- Slider main container -->
                    <div class="swiper swiper-container product-single-slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/images/cat/phone-1.jpg" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <h3>
                                            عنوان محصول
                                        </h3>
                                        <div class="star"></div>
                                        <div class="price-container">
                                            <p class="new-price">
                                                34.892 تومان
                                            </p>
                                            <div class="old-price">
                                                <p>
                                                    39.600 تومان
                                                </p>
                                            </div>
                                            <p class="text-center">
                                                <a href="#" class="btn add-to-basket-btn">
                                                    <i class="novicon-cart"></i>
                                                    افزودن به سبد خرید
                                                </a>
                                            </p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/images/cat/phone-1.jpg" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <h3>
                                            عنوان محصول
                                        </h3>
                                        <div class="star"></div>
                                        <div class="price-container">
                                            <p class="new-price">
                                                34.892 تومان
                                            </p>
                                            <div class="old-price">
                                                <p>
                                                    39.600 تومان
                                                </p>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/images/cat/phone-1.jpg" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <h3>
                                            عنوان محصول
                                        </h3>
                                        <div class="star"></div>
                                        <div class="price-container">
                                            <p class="new-price">
                                                34.892 تومان
                                            </p>
                                            <div class="old-price">
                                                <p>
                                                    39.600 تومان
                                                </p>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/images/cat/phone-1.jpg" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <h3>
                                            عنوان محصول
                                        </h3>
                                        <div class="star"></div>
                                        <div class="price-container">
                                            <p class="new-price">
                                                34.892 تومان
                                            </p>
                                            <div class="old-price">
                                                <p>
                                                    39.600 تومان
                                                </p>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/images/cat/phone-1.jpg" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <h3>
                                            عنوان محصول
                                        </h3>
                                        <div class="star"></div>
                                        <div class="price-container">
                                            <p class="new-price">
                                                34.892 تومان
                                            </p>
                                            <div class="old-price">
                                                <p>
                                                    39.600 تومان
                                                </p>
                                            </div>
                                            <p class="text-center">
                                                <a href="#" class="btn add-to-basket-btn">
                                                    <i class="novicon-cart"></i>
                                                    افزودن به سبد خرید
                                                </a>
                                            </p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/images/cat/phone-1.jpg" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <h3>
                                            عنوان محصول
                                        </h3>
                                        <div class="star"></div>
                                        <div class="price-container">
                                            <p class="new-price">
                                                34.892 تومان
                                            </p>
                                            <div class="old-price">
                                                <p>
                                                    39.600 تومان
                                                </p>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/images/cat/phone-1.jpg" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <h3>
                                            عنوان محصول
                                        </h3>
                                        <div class="star"></div>
                                        <div class="price-container">
                                            <p class="new-price">
                                                34.892 تومان
                                            </p>
                                            <div class="old-price">
                                                <p>
                                                    39.600 تومان
                                                </p>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="assets/images/cat/phone-1.jpg" alt="img">
                                    </div>
                                    <div class="card-body">
                                        <h3>
                                            عنوان محصول
                                        </h3>
                                        <div class="star"></div>
                                        <div class="price-container">
                                            <p class="new-price">
                                                34.892 تومان
                                            </p>
                                            <div class="old-price">
                                                <p>
                                                    39.600 تومان
                                                </p>
                                                <p class="text-center">
                                                    <a href="#" class="btn add-to-basket-btn">
                                                        <i class="novicon-cart"></i>
                                                        افزودن به سبد خرید
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <!-- <div class="swiper-pagination"></div> -->
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <!-- If we need scrollbar -->
                        <!-- <div class="swiper-scrollbar"></div> -->
                    </div>
                </section>
                <div class="d-flex justify-content-end p-1">
                    <a href="#" class="btn see-more in-blue-color">
                        مشاهده همه
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="forth-blue-adv  px-0 px-lg-3 py-1 mt-lg-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-3 mb-1 p-1 pb-0" id="forth-blue-adv">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 mb-1 p-1 pb-0">
                    <a href="#">
                        <div class="d-flex justify-content-between align-items-center flex-card">
                            <div class="card-header">
                                <img src="assets/images/flash.png" alt="flash">
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-list">
                                    لیست قیمت کلیک کنید
                                </a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="haraj  px-0 px-lg-3 py-1 mt-lg-3">
        <div class="container-fluid">
            <!-- Slider main container -->
            <div class="desktopborder product-slider-div px-md-3">
                <h2 id="haraj">
                    کالاهای حراج و ارزان قیمت
                </h2>
                <!-- Slider main container -->
                <div class="swiper swiper-container product-sliders py-3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
        </div>
    </section>

    </section>
    <!-- دسته بندی موبایل -->
    <section class="phone  px-0 px-lg-3 py-1 mt-lg-3">
        <div class="container-fluid">

            <div class="desktopborder product-slider-div px-md-3">
                <h2 id="phone">
                    دسته موبایل
                </h2>
                <div class="swiper swiper-container product-sliders py-3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-1.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end p-1 d-md-none">
            <a href="#" class="see-more in-red-color">
                مشاهده همه
            </a>
        </div>
    </section>
    <section class="cover  px-0 px-lg-3 py-1 mt-lg-3">
        <div class="container-fluid">

            <div class="desktopborder product-slider-div px-md-3">
                <h2 id="cover">
                    دسته کاور
                </h2>
                <div class="swiper swiper-container product-sliders py-3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-5.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <div class="d-flex justify-content-end p-1 d-md-none">
                    <a href="#" class="see-more in-red-color">
                        مشاهده همه
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="cover  px-0 px-lg-3 py-1 mt-lg-3">
        <div class="container-fluid">

            <div class="desktopborder product-slider-div px-md-3">
                <h2 id="handFree">
                    دسته باد و هندزفری
                </h2>
                <div class="swiper swiper-container product-sliders py-3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-9.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-10.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-11.jpg" alt="flash">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-12.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-9.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-btm">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-10.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center border-cross-left">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-11.jpg" alt="flash">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <a href="#">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-header">
                                            <img src="assets/images/cat/phone-12.jpg" alt="flash">
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <div class="d-flex justify-content-end p-1">
                    <a href="#" class="see-more in-red-color">
                        مشاهده همه
                    </a>
                </div>
            </div>
        </div>

    </section>
    <section class="cover  px-0 px-lg-3 py-1 mt-lg-3">
        <div class="container-fluid">

            <div class="desktopborder product-slider-div px-md-3">
                <h2 id="whatch">
                    دسته ساعت هوشمند
                </h2>
                <div class="swiper swiper-container product-sliders py-3">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-13.jpg" alt="flash" class="w-md-50">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-cross-btm">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-14.jpg" alt="flash"  class="w-md-50">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-cross-btm">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-14.jpg" alt="flash"  class="w-md-50">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-cross-left">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-15.jpg" alt="flash"  class="w-md-50">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-16.jpg" alt="flash"  class="w-md-50">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-cross-left-btm">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-13.jpg" alt="flash"  class="w-md-50">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-cross-btm">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-14.jpg" alt="flash"  class="w-md-50">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-cross-btm">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-14.jpg" alt="flash"  class="w-md-50">
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-cross-left">
                                    <div class="card-header  text-center">
                                        <img src="assets/images/cat/phone-15.jpg" alt="flash"  class="w-md-50">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="card-header text-center">
                                        <img src="assets/images/cat/phone-16.jpg" alt="flash"  class="w-md-50">
                                    </div>

                                </div>
                            </a>
                        </div>


                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <div class="d-flex justify-content-end p-1">
                    <a href="#" class="see-more in-red-color">
                        مشاهده همه
                    </a>
                </div>
            </div>
        </div>

    </section>
</main>
@endsection
@section("extraJs")
    <script src="{{url('/')}}/assets/js/script.js"></script>
    <script src="{{url('/')}}/assets/js/countDownDate.js"></script>

@endsection