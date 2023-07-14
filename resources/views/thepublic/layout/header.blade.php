<!DOCTYPE html>
<html lang="fa-IR">

<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/allpagecss.css">
    <!-- <link rel="stylesheet" href="{{url('/')}}/assets/css/nav.css"> -->

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">-->
    @yield("extraCss")
    <title>Document</title>
</head>

<body class="@yield('bodyClass')">
    <header>
        <nav id="supermenu" class="d-block d-md-flex px-1 pt-2 pb-1 align-items-center">
            <ul class="px-0 py-1 align-items-center">
                <li class="d-flex justify-content-center align-items-center d-lg-none p-0 w-25">
                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18" class="bars icon-svg">
                        <title>icon-svg</title>
                        <style>
                            .s0 {
                                fill: none;
                                stroke: #000000;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-width: 1.5
                            }
                        </style>
                        <path id="Layer" class="s0" d="m0.8 3q0-0.4 0.1-0.9 0.2-0.4 0.5-0.7 0.3-0.3 0.7-0.5 0.5-0.1 0.9-0.1l2.3-0.1q0.4 0.1 0.8 0.2 0.4 0.2 0.7 0.5 0.4 0.3 0.5 0.7 0.2 0.5 0.2 0.9v2.3q0 0.4-0.2 0.8-0.1 0.4-0.5 0.7-0.3 0.4-0.7 0.5-0.4 0.2-0.8 0.2h-2.3q-0.4 0-0.9-0.2-0.4-0.1-0.7-0.5-0.3-0.3-0.5-0.7-0.1-0.4-0.1-0.8zm0 9.7q0-0.4 0.1-0.9 0.2-0.4 0.5-0.7 0.3-0.3 0.7-0.5 0.5-0.1 0.9-0.1h2.3q0.4 0 0.8 0.1 0.4 0.2 0.7 0.5 0.4 0.3 0.5 0.7 0.2 0.5 0.2 0.9v2.3q0 0.4-0.2 0.8-0.1 0.4-0.5 0.7-0.3 0.4-0.7 0.5-0.4 0.2-0.8 0.2h-2.3q-0.4 0-0.9-0.2-0.4-0.1-0.7-0.5-0.3-0.3-0.5-0.7-0.1-0.4-0.1-0.8zm9.7-9.8q0-0.4 0.2-0.9 0.1-0.4 0.5-0.7 0.3-0.3 0.7-0.5 0.4-0.1 0.9-0.1h2.2q0.4 0 0.9 0.1 0.4 0.2 0.7 0.5 0.3 0.3 0.5 0.7 0.1 0.5 0.2 0.9v2.3q-0.1 0.4-0.2 0.8-0.2 0.4-0.5 0.7-0.3 0.4-0.7 0.5-0.5 0.2-0.9 0.2h-2.2q-0.5 0-0.9-0.2-0.4-0.1-0.7-0.5-0.4-0.3-0.5-0.7-0.2-0.4-0.2-0.8zm0 9.7q0-0.4 0.2-0.9 0.1-0.4 0.5-0.7 0.3-0.3 0.7-0.5 0.4-0.1 0.9-0.1h2.2q0.4 0 0.9 0.1 0.4 0.2 0.7 0.5 0.3 0.3 0.5 0.7 0.1 0.5 0.2 0.9v2.3q-0.1 0.4-0.2 0.8-0.2 0.4-0.5 0.7-0.3 0.4-0.7 0.5-0.5 0.2-0.9 0.2h-2.2q-0.5 0-0.9-0.2-0.4-0.1-0.7-0.5-0.4-0.3-0.5-0.7-0.2-0.4-0.2-0.8z" />
                    </svg>

                </li>

                <li class="p-0 px-lg-3"><a href="#">
                        <img src="{{url('/')}}/assets/images/logo.png" alt="kha">
                    </a></li>
                <li class="p-0 px-lg-3 d-none d-lg-block"><a href="#">
                        <div class="search-box input-group">
                            <input type="search" class="form-control d-none d-lg-block" placeholder="جستجو...">
                            <i class="fas fa-search submit_search" type="submit"></i>
                        </div>

                    </a></li>
                <li class="p-0 px-lg-3 d-none d-lg-block">
                    <a href="https://masihmobile.ir/wp-admin" class="btn btn-outline-success">
                        ثبت نام/ورود
                        <i class="novicon_account black"></i>
                    </a>
                </li>
                <li class="p-0 px-lg-3">
                    <div class="contentsticky_cart">
                        <div id="_desktop_cart">
                            <div class="blockcart cart-preview" data-refresh-url="//www.kharide20.com/module/ps_shoppingcart/ajax">
                                <div class="header-cart">
                                    <div class="cart-left">
                                        <div class="shopping-cart">آیکن سبد خرید</div>
                                        <!-- <i class="novicon_account black"></i> -->
                                    </div>
                                    <div class="cart-right">
                                        <span class="title-cart title_icon">سبد خرید من</span>
                                    </div>
                                    <span class="cart-products-count">0</span>
                                    <span class="label-items d-xs-none">آیتم ها</span>
                                </div>
                                <div class="cart_block">
                                    <div class="cart-block-content">
                                        <div class="no-items">
                                            محصولی در سبد خرید شما وجود ندارد
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="d-block d-lg-none py-0 m-0 px-3">
                <li class="p-0">
                    <form action="" class="search-form">
                        <input type="search" class="form-control mobile-search-bar" placeholder="جستجو...">
                        <button class="search-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="mx-auto h-5 w-5 icon-svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                </path>
                            </svg></button>
                    </form>

                </li>
            </ul>
        </nav>
        <nav id="mainmenu">
            <ul>
                <li>
                    <a href="#">
                        خانه
                    </a>
                </li>
                <li>
                    <a href="#">
                        محصولات
                    </a>
                    <ul>
                        <li>
                            <span>
                                فلش مموری
                            </span>
                            <ul>
                                <li><a href="#">فلش مموری</a>
                                    <ul class="">
                                        <li class="item ">
                                            <a href="#" title="فلش مموری ۸ گیگابایت">
                                                فلش مموری ۸ گیگابایت
                                            </a>
                                        </li>
                                        <li class="item ">
                                            <a href="#" title="فلش مموری ۱۶ گیگابایت">
                                                فلش مموری ۱۶ گیگابایت
                                            </a>
                                        </li>
                                        <li class="item ">
                                            <a href="#" title="فلش مموری ۳۲ گیگابایت">
                                                فلش مموری ۳۲ گیگابایت

                                            </a>
                                        </li>
                                        <li class="item ">
                                            <a href="#" title="فلش مموری ۶۴ گیگابایت">
                                                فلش مموری ۶۴ گیگابایت

                                            </a>
                                        </li>
                                        <li class="item ">
                                            <a href="#" title="فلش مموری 128 گیگابایت">
                                                فلش مموری 128 گیگابایت

                                            </a>
                                        </li>
                                        <li class="item ">
                                            <a href="#" title="فلش مموری 256 گیگابایت">
                                                فلش مموری 256 گیگابایت

                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        فلش مموری خاص

                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/84-فلش-مموری-سرعت-بالا" title="فلش مموری پر سرعت (USB 3.0/3.1)">فلش مموری پر سرعت (USB
                                                3.0/3.1)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/120-فلش-typec-otg" title="فلش مموری دوگانه OTG/USB ">فلش مموری دوگانه OTG/USB </a></li>
                                        <li class="item "><a href="https://www.kharide20.com/82-فلش-عروسکی" title="فلش مموری عروسکی">فلش مموری عروسکی</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/159-فلش-ارزان-قیمت" title="فلش مموری ارزان قیمت (Economy)">فلش مموری ارزان قیمت
                                                (Economy)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/160-فلش-تبلیغاتی" title="فلش مموری تبلیغاتی">فلش مموری تبلیغاتی</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        هارد
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/97-هارد-اکسترنال" title="هارد اکسترنال">هارد اکسترنال</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/163-قیمت-عمده-هارد-ssd-کامپیوتر-پر-سرعت" title="هارد SSD">هارد SSD</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        لیست قیمت فلش مموری
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="#" title="لیست قیمت فلش مموری وریتی VERITY">لیست قیمت
                                                فلش مموری وریتی VERITY</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت فلش مموری ویکو من VICCO MAN">لیست
                                                قیمت فلش مموری ویکو من VICCO MAN</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت فلش مموری سن دیسک SANDISK">لیست
                                                قیمت فلش مموری سن دیسک SANDISK</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت فلش دیتاپلاس DATA+">لیست قیمت فلش
                                                دیتاپلاس DATA+</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت فلش کوئین تک QUEEN TECH">لیست
                                                قیمت فلش کوئین تک QUEEN TECH</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت فلش گالکسی بیت GALEXBIT">لیست
                                                قیمت فلش گالکسی بیت GALEXBIT</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت فلش مموری پاناتک PANATECH">لیست
                                                قیمت فلش مموری پاناتک PANATECH</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت فلش مموری میکروسونیک MICROSONIC">لیست قیمت فلش مموری
                                                میکروسونیک MICROSONIC</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت فلش مموری ایکس انرژی   X-ENERGY">لیست قیمت فلش مموری
                                                ایکس انرژی X-ENERGY</a></li>
                                        <li class="item "><a href="#" title="لیست قیمت جدید فلش مموری بکسو  BEXO فلش ارزان قیمت">لیست قیمت
                                                جدید فلش مموری بکسو BEXO فلش ارزان قیمت</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li>
                            <span>
                                کارت حافظه
                            </span>
                            <ul>
                                <li>
                                    <a href="#">کارت حافظه (رم میکرو اس دی)</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/150-رم-8-گیگ" title="رم 8 گیگ میکرو اس دی موبایل">رم 8 گیگ میکرو اس دی موبایل</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/151-رم-16-گیگ" title="رم 16 گیگ میکرو اس دی موبایل">رم 16 گیگ میکرو اس دی موبایل</a>
                                        </li>
                                        <li class="item "><a href="https://www.kharide20.com/152-رم-32-گیگ" title="رم 32 گیگ میکرو اس دی موبایل">رم 32 گیگ میکرو اس دی موبایل</a>
                                        </li>
                                        <li class="item "><a href="https://www.kharide20.com/153-مموری-64-گیگ" title="رم 64 گیگ میکرو اس دی موبایل">رم 64 گیگ میکرو اس دی موبایل</a>
                                        </li>
                                        <li class="item "><a href="https://www.kharide20.com/154-رم-128-گیگ-میکرو" title="رم 128 گیگ میکرو اس دی موبایل">رم 128 گیگ میکرو اس دی موبایل</a>
                                        </li>
                                        <li class="item "><a href="https://www.kharide20.com/161-رم-256-گیگ" title="رم 256 گیگ میکرو اس دی موبایل">رم 256 گیگ میکرو اس دی موبایل</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">عنوان</a>
                                </li>
                                <li>
                                    <a href="#">عنوان</a>
                                </li>
                                <li>
                                    <a href="#">عنوان</a>
                                </li>
                                <li>
                                    <a href="#">عنوان</a>
                                </li>
                                <li>
                                    <a href="#">عنوان</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span>
                                لوازم جانبی کامپیوتر
                            </span>
                            <ul>
                                <li>
                                    <a href="#">موس</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/24-موس-سیم-دار" title="موس سیم دار usb">موس سیم دار usb</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/64-موس-بی-سیم" title="موس بی سیم">موس بی سیم</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/67-پد-موس" title="پد موس">پد موس</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">کیبرد</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/27-کیبورد" title="کیبورد سیم دار">کیبورد سیم دار</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">دسته بازی و گیم پد کامپیوتر</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/25-دسته-بازی" title="دسته بازی کامپیوتر تک">دسته بازی کامپیوتر تک</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/25-دسته-بازی" title="دسته بازی کامپیوتر دوبل">دسته بازی کامپیوتر دوبل</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">هدست</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/28-هدست-کامپیوتر" title=" قیمت هدفون و هدست"> قیمت هدفون و هدست</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/60-هدست-بلوتوثی" title="هدست بلوتوث و شارژی">هدست بلوتوث و شارژی</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">هاب و رم ریدر</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/56-قیمت-و-خرید-کارت-ریدر--خرید-عمده-رم-ریدر-ارزان" title="رم ریدر همه کاره و تک کاره">رم ریدر همه کاره و تک کاره</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/114-هاب-و-رم-ریدر" title="هاب ">هاب </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">وب کم و میکروفون
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/72-وبکم-میکروفون" title="وب کم و میکروفون">وب کم و میکروفون</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">دسته بازی پلی استیشن
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/121-لوازم-کنسول-پلی-استیشن" title="دسته بازی پلی استیشن تک">دسته بازی پلی استیشن تک</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/121-لوازم-کنسول-پلی-استیشن" title="دسته بازی پلی استیشن دوبل">دسته بازی پلی استیشن دوبل</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">کابل و اتصالات
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/116-کابل-تبدیل-تصویری-VGA" title="کابل و تبدیل تصویر HDMI/VGA...">کابل و تبدیل تصویر HDMI/VGA...</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/115-کابل-تبدیل-صوتی" title="کابل و تبدیل صوتی Aux/Sound Card">کابل و تبدیل صوتی Aux/Sound Card</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/117-کابل-پرینتر" title="کابل و تبدیل برق و پرینتر ">کابل و تبدیل برق و پرینتر </a></li>
                                        <li class="item "><a href="https://www.kharide20.com/118-کابل-سوکت-شبکه-تلفن" title="کابل و سوکت شبکه و تلفن ">کابل و سوکت شبکه و تلفن </a></li>
                                        <li class="item "><a href="https://www.kharide20.com/113-آداپتور-شارژر-موبایل" title="کابل و آداپتور شارژر ">کابل و آداپتور شارژر </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">هندزفری</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/29-هدفون-هندزفری" title="هندزفری سیم دار">هندزفری سیم دار</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/90-ایرپاد-هندزفری-بلوتوثی" title="هندزفری بی سیم (بلوتوثی)">هندزفری بی سیم (بلوتوثی)</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">اسپیکر</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/53-اسپیکر-بلوتوثی" title="اسپیکر شارژی">اسپیکر شارژی</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/54-اسپیکر-سیم-دار" title="اسپیکر سیم دار">اسپیکر سیم دار</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span>
                                لبتاب و نوت بوک
                            </span>
                            <ul class="">
                                <li class="item col-md-3 group">
                                    <span class="opener"></span>
                                    <span class="menu-title">
                                        لپ تاپ جدید استوک ( یکماه گارانتی تست )
                                    </span>
                                    <ul class="">
                                        <li class="item ">
                                            <a href="https://www.kharide20.com/125-لپ-تاپ-استوک-اروپایی" title="لیست قیمت لپ تاپ های جدید ( گارانتی یکماه )">
                                                لیست قیمت لپ تاپ های جدید ( گارانتی یکماه )</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span>
                                لوازم جانبی موبایل
                            </span>
                            <ul>
                                <li>
                                    <a href="#">لوازم جانبی موبایل
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/106-مونوپاد" title="مونوپاد گوشی موبایل">مونوپاد گوشی موبایل</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/90-ایرپاد-هندزفری-بلوتوثی" title=" هدفون و هندزفری بلوتوث"> هدفون و هندزفری بلوتوث</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/29-هدفون-هندزفری" title="قیمت هندزفری">قیمت هندزفری</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/92-قیمت-کیف-و-کاور-موبایل--خرید-ارزان-با-قیمت-همکاری" title="کیف و کاور گوشی موبایل">کیف و کاور گوشی موبایل</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/69-پاور-بانک" title="پاور بانک">پاور بانک</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/109-هولدر-و-نگهدارنده-گوشی-موبایل" title="هولدر و نگهدارنده گوشی موبایل">هولدر و نگهدارنده گوشی موبایل</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/129-شارژر-فندکی" title="شارژر فندکی موبایل">شارژر فندکی موبایل</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/89-كابل-شارژر-موبایل" title="کابل شارژر موبایل">کابل شارژر موبایل</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/164-مبدل-OTG" title="تبدیل OTG و اتصالات">تبدیل OTG و اتصالات</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/29-هدفون-هندزفری" title="هندزفری سیم دار ( ارزان )">هندزفری سیم دار ( ارزان )</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/113-آداپتور-شارژر-موبایل" title="کلگی و کابل شارژر موبایل">کلگی و کابل شارژر موبایل</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">تزئینات فانتزی
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/127-بند-فانتزی-موبایل-و-فلش-2020" title="بند موبایل و فلش مموری فانتزی">بند موبایل و فلش مموری فانتزی</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/128-جا-کلیدی-و-جاسوئیچی-فانتزی" title="جاسوئیچی فانتزی">جاسوئیچی فانتزی</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/126-لوازم-فانتزی-و-تزئینات" title="بند آویز دستی و گردنی">بند آویز دستی و گردنی</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">اسپیکر</a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/53-اسپیکر-بلوتوثی" title="اسپیکر شارژی(بلوتوث)">اسپیکر شارژی(بلوتوث)</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">ویژه ها
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/165-کالا-های-حراجی-و-ارزان-قیمت" title="کالا های حراجی و ارزان قیمت">کالا های حراجی و ارزان قیمت</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span>
                                بازی و نرم افزار
                            </span>
                            <ul>
                                <li>
                                    <a href="#">بازی کامپیوتر
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/166-مجموعه-بازی-ها-collections" title="مجموعه بازی ها (COLLECTIONS)">مجموعه بازی ها (COLLECTIONS)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/167-بازی-های-اکشن-action" title="بازی های اکشن (ACTION)">بازی های اکشن (ACTION)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/168-بازی-های-ماجراجویی-adventure" title="بازی ماجراجویی (ADVENTURE)">بازی ماجراجویی (ADVENTURE)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/169-بازی-های-استراتژی-strategy" title="بازی های استراتژی (STRATEGY)">بازی های استراتژی (STRATEGY)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/170-بازی-های-مبارزه-ای-fighting" title="بازی های مبارزه ای (FIGHTING)">بازی های مبارزه ای (FIGHTING)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/171-بازی-های-ورزشی-sports" title="بازی های ورزشی (SPORTS)">بازی های ورزشی (SPORTS)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/77-بازی-کامپیوتری-حراجی" title=" جشنواره بازی های حراجی  "> جشنواره بازی های حراجی </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">نرم افزار
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/172-سیستم-عامل-ها-windows-آفیس-office" title="سیستم عامل و آفیس (Windows/Office) ">سیستم عامل و آفیس (Windows/Office) </a></li>
                                        <li class="item "><a href="https://www.kharide20.com/173-اسیستنت-و-مجموعه-نرم-افزار-ها" title="اسیستنت و مجموعه نرم افزار ها (ASSISTANT+)">اسیستنت و مجموعه نرم افزار ها (ASSISTANT+)</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/174-طراحی-مهندسی-و-نقشه-کشی" title="طراحی مهندسی و نقشه کشی">طراحی مهندسی و نقشه کشی</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/175-مهندسی-برنامه-نویسی-و-آمار" title="مهندسی برنامه نویسی و آمار">مهندسی برنامه نویسی و آمار</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/176-شبکه-سازی-و-آنتی-ویروس" title="شبکه سازی و آنتی ویروس">شبکه سازی و آنتی ویروس</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/177-عمومی-کامپیوتر-و-موبایل" title="عمومی کامپیوتر و موبایل">عمومی کامپیوتر و موبایل</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/178-گرافیکی-تصویر-و-تنظیم-صدا-و-موسیقی" title="گرافیکی و تنظیم صدا و موسیقی ">گرافیکی و تنظیم صدا و موسیقی </a></li>
                                        <li class="item "><a href="https://www.kharide20.com/75-نرم-افزار-آموزشی-وتخصصی" title="نرم افزار های آموزشی">نرم افزار های آموزشی</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">بازی های کنسول
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/42--بازی-ایکس-باکس360" title="بازی XBOX 360">بازی XBOX 360</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/41-بازی-پلی-استیشن" title="بازی پلی استیشن">بازی پلی استیشن</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">کارتون/انیمیشن/انیمه
                                    </a>
                                    <ul class="">
                                        <li class="item "><a href="https://www.kharide20.com/156-کارتون-انیمیشن" title="کارتون های جدید">کارتون های جدید</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/156-کارتون-انیمیشن" title="انیمیشن سینمایی">انیمیشن سینمایی</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/156-کارتون-انیمیشن" title="انیمیشن سریالی">انیمیشن سریالی</a></li>
                                        <li class="item "><a href="https://www.kharide20.com/156-کارتون-انیمیشن" title="جشنواره انیمیشن حراجی">جشنواره انیمیشن حراجی</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span>
                                لوازم مصرفی
                            </span>
                            <ul class="">
                                <li class="item col-md-3"><a href="https://www.kharide20.com/67-پد-موس" title="پد موس ">پد موس </a></li>
                                <li class="item col-md-3"><a href="https://www.kharide20.com/70-پخش-عمده-انواع-اسپری-تمیز-کننده--نازل-ترین-قیمت" title="اسپری تمیزکننده">اسپری تمیزکننده</a></li>
                                <li class="item col-md-3"><a href="https://www.kharide20.com/71-لیبل-کیبورد-" title="کاور و لیبل کیبورد">کاور و لیبل کیبورد</a></li>
                                <li class="item col-md-3"><a href="https://www.kharide20.com/144-ماژیک" title="ماژیک CD/DVD">ماژیک CD/DVD</a></li>
                                <li class="item col-md-3"><a href="https://www.kharide20.com/143-چسب" title="چسب">چسب</a></li>
                                <li class="item col-md-3"><a href="https://www.kharide20.com/145-سی-دی-خام" title="CD خام">CD خام</a></li>
                                <li class="item col-md-3"><a href="https://www.kharide20.com/146-پخش-عمده-انواع-dvd-خام--لیست-قیمت-دی-وی-دی" title="ِDVD خام ">ِDVD خام </a></li>
                                <li class="item col-md-3"><a href="https://www.kharide20.com/147-باطری" title="باتری">باتری</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="https://masihmobile.ir/shop">
                        فروشگاه
                    </a>
                 </li>           
                <li><a href="#">
                        درباره ما
                    </a></li>
              
                    <li><a href="#">
                        تماس با ما
                    </a></li>

                <li><a href="#">
                        ثبت فیش بانکی
                    </a></li>
            </ul>
        </nav>
    </header>