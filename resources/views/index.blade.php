@component('layouts.content')

    @slot('title')
        dresland.org
    @endslot

    @slot('script')
        <script>

        </script>
    @endslot
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
            @include('layouts.endSidebar')
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

@endcomponent
