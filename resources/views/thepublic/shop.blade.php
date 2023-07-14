@extends('thepublic.layout.master')
@section("extraCss")
<link rel="stylesheet" href="{{url('/')}}/assets/css/select2.min.css">
<link rel="stylesheet" href="{{url('/')}}/assets/css/shop.css">
@endsection
@section("bodyClass")
shop
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
    <h1>
        فروشگاه موبایل مسیحا
    </h1>

    <div class="row">
        <section class="products col-md-9">
            <div class="card mb-3 nolink">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <div class="d-flex flex-wrap w-50">
                        <p>
                            نمایش: &nbsp;
                        </p>
                        <p>
                            <a href="#" class="active" id="items9">9</a>
                            /
                            <a href="#" id="items12">12</a>/
                            <a href="#" id="items18">18</a>/
                            <a href="#" id="items24">24</a>/
                            <a href="#">
                                <i class="fas fa-th-large"></i>
                            </a>/
                            <a href="#">
                                <i class="fas fa-th"></i>
                            </a>
                        </p>
                    </div>
                    <div>
                        <select name="orderby" class="orderby select2" aria-label="سفارش خرید">
                            <option value="menu_order" selected="selected">مرتب&zwnj;سازی پیش&zwnj;فرض</option>
                            <option value="popularity">مرتب&zwnj;سازی بر اساس محبوبیت</option>
                            <option value="rating">مرتب&zwnj;سازی بر اساس امتیاز</option>
                            <option value="date">مرتب&zwnj;سازی بر اساس آخرین</option>
                            <option value="price">مرتب&zwnj;سازی بر اساس ارزانترین</option>
                            <option value="price-desc">مرتب&zwnj;سازی بر اساس گرانترین</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3">
                        <div class="card">
                            <img src="{{url('/')}}/assets/images/cat/phone-1.jpg" alt="...">
                            <div class="card-body">
                                <div class="product-card-text">

                                    <p>تلویزیون جی پلاس ۵۰ اینچ</p>
                                    <a href="#" class="btn btn-danger">افزودن به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <aside class="d-none d-md-block col-md-3 shop-sidebar">
            <section class="product-setutation card">
                <h2>
                    وضعیت موجودی محصول
                </h2>
                <div>
                    <form action="#">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                حراج
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                موجود است
                            </label>
                        </div>
                    </form>
                </div>
            </section>
            <section class="product-filter-price card">
                <h2>
                    فیلتر بر اساس قیمت
                </h2>
                <div class="range-slider">
                        <span class="rangeValues"></span>
                        <input value="1000" min="1000" max="50000" step="500" type="range">
                        <input value="50000" min="1000" max="50000" step="500" type="range">
                </div>
            </section>
            <section class="product-filter-color card">
                <h2>
                    فیلتر بر اساس رنگ:

                </h2>
                <ul>
                    <li class="d-flex justify-content-between align-items-center mb-5">
                        <a href="#">
                            <span class="rounded-circle bg-danger px-3 py-1">&nbsp;</span>
                            قرمز
                        </a>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-5">
                        <a href="#">
                            <span class="rounded-circle bg-danger px-3 py-1">&nbsp;</span>
                            قرمز
                        </a>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-5">
                        <a href="#">
                            <span class="rounded-circle bg-danger px-3 py-1">&nbsp;</span>
                            قرمز
                        </a>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                </ul>
            </section>
            <section class="product-filter-brand card">
                <h2>
                    فیلتر بر اساس برند

                </h2>
                <ul>
                    <li class="d-flex justify-content-between align-items-center">
                        <a href="#">
                            <span>
                                <img src="{{url('/')}}/assets/images/brand.jpg" alt="jpg">
                            </span>
                            سامسونگ
                        </a>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                        <a href="#">
                            <span>
                                <img src="{{url('/')}}/assets/images/brand.jpg" alt="jpg">
                            </span>
                            سامسونگ
                        </a>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                        <a href="#">
                            <span>
                                <img src="{{url('/')}}/assets/images/brand.jpg" alt="jpg">
                            </span>
                            سامسونگ
                        </a>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- <section class="product-filter-stars card">
                <h2>
                   امتیاز محصول

                </h2>
                <ul>
                    <li class="d-flex justify-content-between align-items-center">
                        <div>
                        <div id="half-stars-example">
                            <div class="rating-group">
                                <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
                                <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
                                <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
                                <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
                                <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
                                <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
                                <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
                                <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
                                <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
                            </div>
                        </div>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                        <div>
                        <div id="half-stars-example">
                            <div class="rating-group">
                                <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
                                <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
                                <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
                                <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
                                <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
                                <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
                                <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
                                <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
                                <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
                            </div>
                        </div>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                    <li class="d-flex justify-content-between align-items-center">
                        <div>
                        <div id="half-stars-example">
                            <div class="rating-group">
                                <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
                                <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
                                <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
                                <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
                                <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
                                <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
                                <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
                                <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
                                <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
                            </div>
                        </div>
                        <a href="#">
                            <span class="rounded-circle product-side-contity">12</span>
                        </a>
                    </li>
                </ul>
            </section> -->
        </aside>
    </div>

</main>
@endsection
@section("extraJs")
<script src="{{url('/')}}/assets/js/select2.min.js"></script>
<script src="{{url('/')}}/assets/js/shop.js"></script>
@endsection