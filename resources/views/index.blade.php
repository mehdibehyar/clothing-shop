<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main pag</title>
    <link rel="stylesheet" href="./main-style.css">
    <link rel="icon" type="image/x-icon" href="./img/iconfort4.webp">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
        crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @vite('resources/css/index.css')

</head>
<body>
<!--== HEADER& NAVBAR ====-->

<section class="header container-fluid">
    <header>
        <nav>
            <!--=== NAVBAR TOP ===-->
            <div class="row topnav d-flex justify-content-between
                        align-content-center border-bottom">
                <div class="col d-none d-lg-inline-flex">
                    <!-- =NAME OLINE SHOP =-->
                    <div class="name-onlinshop mt-3">
                        <p class="h5 fw-bolder">فروشگاه اینترنتی دیریم</p>
                    </div>
                </div>
                <!--= MEIU =-->
                <div class="col-lg-6 col-4 menue ">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                            <button class="navbar-toggler"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse "
                                 id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           aria-current="page"
                                           href="#">مجله</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="#">مشاوره</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="#">تماس با ما </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">فروشگاه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">پیگیری
                                            سفارش</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link">راهنمای
                                            پیگیری سفارش</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
                <div class="col-4 logo-in-top d-flex d-lg-none ">
                    <img class="logo-img" src="./img/dream-logo.png"
                         alt="">
                </div>
                <div class="col-4 d-flex justify-content-end mt-2">
                    <div class="d-none d-lg-flex">
                        <a href="#" class="mx-3 text-muted"><i
                                class="bi
                                            bi-instagram"></i></a>
                        <a href="#" class="text-muted"><i class="bi
                                            bi-telegram"></i></a>
                    </div>
                    <div class="d-flex d-lg-none">
                        <i class="bi bi-person"></i>
                        <div class="position-relative mx-3">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="25" height="25"
                                 fill="currentColor" class="bi bi-bag
                                            text-muted" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5
                                                2.5V4h-5v-.5A2.5 2.5 0 0 1 8
                                                1zm3.5 3v-.5a3.5 3.5 0 1 0-7
                                                0V4H1v10a2 2 0 0 0 2 2h10a2 2 0
                                                0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0
                                                1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg>
                            <span class="span1 position-absolute
                                                text-white countere shownumbas1">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- =====================================================close navbar in top page =============-->
        <div class="row row-nav-basket border-bottom">
            <!--================================================== bascket & login & like===== -->
            <div class="col-4 d-flex d-none d-lg-flex">
                <div class="ms-2 border-start ps-3 pe-5 d-flex">
                    <div class="position-relative mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="25" height="25"
                             fill="currentColor" class="bi bi-bag
                                            text-muted" viewBox="0 0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5
                                                2.5V4h-5v-.5A2.5 2.5 0 0 1 8
                                                1zm3.5 3v-.5a3.5 3.5 0 1 0-7
                                                0V4H1v10a2 2 0 0 0 2 2h10a2 2 0
                                                0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0
                                                1-1 1H3a1 1 0 0 1-1-1V5z"/>
                        </svg>
                        <span class="span1 position-absolute
                                                text-white countere "
                              id="shownumbas">0</span>
                    </div>
                    <span class="span1 text-muted mb-2"> 0
                                            تومان </span>
                </div>
                <div class="ms-2 border-start ps-3 d-flex">
                    <div class="position-relative">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="25" height="25"
                            fill="currentColor" class="bi
                                                bi-heart text-muted" viewBox="0
                                                0 16 16">
                            <path d="m8
                                                    2.748-.717-.737C5.6.281
                                                    2.514.878 1.4 3.053c-.523
                                                    1.023-.641 2.5.314 4.385.92
                                                    1.815 2.834 3.989 6.286
                                                    6.357 3.452-2.368
                                                    5.365-4.542
                                                    6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                                    10.4.28 8.717 2.01L8
                                                    2.748zM8 15C-7.333 4.868
                                                    3.279-3.04 7.824
                                                    1.143c.06.055.119.112.176.171a3.12
                                                    3.12 0 0 1
                                                    .176-.17C12.72-3.042 23.333
                                                    4.867 8 15z"></path>
                        </svg></i>
                        <span class="span1 position-absolute
                                            text-white countere counter">0</span>
                    </div>
                    <span>علاقه مندی ها</span>
                </div>
                <div>
                    <i class="bi bi-person"></i>
                    <span>ورود/ثبت نام</span>
                </div>
            </div>

            <!-- ==========product search ======-->
            <div class="col-6 d-none d-lg-flex">
                <div class="input-group inputgroup1 mb-3">
                    <button type="button" class="btn btn-danger
                                        btn-outline-danger"><i class="bi
                                            bi-search
                                            text-white"></i></button>
                    <button type="button" class="btn
                                        dropdown-toggle
                                        dropdown-toggle-split border"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                                        <span class="text-muted ms-3"> انتخاب
                                            دسته
                                            بندی
                                        </span>
                        <span class="visually-hidden">Toggle
                                            Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">انتخاب
                                دسته بندی</a></li>
                        <li><a class="dropdown-item" href="#">اکسسوری</a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                        <li>خدمات
                            <ul>
                                <li>خدمات رزرو </li>
                                <li>خدمات ارسال</li>
                            </ul>
                        </li>
                        </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                        <li><a class="dropdown-item" href="#">کلاه
                            </a></li>
                    </ul>
                    <input type="text" class="form-control"
                           placeholder="جستجوی محصولات"
                           aria-label="Text input with segmented
                                        dropdown
                                        button">
                </div>
            </div>
            <!-- ============logo ====-->
            <div class="col-2 d-none d-lg-flex">
                <img class="logo-img" src="./img/dream-logo.png"
                     alt="">
            </div>
        </div>


        <!--============ close bascket & login & like =============-->
        <div class="row border-bottom">
            <!-- ====dropdown list ===-->
            <div class="col-2 mt-3 d-none d-lg-flex">
                <ul>
                    <li class="dropdown1 "><p
                            class="textdroupdown
                                            position-relative"><i
                                class="bi bi-list "></i>دسته
                            بندی
                            کالاها</p>
                        <div class="dropdowncontent1 ">
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#">کیف</a>
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#">کفش</a>
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#">کلاه</a>
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#">کاپشن</a>
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#">کاپشن</a>
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#">کاپشن</a>
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#">کاپشن</a>
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#"> تذس کاپشن</a>
                            <a class="drop-item text-center
                                                border
                                                py-2 text-decoration-none
                                                text-muted
                                                " href="#">کاپشن</a>
                        </div>
                </ul>
            </div>
            <!--===== menu in end header ====-->
            <div class="col-8 mt-3 d-none d-lg-flex mnuhed">
                <ul class=" d-flex flex-row menuul">
                    <li class="me-2 menulist">
                        <a class="menu-link text-muted
                                                munli"
                           aria-current="page"
                           href="#">مجله</a>
                    </li>
                    <li class="me-3 menulist">
                        <a class="menu-link text-muted
                                                munli"
                           href="#">پیگیری سفارش</a>
                    </li>
                    <li class="me-3 menulist dropdown">
                        <a class="menu-link text-muted"
                           href="#">سفارشات رزرو<i class="bi bi-chevron-compact-down"></i></a>
                        <div class="dropdowncontent">
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">راهنمای
                                رزرو سفارشات</a>
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">ارسال
                                سفارشات رزرو</a>
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">سفارشات
                                من</a>
                        </div>
                    </li>
                    <li class="me-3 menulist dropdown">
                        <a class="menu-link text-muted
                                                munli">کیف پول<i class="bi bi-chevron-compact-down pt-2"></i></a>
                        <div class="dropdowncontent">
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">راهنمای
                                کیف پول </a>
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">موجودی
                                و شارژکیف پول</a>
                        </div>
                    </li>
                    <li class="me-3 menulist">
                        <a class="menu-link text-muted
                                                munli">تماس با
                            ما</a>
                    </li>
                    <li class="me-3 menulist">
                        <a class="menu-link text-muted
                                                munli">مجله
                            دیریم</a>
                    </li>
                    <li class="me-3 menulist dropdown">
                        <a class="menu-link text-muted
                                                munli">فروشگاه<i class="bi bi-chevron-compact-down"></i></a>
                        <div class="dropdowncontent">
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">محصولات
                                حراجی</a>
                        </div>
                    </li>
                    <li class="me-3 menulist dropdown">
                        <a class="menu-link text-muted munli
                                                ">حساب
                            کاربری من<i class="bi bi-chevron-compact-down"></i></a>
                        <div class="dropdowncontent">
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">پرداخت
                            </a>
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">سبد
                                خرید </a>
                            <a href="#"
                               class="text-decoration-none
                                                    text-muted drop-item">علاقه
                                مندی</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-2 my-2 d-none d-lg-flex">
                <a href="#" class="btn btn-danger rounded-0
                                        px-3
                                        py-2 text-center">%تخفیف های روز</a>
            </div>
        </div>
    </header>

</section>
<!--=================================================================== new section ===content page ===========================-->
<div class="container-fluid">
    <section class="content">
        <!--========== search product in content ======-->
        <div class="row pt-4">
            <div class="input-group inputgroup1 mb-3">
                <button type="button" class="btn btn-light
                                        border"><i class="bi bi-search
                                            text-dark"></i></button>
                <button type="button" class="btn
                                        dropdown-toggle
                                        dropdown-toggle-split border d-none
                                        d-lg-block"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                                        <span class="text-muted ms-3"> انتخاب
                                            دسته
                                            بندی
                                        </span>
                    <span class="visually-hidden">Toggle
                                            Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">انتخاب
                            دسته بندی</a></li>
                    <li><a class="dropdown-item" href="#">اکسسوری</a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">
                    <li>خدمات
                        <ul>
                            <li>خدمات رزرو </li>
                            <li>خدمات ارسال</li>
                        </ul>
                    </li>
                    </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                    <li><a class="dropdown-item" href="#">کلاه
                        </a></li>
                </ul>
                <input type="text" class="form-control"
                       placeholder="جستجوی محصولات"
                       aria-label="Text input with segmented
                                        dropdown
                                        button">
            </div>
        </div>
        <!--==== Advertising(تبلیغات) ==-->
        <div class="row forcenteradvertis text-center">
            <div class="col-12 col-lg-3 advertis">
                <a href="#"><img src="./img/tb-1.jpg" alt=""
                                 class="pb-lg-3 pb-2"></a>
                <a href="#"><img src="./img/tb-2.jpg" alt=""
                                 class="pb-lg-0 pb-2"></a>
            </div>
            <div class="col-12 col-lg-3 advertis">
                <a href="#"><img src="./img/tb-3.jpg" alt=""
                                 class="pb-lg-3 pb-2"></a>
                <a href="#"><img src="./img/tb-4.jpg" alt=""
                                 class="pb-lg-0 pb-2"></a>
            </div>
            <div class="col-12 col-lg-3 advertis">
                <a href="#"><img src="./img/tb-5.jpg" alt=""
                                 class="pb-lg-3 pb-2"></a>
                <a href="#"><img src="./img/tb-6.jpg" alt=""
                                 class="pb-lg-0 pb-2"></a>
            </div>
            <div class="col-12 col-lg-3 advertis">
                <a href="#"><img src="./img/tb-7.jpg" alt=""
                                 class="pb-lg-3 pb-2"></a>
                <a href="#"><img src="./img/tb-8.jpg" alt=""
                                 class="pb-lg-0 pb-2"></a>
            </div>

        </div>
        <!-- =====پرفروش ترینها==== -->
        <div class="row pt-4">
            <div class="col-3 col-md-4 col-lg-5 pt-3
                                    pliner-continer "></div>
            <div class=" col-6 col-md-4 col-lg-2 pt-3
                                    liner-continer text-center"><p
                    class="fw-bolder h5 ">پرفروش ترین
                    محصولات</p></div>
            <div class="col-3 col-md-4 col-lg-5 pt-3
                                    pliner-continer"></div>
        </div>

    </section>

    <!--============ =================================owl carousel-1================================= =======-->
    <div class="slider1 p-5">
        <div class="owl-carousel owl-theme">
            <!-- ====card one in carousel==== -->
            <div class="item itemforhover">
                <div class="card position-relative"
                     style="width:14rem ;">
                    <a href="#" class="text-decoration-none
                                            text-dark ddd">
                        <!--== img for card == -->
                        <img class="card-img-top "
                             id="img-card"
                             src="/img/kard1.jpeg"
                             alt="Card image cap">
                    </a>
                    <div class="like position-absolute
                                            flex-column
                                            justify-content-center bg-white"
                         style="width:30px ;height:
                                            100px;">
                        <!--=== show icon when hover card ===-->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-cart3 icononimg
                                                    " id="addbas1"></i>
                            <i class="bi bi-check2 selbas1"></i>
                        </a>
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2"><i
                                class="bi bi-search
                                                    icononimg"></i></a>
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-heart
                                                    iconlike1"></i>
                            <i class="bi bi-check2
                                                    iconselect1"></i>
                        </a>
                    </div>
                    <!--===labale in imag ===-->
                    <span class="badge text-bg-danger vijhe
                                            p-2
                                            rounded-0">ویژه</span>
                    <span class="badge text-bg-secondary
                                            mojoudi
                                            p-2 rounded-0">اتمام موجودی</span>
                    <div class="card-body p-2">
                        <!--== price == -->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark">
                                                <span class="badge
                                                    text-bg-danger ">30%
                                                    تخفیف</span>
                            <p class="card-text">
                                پیراهن جلو بندی استین گره
                                <span class="span1">180091</span>
                            </p>
                        </a>
                        <div class="d-flex
                                                justify-content-between
                                                card-text">
                            <del class="text-muted span1">528,000
                                تومان</del>
                            <small class="text-danger
                                                    span1">398,000
                                تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--===== cart two in carousel ====-->
            <div class="item itemforhover">
                <div class="card position-relative"
                     style="width:14rem ;">
                    <a href="#" class="text-decoration-none
                                            text-dark">
                        <!--== img for card == -->
                        <img class="card-img-top"
                             id="img-card"
                             src="/img/kard5.jpeg"
                             alt="Card image cap">
                    </a>
                    <div class="like position-absolute
                                            flex-column
                                            justify-content-center bg-white"
                         style="width:30px ;height:
                                            100px;">
                        <!--=== show icon when hover card ===-->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-cart3 icononimg
                                                    " id="addbas2"></i>
                            <i class="bi bi-check2 selbas2"></i>
                        </a>
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2"><i
                                class="bi bi-search
                                                    icononimg"></i></a>
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-heart
                                                    iconlike2"></i>
                            <i class="bi bi-check2
                                                    iconselect2"></i>
                        </a>
                    </div>
                    <!--===labale in imag ===-->
                    <span class="badge text-bg-danger vijhe
                                            p-2
                                            rounded-0">ویژه</span>
                    <span class="badge text-bg-secondary
                                            mojoudi
                                            p-2 rounded-0">اتمام موجودی</span>
                    <div class="card-body p-2">
                        <!--== price == -->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark">
                                                <span class="badge
                                                    text-bg-danger ">30%
                                                    تخفیف</span>
                            <p class="card-text">
                                پیراهن جلو بندی استین گره
                                <span class="span1">180091</span>
                            </p>
                        </a>
                        <div class="d-flex
                                                justify-content-between
                                                card-text">
                            <del class="text-muted span1">528,000
                                تومان</del>
                            <small class="text-danger
                                                    span1">398,000
                                تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--==== card three in carusel==== -->
            <div class="item itemforhover">
                <div class="card position-relative"
                     style="width:14rem ;">
                    <a href="#" class="text-decoration-none
                                            text-dark">
                        <!--== img for card == -->
                        <img class="card-img-top"
                             id="img-card"
                             src="/img/kard2.jpeg"
                             alt="Card image cap">
                    </a>
                    <div class="like position-absolute
                                            flex-column
                                            justify-content-center bg-white"
                         style="width:30px ;height:
                                            100px;">
                        <!--=== show icon when hover card ===-->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-cart3 icononimg
                                                    " id="addbas3"></i>
                            <i class="bi bi-check2 selbas3"></i>
                        </a>
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2"><i
                                class="bi bi-search
                                                    icononimg"></i></a>
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-heart
                                                    iconlike3"></i>
                            <i class="bi bi-check2
                                                    iconselect3"></i>
                        </a>
                    </div>
                    <!--===labale in imag ===-->
                    <span class="badge text-bg-danger vijhe
                                            p-2
                                            rounded-0">ویژه</span>
                    <span class="badge text-bg-secondary
                                            mojoudi
                                            p-2 rounded-0">اتمام موجودی</span>
                    <div class="card-body p-2">
                        <!--== price == -->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark">
                                                <span class="badge
                                                    text-bg-danger ">30%
                                                    تخفیف</span>
                            <p class="card-text">
                                پیراهن جلو بندی استین گره
                                <span class="span1">180091</span>
                            </p>
                        </a>
                        <div class="d-flex
                                                justify-content-between
                                                card-text">
                            <del class="text-muted span1">528,000
                                تومان</del>
                            <small class="text-danger
                                                    span1">398,000
                                تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--==== card 4 in carusel==== -->
            <div class="item itemforhover">
                <div class="card position-relative"
                     style="width:14rem ;">
                    <a href="#" class="text-decoration-none
                                            text-dark">
                        <!--== img for card == -->
                        <img class="card-img-top"
                             id="img-card"
                             src="/img/kard3.jpeg"
                             alt="Card image cap">
                    </a>
                    <div class="like position-absolute
                                            flex-column
                                            justify-content-center bg-white"
                         style="width:30px ;height:
                                            100px;">
                        <!--=== show icon when hover card ===-->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-cart3 icononimg
                                                    " id="addbas4"></i>
                            <i class="bi bi-check2 selbas4"></i>
                        </a>
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2"><i
                                class="bi bi-search
                                                    icononimg"></i></a>
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-heart
                                                    iconlike4"></i>
                            <i class="bi bi-check2
                                                    iconselect4"></i>
                        </a>
                    </div>
                    <!--===labale in imag ===-->
                    <span class="badge text-bg-danger vijhe
                                            p-2
                                            rounded-0">ویژه</span>
                    <span class="badge text-bg-secondary
                                            mojoudi
                                            p-2 rounded-0">اتمام موجودی</span>
                    <div class="card-body p-2">
                        <!--== price == -->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark">
                                                <span class="badge
                                                    text-bg-danger ">30%
                                                    تخفیف</span>
                            <p class="card-text">
                                پیراهن جلو بندی استین گره
                                <span class="span1">180091</span>
                            </p>
                        </a>
                        <div class="d-flex
                                                justify-content-between
                                                card-text">
                            <del class="text-muted span1">528,000
                                تومان</del>
                            <small class="text-danger
                                                    span1">398,000
                                تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--==== card 5 in carusel==== -->
            <div class="item itemforhover">
                <div class="card position-relative"
                     style="width:14rem ;">
                    <a href="#" class="text-decoration-none
                                            text-dark">
                        <!--== img for card == -->
                        <img class="card-img-top"
                             id="img-card"
                             src="/img/kard4.jpeg"
                             alt="Card image cap">
                    </a>
                    <div class="like position-absolute
                                            flex-column
                                            justify-content-center bg-white"
                         style="width:30px ;height:
                                            100px;">
                        <!--=== show icon when hover card ===-->
                        <a href="#"
                           class="text-decoration-none
                                                text-dark py-2">
                            <i class="bi bi-cart3 icononimg"
                               id="addbas5"></i>
                            <i class="bi bi-check2 selbas5"></i>
                        </a>
                        </a>
                        <a href="#" class="text-decoration-none
                                            text-dark py-2"><i
                                class="bi bi-search icononimg"></i></a>
                        <a href="#" class="text-decoration-none
                                            text-dark py-2">
                            <i class="bi bi-heart iconlike5"></i>
                            <i class="bi bi-check2 iconselect5"></i>
                        </a>
                    </div>
                    <!--===labale in imag ===-->
                    <span class="badge text-bg-danger vijhe p-2
                                        rounded-0">ویژه</span>
                    <span class="badge text-bg-secondary mojoudi
                                        p-2 rounded-0">اتمام موجودی</span>
                    <div class="card-body p-2">
                        <!--== price == -->
                        <a href="#" class="text-decoration-none
                                            text-dark">
                                            <span class="badge text-bg-danger ">30%
                                                تخفیف</span>
                            <p class="card-text">
                                پیراهن جلو بندی استین گره
                                <span class="span1">180091</span>
                            </p>
                        </a>
                        <div class="d-flex
                                            justify-content-between card-text">
                            <del class="text-muted span1">528,000
                                تومان</del>
                            <small class="text-danger span1">398,000
                                تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--==== card 6 in carusel==== -->
            <div class="item itemforhover">
                <div class="card position-relative"
                     style="width:14rem ;">
                    <a href="#" class="text-decoration-none
                                        text-dark">
                        <!--== img for card == -->
                        <img class="card-img-top" id="img-card"
                             src="./img/kard3.jpeg"
                             alt="Card image cap">
                    </a>
                    <div class="like position-absolute
                                        flex-column
                                        justify-content-center bg-white"
                         style="width:30px ;height:
                                        100px;">
                        <!--=== show icon when hover card ===-->
                        <a href="#" class="text-decoration-none
                                            text-dark py-2">
                            <i class="bi bi-cart3 icononimg "
                               id="addbas6"></i>
                            <i class="bi bi-check2 selbas6"></i>
                        </a>
                        <a href="#" class="text-decoration-none
                                            text-dark py-2"><i
                                class="bi bi-search icononimg"></i></a>
                        <a href="#" class="text-decoration-none
                                            text-dark py-2">
                            <i class="bi bi-heart iconlike6"></i>
                            <i class="bi bi-check2 iconselect6"></i>
                        </a>
                    </div>
                    <!--===labale in imag ===-->
                    <span class="badge text-bg-danger vijhe p-2
                                        rounded-0">ویژه</span>
                    <span class="badge text-bg-secondary mojoudi
                                        p-2 rounded-0">اتمام موجودی</span>
                    <div class="card-body p-2">
                        <!--== price == -->
                        <a href="#" class="text-decoration-none
                                            text-dark">
                                            <span class="badge text-bg-danger ">30%
                                                تخفیف</span>
                            <p class="card-text">
                                پیراهن جلو بندی استین گره
                                <span class="span1">180091</span>
                            </p>
                        </a>
                        <div class="d-flex
                                            justify-content-between card-text">
                            <del class="text-muted span1">528,000
                                تومان</del>
                            <small class="text-danger span1">398,000
                                تومان</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--==== card 7 in carusel==== -->
            <div class="item itemforhover">
                <div class="card position-relative"
                     style="width:14rem ;">
                    <a href="#" class="text-decoration-none
                                        text-dark">
                        <!--== img for card == -->
                        <img class="card-img-top" id="img-card"
                             src="./img/kard5.jpeg"
                             alt="Card image cap">
                    </a>
                    <div class="like position-absolute
                                        flex-column
                                        justify-content-center bg-white"
                         style="width:30px ;height:
                                        100px;">
                        <!--=== show icon when hover card ===-->
                        <a href="#" class="text-decoration-none
                                            text-dark py-2">
                            <i class="bi bi-cart3 icononimg "
                               id="addbas7"></i>
                            <i class="bi bi-check2 selbas7"></i>
                        </a></a>
                        <a href="#" class="text-decoration-none
                                        text-dark py-2"><i
                                class="bi bi-search icononimg"></i></a>
                        <a href="#" class="text-decoration-none
                                        text-dark py-2">
                            <i class="bi bi-heart iconlike7"></i>
                            <i class="bi bi-check2 iconselect7"></i>
                        </a>
                    </div>
                    <!--===labale in imag ===-->
                    <span class="badge text-bg-danger vijhe p-2
                                    rounded-0">ویژه</span>
                    <span class="badge text-bg-secondary mojoudi
                                    p-2 rounded-0">اتمام موجودی</span>
                    <div class="card-body p-2">
                        <!--== price == -->
                        <a href="#" class="text-decoration-none
                                        text-dark">
                                        <span class="badge text-bg-danger ">30%
                                            تخفیف</span>
                            <p class="card-text">
                                پیراهن جلو بندی استین گره
                                <span class="span1">180091</span>
                            </p>
                        </a>
                        <div class="d-flex
                                        justify-content-between card-text">
                            <del class="text-muted span1">528,000
                                تومان</del>
                            <small class="text-danger span1">398,000
                                تومان</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- =================================================مجله دریم============================ -->
    <div class="row pt-4">
        <div class="col-3 col-md-4 col-lg-5 pt-3
                        pliner-continer "></div>
        <div class=" col-6 col-md-4 col-lg-2 pt-3
                        liner-continer text-center"><p
                class="fw-bolder h5 ">مجله دیریم</p></div>
        <div class="col-3 col-md-4 col-lg-5 pt-3
                        pliner-continer"></div>
    </div>
    <!--=============================================== magazine in dream   swiper slide ===-->
    <div class="swiper mySwiper pt-5 pb-4">
        <div class="swiper-wrapper">
            <!-- ===slide1==== -->
            <div class="swiper-slide">
                <div class="card">
                    <!-- ==img for magazin ==-->
                    <a href="#" class="position-relative">
                        <img class="card-img-top"
                             src="./img/swiper1.jpg"
                             alt="Card image cap">
                        <!-- ==date in img === -->
                        <div class="date d-flex
                                        justify-content-center
                                        align-content-center bg-white ">
                            <p class="text-muted span1 px-1
                                            pt-2">22مهر</p>
                        </div>
                        <span class="badge text-bg-danger p-2
                                        rounded-0 position-absolute top-100
                                        start-50 translate-middle"> سبک
                                        پوشیدن</span>
                    </a>
                    <div class="card-body text-center">

                        <p class="card-text h5">
                            چه رنگ لباسی برای پوست شما مناسب
                            است؟
                        </p>
                        <!--=== admin SEO=== -->
                        <p class="card-text text-muted">
                            <i class="bi bi-person-circle"></i>
                            کارشناس محتوا
                        </p>
                        <p class="card-text">
                        <p class="text-muted">سفید گندمی و
                            سبزه سه رنگ پوست هستند <br> که
                            بهتر است با توجه به آن رنگ
                            لباسهایتان را<br> انتخاب کنید
                            برخی از رنگها به خاطر تناسب <br>شان...</p>
                        </p>
                        <!--=== link for continue to read a content ===-->
                        <a href="#" class="text-decoration-none
                                        d-flex justify-content-center
                                        text-danger fw-bolder content-in-card"><p
                                class="">ادامه
                                مطلب</p><span class="span2
                                            fw-bolder ps-2 ">...</span></a>
                    </div>
                </div>
            </div>
            <!-- ===slide2==== -->
            <div class="swiper-slide">
                <div class="card">
                    <!-- ==img for magazin ==-->
                    <a href="#" class="position-relative">
                        <img class="card-img-top"
                             src="./img/swiper2.jpeg"
                             alt="Card image cap">
                        <!-- ==date in img === -->
                        <div class="date d-flex
                                        justify-content-center
                                        align-content-center bg-white ">
                            <p class="text-muted span1 px-1
                                            pt-2">21مهر</p>
                        </div>
                        <span class="badge text-bg-danger p-2
                                        rounded-0 position-absolute top-100
                                        start-50 translate-middle"> سبک
                                        پوشیدن</span>
                    </a>
                    <div class="card-body text-center">

                        <p class="card-text h5">
                            چه رنگ لباسی برای پوست شما مناسب
                            است؟
                        </p>
                        <!--=== admin SEO=== -->
                        <p class="card-text text-muted">
                            <i class="bi bi-person-circle"></i>
                            کارشناس محتوا
                        </p>
                        <p class="card-text">
                        <p class="text-muted">سفید گندمی و
                            سبزه سه رنگ پوست هستند <br> که
                            بهتر است با توجه به آن رنگ
                            لباسهایتان را<br> انتخاب کنید
                            برخی از رنگها به خاطر تناسب <br>شان...</p>
                        </p>
                        <!--=== link for continue to read a content ===-->
                        <a href="#" class="text-decoration-none
                                        d-flex justify-content-center
                                        text-danger fw-bolder content-in-card"><p
                                class="">ادامه
                                مطلب</p><span class="span2
                                            fw-bolder ps-2 ">...</span></a>
                    </div>
                </div>
            </div>
            <!-- ===slide3==== -->
            <div class="swiper-slide">
                <div class="card">
                    <!-- ==img for magazin ==-->
                    <a href="#" class="position-relative">
                        <img class="card-img-top"
                             src="./img/swiper3.jpg"
                             alt="Card image cap">
                        <!-- ==date in img === -->
                        <div class="date d-flex
                                        justify-content-center
                                        align-content-center bg-white ">
                            <p class="text-muted span1 px-1
                                            pt-2">20مهر</p>
                        </div>
                        <span class="badge text-bg-danger p-2
                                        rounded-0 position-absolute top-100
                                        start-50 translate-middle"> سبک
                                        پوشیدن</span>
                    </a>
                    <div class="card-body text-center">

                        <p class="card-text h5">
                            چه رنگ لباسی برای پوست شما مناسب
                            است؟
                        </p>
                        <!--=== admin SEO=== -->
                        <p class="card-text text-muted">
                            <i class="bi bi-person-circle"></i>
                            کارشناس محتوا
                        </p>
                        <p class="card-text">
                        <p class="text-muted">سفید گندمی و
                            سبزه سه رنگ پوست هستند <br> که
                            بهتر است با توجه به آن رنگ
                            لباسهایتان را<br> انتخاب کنید
                            برخی از رنگها به خاطر تناسب <br>شان...</p>
                        </p>
                        <!--=== link for continue to read a content ===-->
                        <a href="#" class="text-decoration-none
                                        d-flex justify-content-center
                                        text-danger fw-bolder content-in-card"><p
                                class="">ادامه
                                مطلب</p><span class="span2
                                            fw-bolder ps-2 ">...</span></a>
                    </div>
                </div>
            </div>
            <!-- ===slide4==== -->
            <div class="swiper-slide">
                <div class="card">
                    <!-- ==img for magazin ==-->
                    <a href="#" class="position-relative">
                        <img class="card-img-top"
                             src="./img/swiper4.jpg"
                             alt="Card image cap">
                        <!-- ==date in img === -->
                        <div class="date d-flex
                                        justify-content-center
                                        align-content-center bg-white ">
                            <p class="text-muted span1 px-1
                                            pt-2">19مهر</p>
                        </div>
                        <span class="badge text-bg-danger p-2
                                        rounded-0 position-absolute top-100
                                        start-50 translate-middle"> سبک
                                        پوشیدن</span>
                    </a>
                    <div class="card-body text-center">

                        <p class="card-text h5">
                            چه رنگ لباسی برای پوست شما مناسب
                            است؟
                        </p>
                        <!--=== admin SEO=== -->
                        <p class="card-text text-muted">
                            <i class="bi bi-person-circle"></i>
                            کارشناس محتوا
                        </p>
                        <p class="card-text">
                        <p class="text-muted">سفید گندمی و
                            سبزه سه رنگ پوست هستند <br> که
                            بهتر است با توجه به آن رنگ
                            لباسهایتان را<br> انتخاب کنید
                            برخی از رنگها به خاطر تناسب <br>شان...</p>
                        </p>
                        <!--=== link for continue to read a content ===-->
                        <a href="#" class="text-decoration-none
                                        text-danger fw-bolder d-flex
                                        justify-content-center
                                        content-in-card"><p class="">ادامه
                                مطلب</p><span class="span2
                                            fw-bolder ps-2 ">...</span></a>
                    </div>
                </div>
            </div>
            <!-- ===slide5==== -->
            <div class="swiper-slide">
                <div class="card">
                    <!-- ==img for magazin ==-->
                    <a href="#" class="position-relative">
                        <img class="card-img-top"
                             src="./img/swiper1.jpg"
                             alt="Card image cap">
                        <!-- ==date in img === -->
                        <div class="date d-flex
                                        justify-content-center
                                        align-content-center bg-white ">
                            <p class="text-muted span1 px-1
                                            pt-2">18مهر</p>
                        </div>
                        <span class="badge text-bg-danger p-2
                                        rounded-0 position-absolute top-100
                                        start-50 translate-middle"> سبک
                                        پوشیدن</span>
                    </a>
                    <div class="card-body text-center">

                        <p class="card-text h5">
                            چه رنگ لباسی برای پوست شما مناسب
                            است؟
                        </p>
                        <!--=== admin SEO=== -->
                        <p class="card-text text-muted">
                            <i class="bi bi-person-circle"></i>
                            کارشناس محتوا
                        </p>
                        <p class="card-text">
                        <p class="text-muted">سفید گندمی و
                            سبزه سه رنگ پوست هستند <br> که
                            بهتر است با توجه به آن رنگ
                            لباسهایتان را<br> انتخاب کنید
                            برخی از رنگها به خاطر تناسب <br>شان...</p>
                        </p>
                        <!--=== link for continue to read a content ===-->
                        <a href="#" class="text-decoration-none
                                        text-danger fw-bolder d-flex
                                        justify-content-center
                                        content-in-card"><p class="">ادامه
                                مطلب</p><span class="span2
                                            fw-bolder ps-2 ">...</span></a>
                    </div>
                </div>
            </div>
            <!-- ===slide6==== -->
            <div class="swiper-slide">
                <div class="card">
                    <!-- ==img for magazin ==-->
                    <a href="#" class="position-relative">
                        <img class="card-img-top"
                             src="./img/swiper2.jpeg"
                             alt="Card image cap">
                        <!-- ==date in img === -->
                        <div class="date d-flex
                                        justify-content-center
                                        align-content-center bg-white ">
                            <p class="text-muted span1 px-1
                                            pt-2">17مهر</p>
                        </div>
                        <span class="badge text-bg-danger p-2
                                        rounded-0 position-absolute top-100
                                        start-50 translate-middle"> سبک
                                        پوشیدن</span>
                    </a>
                    <div class="card-body text-center">

                        <p class="card-text h5">
                            چه رنگ لباسی برای پوست شما مناسب
                            است؟
                        </p>
                        <!--=== admin SEO=== -->
                        <p class="card-text text-muted">
                            <i class="bi bi-person-circle"></i>
                            کارشناس محتوا
                        </p>
                        <p class="card-text">
                        <p class="text-muted">سفید گندمی و
                            سبزه سه رنگ پوست هستند <br> که
                            بهتر است با توجه به آن رنگ
                            لباسهایتان را<br> انتخاب کنید
                            برخی از رنگها به خاطر تناسب <br>شان...</p>
                        </p>
                        <!--=== link for continue to read a content ===-->
                        <a href="#" class="text-decoration-none
                                        d-flex justify-content-center
                                        text-danger fw-bolder
                                        content-in-card"><p class="">ادامه
                                مطلب</p><span class="span2
                                            fw-bolder ps-2 ">...</span></a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <section class="footer pt-5">
        <footer>
            <div class="row m-5 text-center">
                <div class="col-12 col-md-6 col-lg-2 pb-2">
                    <img src="/img/fincol1.svg" alt="img">
                    <p class="text-muted">ارسال به تمام کشور</p>
                </div>
                <div class="col-12 col-md-6 col-lg-2 pb-2">
                    <img src="/img/fincol2.svg" alt="img">
                    <p class="text-muted">بهترین کیفیت </p>
                </div>
                <div class="col-12 col-md-6 col-lg-2 pb-2">
                    <img src="/img/fincol3.png" alt="img">
                </div>
                <div class="col-12 col-md-6 col-lg-2 pb-2">
                    <img src="./img/fincol.png" alt="img">
                </div>
                <div class="col-12 col-md-6 col-lg-2 pb-2">
                    <img src="/img/fincol4.svg" alt="img">
                    <p class="text-muted">پشتیبانی آنلاین</p>
                </div>
                <div class="col-12 col-md-6 col-lg-2 pb-2">
                    <img src="/img/fincol5.svg" alt="img">
                    <p class="text-muted">پرداخت انلاین و ایمن</p>
                </div>

            </div>
            <div class="text-center">
                <p class="text-muted">هرگونه سوالی در خصوص انتخاب
                    محصول و ثبت سفارش و تحویل کالا</p></div>
            <p class=" h5 fw-bolder text-center">
                تیم پشتیبانی سایت همه روزه به جز جمعه ها از ساعت 8
                تا 17 پاسخگوی درخواستهای شما از طریق سامانه پشتیبانی
                هستند.</p>
            <p class="text-muted text-center py-3">نشانی شعبه مرکزی:
                سعادت آباد - سرو غربی - بین چهارراه سرو و کتاب -
                پلاک ۸۰ - طبقه‌ ششم<br>
                ساعات کار شعبه مرکزی: شنبه تا پنج شنبه از ساعت 11
                الی 20:30 جمعه از ساعت 13 الی 20:30</p>
            <p class="text-muted text-center">نشانی شعبه کرج: کرج
                خیابان مطهری ۲۰ متر بعد از تقاطع ملاصدرا نرسیده به
                فلکه اول پلاک 81 کدپستی: <br> 3146987356
                ساعات کار شعبه کرج: شنبه تا پنج شنبه از ساعت 10 الی
                22:00 جمعه از ساعت 12 الی 22:00</p>
            <div class="text-center py-4">
                <a href="#" class="btn btn-secondary w-25 ">تلفن
                    گویای پشتیبانی</a>
            </div>
</div>
<!-- open navbar in button page for mobile &tablet size -->
<div class="navformobile d-flex border p-3 position-fixed
                        bottom-0 bg-white w-100 d-lg-none ">
    <div class="col-3 iconfornav ">
        <i class="bi bi-shop-window"></i>
        <p>فروشگاه</p>
    </div>
    <div class="col-3 iconfornav">
        <i class="bi bi-house-door"></i>
        <p>خانه</p>
    </div>
    <div class="col-3 iconfornav">
        <div class="position-relative">
            <svg xmlns="http://www.w3.org/2000/svg"
                 width="25" height="25" fill="currentColor"
                 class="bi bi-heart text-muted" viewBox="0 0
                                16 16">
                <path d="m8 2.748-.717-.737C5.6.281
                                2.514.878 1.4 3.053c-.523 1.023-.641
                                2.5.314 4.385.92 1.815 2.834 3.989 6.286
                                        6.357 3.452-2.368 5.365-4.542
                                        6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                        10.4.28 8.717 2.01L8 2.748zM8 15C-7.333
                                        4.868 3.279-3.04 7.824
                                        1.143c.06.055.119.112.176.171a3.12 3.12
                                        0 0 1 .176-.17C12.72-3.042 23.333 4.867
                                        8 15z"></path>
            </svg></i>
            <span class="span1 position-absolute
                                text-white counter1">0</span>
        </div>
        <p>علاقه مندی</p>
    </div>
    <div class="col-3 iconfornav">
        <i class="bi bi-person"></i>
        <p>حساب کاربری من</p>
    </div>

</div>

</footer>
</section>

<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js
            "></script>
<script
    src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="scriptmain.js"></script>

</body>
</html>
