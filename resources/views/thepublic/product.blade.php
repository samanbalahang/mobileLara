@extends('thepublic.layout.master')
@section("extraCss")
<link rel="stylesheet" href="{{url('/')}}/assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="{{url('/')}}/assets/css/product.css">
@endsection
@section("bodyClass")
product
@endsection

@section("main")
<main class="container-fluid">
    <nav aria-label="breadcrumb" class="pt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">
                    <i class="fas fa-home"></i>
                    Home
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">فروشگاه</li>
        </ol>
    </nav>
    <div class="card mb-3">
        <div class="container-fluid p-3">
            <div class="row">
                <aside class="col-12 col-md-4">
                    <section class="thecounter">
                        <h2>
                            زمان باقی مانده
                        </h2>
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
                    </section>
                    <section class="product-large-img">
                        <img id="productImage" src="{{url('/')}}/assets/images/cat/small/phone-1.jpg" data-zoom-image="{{url('/')}}/assets/images/cat/larg/phone-1.jpg" />
                    </section>
                    <section class="click-zoom text-center">
                        <div class="hover-expand">
                            <div class="icon">
                                <i class="fas fa-arrows-alt f-18"></i>
                            </div>
                            <div class="text">
                                <span>
                                    برای بزرگ نمایی کلیک کنید
                                </span>
                            </div>

                        </div>
                    </section>
                    <section class="sells d-flex justify-content-between">
                        <p>
                            فروش رفته
                            <span>
                                12
                            </span>
                        </p>
                        <p>
                            تعداد موجودی
                            <span>
                                12
                            </span>
                        </p>
                    </section>
                </aside>
                <div class="col-12 col-md-8">
                    <header class="d-flex justify-content-between align-items-center border-bottom border-secondary">
                        <h1>
                            عنوان محصول
                        </h1>
                        <div class="social-medias d-flex">
                            <p class="text-secondary">
                                اشتراک گذاری:
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-telegram"></i></a>
                            </p>
                        </div>
                    </header>
                    <section class="dietailes">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="cat">
                                        <strong>
                                            دسته :
                                        </strong>
                                        <span>
                                            موبایل
                                        </span>
                                    </div>
                                    <p class="describe">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                    </p>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary">
                                            <i class="far fa-heart"></i>
                                            افزودن به علاقه مندی ها
                                        </a>
                                        <a href="#" class="btn btn-primary">
                                            <i class="as fa-random"></i>
                                            مقایسه
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex align-items-center">
                                        <div class="staring">
                                            <div class="Stars" style="--rating: 4;" aria-label="Rating of this product is 2.3 out of 5.">
                                            </div>
                                        </div>
                                        <a href="#">
                                            (مشاهده نظرات)
                                        </a>
                                    </div>
                                    <section class="garaanty">
                                        <div class="bazdid   border-bottom border-secondary">
                                            <p>
                                                <i class="fas fa-eye text-danger"></i>
                                                <strong>
                                                    153
                                                </strong>
                                                نفر در حال مشاهده محصول هستند
                                            </p>
                                        </div>
                                        <ul>
                                            <li>
                                                <i class="fas fa-shield-alt  text-danger"></i>
                                                تضمین اصالت و کیفیت کالا
                                            </li>
                                            <li>
                                                <i class="fas fa-truck  text-danger"></i>
                                                ارسال با پست پیشتاز

                                            </li>
                                            <li>
                                                <i class="fas fa-dollar-sign  text-danger"></i>
                                                تضمین کمترین قیمت

                                            </li>
                                            <li>
                                                <i class="fas fa-phone  text-danger"></i>
                                                پشتیبانی ۲۴ ساعته

                                            </li>
                                        </ul>

                                    </section>
                                    <a href="#" class="btn btn-success text-white my-3">
                                        <span>
                                            15
                                        </span>
                                        <i class="fas fa-check"></i>
                                        عدد در انبار
                                    </a>



                                </div>
                                <section class="addtobasket col-md-12">
                                    <div class="d-flex align-items-center">
                                        <div class="number-of-order p-3">
                                            <form action="#">
                                                <input type="button" value="-" class="minus">
                                                <input type="number" id="quantity_647ca2af56ea9" class="input-text qty text" value="1" title="تعداد" min="1" max="15" name="quantity" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                                                <input type="button" value="+" class="plus">
                                            </form>
                                        </div>
                                        <a href="#" class="btn btn-danger text-white">
                                            افزودن به سبد خرید
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="p-3">
                                            <i class="far fa-money-bill-alt"></i>
                                            قیمت محصول:​
                                        </p>
                                        <div class="d-flex">
                                            <p class="old-price p-3">
                                                1/000/000
                                                <span>
                                                    تومان
                                                </span>
                                            </p>
                                            <p class="new-price p-3">
                                                900/000
                                                <span>
                                                    تومان
                                                </span>
                                            </p>
                                        </div>
                                    </div>

                                </section>
                                <section class="advertize">

                                    <p>
                                        <i class="fas fa-truck text-success"></i>
                                        <strong>
                                            ارسال رایگان برای سفارش های بالای
                                            <span>
                                                ۵۰۰ تومان
                                            </span>
                                        </strong>
                                        <br>
                                        <span class="text-secondary">
                                            چنان چه جمع صورت حساب شما بالای
                                            <span>
                                                ۵۰۰
                                                هزار تومان
                                            </span>
                                            شود هزینه پست برای شما به صورت رایگان محاسبه خواهد شد.
                                        </span>
                                    </p>
                                </section>

                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
    @yield('fiveInRow')
    <div class="card mb-3">
        <div class="container-fluid p-3" id="accordionExample">
            <div class="card py-4">
                <div class="product-describe d-flex justify-content-center align-items-center">
                    <div class="describ-title" id="firstDescribe">
                        <a data-bs-toggle="collapse" data-bs-target="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            توضیحات
                        </a>

                    </div>
                    <div class="describ-title" id="secdescribe">
                        <a data-bs-toggle="collapse" data-bs-target="#collapseExampleExtra" role="button" aria-expanded="false" aria-controls="collapseExampleExtra">
                            توضیحات تکمیلی
                        </a>
                    </div>
                    <div class="describ-title" id="thirddescribe">
                        <a data-bs-toggle="collapse" data-bs-target="#collapseExampleComment" role="button" aria-expanded="false" aria-controls="collapseExampleComment">
                            نظرات
                            <span>
                                (1)
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-collapse collapse" aria-labelledby="firstDescribe" data-bs-parent="accordionExample" id="collapseExample">
                <div>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>
                </div>
            </div>
            <div class="accordion-collapse collapse" id="collapseExampleExtra" aria-labelledby="secdescribe" data-bs-parent="accordionExample">
                <div class="d-flex justify-content-start border-bottom border-secondary">
                    <p class="dietailes">
                        رنگ:
                    </p>
                    <p class="dietailes">
                        آبی, سبز, قرمز, نارنجی
                    </p>
                </div>
                <div class="d-flex justify-content-start">

                    <p class="dietailes">
                        برند:
                    </p>
                    <p class="dietailes">
                        ماکروسافت
                    </p>
                </div>
            </div>
            <div class="accordion-collapse collapse" id="collapseExampleComment" aria-labelledby="thirddescribe" data-bs-parent="accordionExample">
                <h3 class="text-center">
                    4
                </h3>
                <div class="m-auto">
                    <div class="staring text-center">
                        <div class="Stars" style="--rating: 4;" aria-label="Rating of this product is 2.3 out of 5.">
                        </div>
                    </div>
                </div>
                <div class="starCount">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <div class="Stars" style="--rating: 5;" aria-label="Rating of this product is 2.3 out of 5.">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="slide bg-secondary"></div>
                            </div>
                            <div class="col-2">
                                0
                            </div>
                            <div class="col-2">
                                <div class="Stars" style="--rating: 4;" aria-label="Rating of this product is 2.3 out of 5.">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="slide bg-success"></div>
                            </div>
                            <div class="col-2">
                                1
                            </div>
                            <div class="col-2">
                                <div class="Stars" style="--rating: 3;" aria-label="Rating of this product is 2.3 out of 5.">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="slide bg-secondary"></div>
                            </div>
                            <div class="col-2">
                                0
                            </div>
                            <div class="col-2">
                                <div class="Stars" style="--rating: 2;" aria-label="Rating of this product is 2.3 out of 5.">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="slide bg-secondary"></div>
                            </div>
                            <div class="col-2">
                                0
                            </div>
                            <div class="col-2">
                                <div class="Stars" style="--rating: 1;" aria-label="Rating of this product is 2.3 out of 5.">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="slide bg-secondary"></div>
                            </div>
                            <div class="col-2">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="previous">
                    <div class="conteiner-fluid">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <img src="{{url('/')}}/assets/images/users-logos.png" alt="logos" class="avatar">
                                    <p>
                                        test – مارس 14, 2023
                                        این یک متن امتحانی است.
                                    </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="Stars" style="--rating: 4;" aria-label="Rating of this product is 2.3 out of 5.">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newcomment">
                    <p>
                        دیدگاه خود را بنویسید
                    </p>
                    <p>
                        نشانی ایمیل شما منتشر نخواهد شد. بخش‌های موردنیاز علامت‌گذاری شده‌اند
                        <span class="text-danger">
                            *
                        </span>
                    </p>
                    <p>
                        امتیاز شما
                        <span class="text-danger">
                            *
                        </span>
                    <div id="full-stars-example">
                        <div class="rating-group">
                            <input class="rating__input rating__input--none" name="rating" id="rating-none" value="0" type="radio">
                            <label aria-label="No rating" class="rating__label" for="rating-none"><i class="rating__icon rating__icon--none fa fa-ban"></i></label>
                            <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating" id="rating-1" value="1" type="radio">
                            <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                            <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating" id="rating-3" value="3" type="radio" checked>
                            <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                            <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                        </div>
                    </div>
                    </p>
                    <form action="#">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">
                                دیدگاه شما
                                <span class="text-danger">
                                    *
                                </span>
                            </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="d-flex w-100">
                            <div class="w-50 p-3">
                                <label for="exampleFormControlInput1" class="form-label">مزایا</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="w-50 p-3">
                                <label for="exampleFormControlInput1" class="form-label">معایب</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="d-flex w-100">
                            <div class="w-50 p-3">
                                <label for="exampleFormControlInput1" class="form-label">نام</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="w-50 p-3">
                                <label for="exampleFormControlInput1" class="form-label">ایمیل</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <input type="checkbox">
                        <label for="#">
                            ذخیره نام، ایمیل و وبسایت من در مرورگر برای زمانی که دوباره دیدگاهی می‌نویسم.
                        </label>
                        <p>
                            شما باید وارد سیستم شوید تا بتوانید عکس ها را به بررسی خود اضافه کنید.
                        </p>
                        <input type="submit" value="ثبت" class="btn btn-success text-white">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <setion class="oter-product">
        <h2>
            محصولات پیشنهادی
        </h2>
        <div class="swiper swiper-container product-circledProduct-slider mb-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/light.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/mobilelens.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/noor.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/phone-1.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/phone-2.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/phone-3.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/light.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/mobilelens.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/noor.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/phone-1.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/phone-2.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                    <a href="#">
                        <img src="{{url('/')}}/assets/images/cat/circle/phone-3.jpg" alt="img">
                    </a>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet 

                        </p>
                        <a href="#" class="btn btn-success">
                            مشاهده
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="swiper-scrollbar circledProduct"></div>
            <!-- <div class="swiper-button-prev circledProduct"></div>
                <div class="swiper-button-next circledProduct"></div> -->
        </div>
        <div class="d-flex justify-content-left p-1">
            <a href="#" class="see-more in-red-color">
                مشاهده همه
            </a>
        </div>
    </setion>
</main>
@endsection
@section("extraJs")
<script src="{{url('/')}}/assets/js/jquery.ez-plus.js"></script>
<script src="{{url('/')}}/assets/js/countDownDate.js"></script>
<script src="{{url('/')}}/assets/js/product.js"></script>
@endsection