{{--@component('layouts.content')--}}

{{--    @slot('title')--}}
{{--        dresland.org--}}
{{--    @endslot--}}

{{--    @slot('script')--}}
{{--        <script>--}}
{{--            function addToInterest(event,id){--}}
{{--                event.preventDefault();--}}

{{--                $.ajax({--}}
{{--                    type : 'post',--}}
{{--                    url :'{{route('interest.add')}}',--}}
{{--                    data:{--}}
{{--                        product:id--}}
{{--                    },--}}
{{--                    headers:{--}}
{{--                        'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content--}}
{{--                    },--}}
{{--                    success : function(result) {--}}

{{--                        if (result['success']==true){--}}
{{--                            document.getElementById('count_interest_index').innerHTML+1;--}}
{{--                            document.getElementById('count_interest_index1').innerHTML++;--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}



{{--            function search1(event){--}}

{{--                $.ajax({--}}
{{--                    type : 'get',--}}
{{--                    url :'{{route('search')}}',--}}
{{--                    data:{--}}
{{--                        search: document.getElementById('search1').value--}}
{{--                    },--}}

{{--                    success : function(result) {--}}
{{--                        $('#aaa').children().remove();--}}
{{--                        $('#aaa').append(result);--}}
{{--                    }--}}
{{--                });--}}

{{--            }--}}

{{--            //جدید برای همه با اضافه کردن کلاس هدر به سکشن هدر--}}
{{--            var lastScrollTop = 0;--}}
{{--            $(window).scroll(function(event){--}}
{{--                var st = $(this).scrollTop();--}}
{{--                if (st > lastScrollTop){--}}
{{--                    // downscroll code--}}
{{--                    $(".header").css({position:'absolute',background:'#fff'})--}}
{{--                    $(".header").css('z-index',3000)--}}
{{--                } else {--}}
{{--                    // upscroll code--}}
{{--                    $(".header").css({position:'fixed',background:'#fff',top:'0'})--}}
{{--                    $(".header").css('z-index',3000)--}}

{{--                }--}}
{{--                lastScrollTop = st;--}}
{{--            });--}}


{{--        </script>--}}
{{--    @endslot--}}

{{--    <div class="container-fluid row" id="aaa">--}}
{{--        <section class="content">--}}
{{--            <!--========== search product in content ======-->--}}
{{--            <div class="row pt-4">--}}
{{--                <div class="input-group inputgroup1 mb-3">--}}
{{--                    <button onclick="search1(event)" type="button" class="btn btn-light--}}
{{--                                            border"><i class="bi bi-search--}}
{{--                                                text-dark"></i></button>--}}
{{--                    <input id="search1" type="text" class="form-control"--}}
{{--                           placeholder="جستجوی محصولات"--}}
{{--                           aria-label="Text input with segmented--}}
{{--                                            dropdown--}}
{{--                                            button">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!--==== categories with image ==-->--}}
{{--            <div class="row forcenteradvertis text-center">--}}
{{--                @foreach(\App\Models\Category::all()->take(8) as $item)--}}
{{--                    @if(!empty($item->image))--}}
{{--                        <div class="col-12 col-lg-3 advertis">--}}
{{--                            <a href="{{route('product_category',$item->id)}}"><img src="{{url($item->image)}}" alt="" class="pb-lg-3 pb-2" width="348px" height="174px"></a>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <!-- =====پرفروش ترینها==== -->--}}
{{--            <div class="row pt-4">--}}
{{--                <div class="col-3 col-md-4 col-lg-5 pt-3--}}
{{--                                        pliner-continer "></div>--}}
{{--                <div class=" col-6 col-md-4 col-lg-2 pt-3--}}
{{--                                        liner-continer text-center"><p--}}
{{--                        class="fw-bolder h5 ">پرفروش ترین--}}
{{--                        محصولات</p></div>--}}
{{--                <div class="col-3 col-md-4 col-lg-5 pt-3--}}
{{--                                        pliner-continer"></div>--}}
{{--            </div>--}}

{{--        </section>--}}

{{--        <!--============ =================================owl carousel-1================================= =======-->--}}
{{--        <div class="slider1 p-5">--}}
{{--            <div class="owl-carousel owl-theme">--}}
{{--                <!-- ====card one in carousel==== -->--}}
{{--                @php--}}
{{--                    $products=\App\Models\Product::all();--}}
{{--$arr=[];--}}
{{--foreach ($products as $product){--}}
{{--    $arr[$product->id]=['count_order'=>$product->orders->count(),'product'=>$product];--}}

{{--}--}}
{{--$productsort=collect($arr)->sortByDesc('count_order')->take(12);--}}
{{--                @endphp--}}
{{--                @foreach($productsort as $item)--}}
{{--                    <div class="item itemforhover">--}}
{{--                        <div class="card position-relative" style="width:14rem ;">--}}
{{--                            <!--== img for card == -->--}}
{{--                            <img class="card-img-top " id="img-card" src="{{!$item['product']->images()->count()==0?url($item['product']->images->image):''}}" alt="Card image cap">--}}

{{--                            <div class="like position-absolute flex-column justify-content-center bg-white" style="width:30px ;height:--}}
{{--                                                100px;">--}}

{{--                                <!--=== show icon when hover card ===-->--}}
{{--                                <a href="{{route('single_product',$item['product']->id)}}"--}}
{{--                                   class="text-decoration-none text-dark py-2">--}}
{{--                                    <i class="bi bi-cart3 icononimg" id="addbas1"></i>--}}
{{--                                    <i class="bi bi-check2 selbas1"></i>--}}
{{--                                </a>--}}

{{--                                <a href="#" onclick="addToInterest(event,'{{$item['product']->id}}')"--}}
{{--                                   class="text-decoration-none text-dark py-2">--}}
{{--                                    <i class="bi bi-heart"></i>--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <!--===labale in imag ===-->--}}
{{--                            <span class="badge text-bg-danger vijhe p-2 rounded-0">ویژه</span>--}}
{{--                            <span class="badge text-bg-secondary mojoudi p-2 rounded-0"></span>--}}
{{--                            <div class="card-body p-2">--}}
{{--                                @php--}}
{{--                                    $discount=$item['product']->discounts->sum(function ($dis){--}}
{{--                                        return $dis->percent;--}}
{{--                                    });--}}
{{--                                @endphp--}}
{{--                                    <!--== price == -->--}}
{{--                                <a href="#" class="text-decoration-none text-dark">--}}
{{--                                    @if(!$discount==0)--}}
{{--                                        <span class="badge text-bg-danger ">{{$discount}} تخفیف</span>--}}
{{--                                    @endif--}}
{{--                                    <p class="card-text">--}}
{{--                                        {{$item['product']->title}}--}}
{{--                                    </p>--}}
{{--                                </a>--}}
{{--                                <div class="d-flex justify-content-between card-text">--}}
{{--                                    <del class="text-muted span1">{{$discount==0?'':$item['product']->price . ' تومان'}}</del>--}}

{{--                                    <small class="text-danger span1">{{$discount==0?$item['product']->price:$item['product']->price/100*$discount-$item['product']->price}}تومان</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                @endforeach--}}

{{--            </div>--}}

{{--        </div>--}}
{{--        <!-- =================================================مجله دریم============================ -->--}}
{{--        <div class="row pt-4">--}}
{{--            <div class="col-3 col-md-4 col-lg-5 pt-3--}}
{{--                            pliner-continer "></div>--}}
{{--            <div class=" col-6 col-md-4 col-lg-2 pt-3--}}
{{--                            liner-continer text-center"><p--}}
{{--                    class="fw-bolder h5 " id="Magazine">مجله دیریم</p></div>--}}
{{--            <div class="col-3 col-md-4 col-lg-5 pt-3--}}
{{--                            pliner-continer"></div>--}}
{{--        </div>--}}
{{--        <!--=============================================== magazine in dream   swiper slide ===-->--}}
{{--        <div class="swiper mySwiper pt-5 pb-4">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                <!-- ===slide1==== -->--}}
{{--                @foreach(\App\Models\Post::all() as $post)--}}
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="card">--}}
{{--                            <!-- ==img for magazin ==-->--}}
{{--                            <a href="{{route('post.single_post',$post->id)}}" class="position-relative">--}}
{{--                                <img class="card-img-top"--}}
{{--                                     src="{{$post->discriptions[0]['image']}}"--}}
{{--                                     alt="Card image cap">--}}
{{--                                <!-- ==date in img === -->--}}
{{--                                <div class="date d-flex--}}
{{--                                            justify-content-center--}}
{{--                                            align-content-center bg-white ">--}}
{{--                                    <p class="text-muted span1 px-1--}}
{{--                                                pt-2">{{jdate($post->created_at)}}</p>--}}
{{--                                </div>--}}
{{--                                <span class="badge text-bg-danger p-2--}}
{{--                                            rounded-0 position-absolute top-100--}}
{{--                                            start-50 translate-middle"> سبک--}}
{{--                              +              پوشیدن</span>--}}
{{--                            </a>--}}
{{--                            <div class="card-body text-center">--}}

{{--                                <p class="card-text h5">--}}
{{--                                    {{$post->title}}--}}
{{--                                </p>--}}
{{--                                <!--=== admin SEO=== -->--}}
{{--                                <p class="card-text text-muted">--}}
{{--                                    <i class="bi bi-person-circle"></i>--}}
{{--                                    کارشناس محتوا--}}
{{--                                </p>--}}
{{--                                <p class="card-text">--}}
{{--                                <p class="text-muted"></p>--}}
{{--                                </p>--}}
{{--                                <!--=== link for continue to read a content ===-->--}}
{{--                                <a href="#" class="text-decoration-none--}}
{{--                                            d-flex justify-content-center--}}
{{--                                            text-danger fw-bolder content-in-card"><p--}}
{{--                                        class="">ادامه--}}
{{--                                        مطلب</p><span class="span2--}}
{{--                                                fw-bolder ps-2 ">...</span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--                <div class="swiper-pagination"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @include('layouts.endSidebar')--}}

{{--        <!-- open navbar in button page for mobile &tablet size -->--}}
{{--        <div class="navformobile d-flex flex-column border position-fixed--}}
{{--                        bottom-0 bg-white w-100 d-lg-none ">--}}
{{--            <!-- جدید برای همه صفحات  -->--}}
{{--            <div class="row">--}}

{{--                <div class="col-3 text-center"><a href="#"><img src="./img/icons8-shop-32.png" alt="shop"style="width:25px; height=25px"></a></div>--}}
{{--                <div class="col-3 text-center"><a href="#"><img src="./img/icons8-home-page-48.png" alt=""style="width:25px; height=25px"> </a></div>--}}
{{--                <div class="col-3 text-center position-relative"><a href="#"><img src="./img/icons8-heart-32.png" alt=""style="width:25px; height=25px">--}}
{{--                        <span class="span1--}}
{{--                                                            position-absolute--}}
{{--                                                            text-white counter1"id="counter1">0</span>--}}
{{--                    </a> </div>--}}
{{--                <div class="col-3 text-center">--}}
{{--                    <a href="#"> <img src="./img/icons8-customer-32 (1).png" alt="person" style="width: 25px;height: 25px;"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row-text-navmobile row ">--}}
{{--                <div class="col-3 text-center">--}}
{{--                    <a class="text-decoration-none text-dark fw-bold" href=""><p>فروشگاه</p></a>--}}
{{--                </div>--}}
{{--                <div class="col-3 text-center">--}}
{{--                    <a class="text-decoration-none text-dark fw-bold" href="#"> <p>خانه</p></a>--}}
{{--                </div>--}}
{{--                <div class="col-3 text-center">--}}
{{--                    <a class="text-decoration-none text-dark fw-bold" href="#"><p>علاقه مندی</p></a>--}}
{{--                </div>--}}
{{--                <div class="col-3 text-center">--}}
{{--                    <a class="text-decoration-none text-dark fw-bold" href="#"><p>حساب کاربری</p></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}




{{--@endcomponent--}}



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main pag</title>
    <link rel="stylesheet" href="./all-main.css">
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
</head>
<body>
<!--== HEADER& NAVBAR ====-->
<div class="bodyforclick"></div>
<div class="under-header">

</div>
<section class="header container-fluid shadow">
    <header>
        <nav>



            <!-- close menucolapse -->
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
                            <button class="navbar-toggler mnubtnnav"
                                    type="button"
                                    data-bs-toggle="collapse"
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
                                           href="#">تماس با ما </a>
                                    </li>
                                    <li css="nav-item">
                                        <a class="nav-link">فروشگاه</a>
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
                        <img src="./img/icons8-customer-32 (1).png"
                             style="width: 30px;height: 30px;"
                             alt="" class="for-show-login">
                        <div class="position-relative mx-3
                                        basshowside">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="25" height="25"
                                 fill="currentColor" class="bi bi-bag
                                            fw-500" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5
                                                2.5V4h-5v-.5A2.5 2.5 0 0 1 8
                                                1zm3.5 3v-.5a3.5 3.5 0 1 0-7
                                                0V4H1v10a2 2 0 0 0 2 2h10a2 2 0
                                                0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0
                                                1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg>
                            <span class="span1 position-absolute
                                                shownumbas1 ">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- =====================================================close navbar in top page =============-->
        <div class="row row-nav-basket border-bottom">
            <!--================================================== bascket & login & like===== -->
            <div class="col-4 d-flex d-none d-lg-flex
                                justify-content-lg-start">
                <div class="ms-2 ps-3 pe-5 d-flex basshowside">
                    <div class="position-relative mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="25" height="25"
                             fill="currentColor" class="bi bi-bag
                                            text-dark basshowside " viewBox="0
                                            0 16 16">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5
                                                2.5V4h-5v-.5A2.5 2.5 0 0 1 8
                                                1zm3.5 3v-.5a3.5 3.5 0 1 0-7
                                                0V4H1v10a2 2 0 0 0 2 2h10a2 2 0
                                                0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0
                                                1-1 1H3a1 1 0 0 1-1-1V5z"/>
                        </svg>
                        <span class="span1 position-absolute
                                                text-white shownumbas">0</span>
                    </div>
                    <p class="text-dark fw-bolder mb-2 "><span
                            class="span1 text-muted mb-2"> 0
                                            </span>هزار تومان</p>
                </div>
                <div class="ms-2 ps-3 d-flex">
                    <div class="position-relative">
                        <img src="./img/icons8-heart-32.png"
                             alt="">
                        <span class="span1 position-absolute
                                                text-white countere counter">0</span>
                    </div>
                    <a href="#" class="text-decoration-none
                                            text-dark pt-1"> <span class="fw-bolder">علاقه مندی ها</span></a>
                </div>
                <div>

                    <a href="#" class="text-decoration-none
                                             for-show-login">
                        <img src="./img/icons8-customer-32 (1).png"
                             style="width:30px;height:30px"
                             alt="">
                        <span class="text-dark fw-bolder">ورود/ثبت نام</span>
                    </a>

                </div>
            </div>


            <!-- basket hidden in responsive page -->
            <div class="col-6"></div>
            <!-- ============logo ====-->
            <div class="col-2 d-none d-lg-flex">
                <img class="logo-img"
                     src="./img/dream-logo.png"
                     alt="">
            </div>
        </div>
        </div>

        <!--============ close bascket & login & like =============-->
        <div class="row border-bottom justify-content-center">
            <!-- ====dropdown list ===-->
            <div class="col-3 mt-3 d-none d-lg-flex dropdown1
                                textdroupdown
                                position-relative justify-content-lg-between">
                <ul class="d-flex ">
                    <li class="dropdown1 "><p><i
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

                <i class="bi bi-chevron-down "></i>

            </div>
            <!--===== menu in end header ====-->
            <div class="col-9 mt-3 d-flex mnuhed">
                <!-- ==========product search ======-->
                <div class="col-12 d-flex">
                    <div class="input-group inputgroup1 mb-3
                                            ">
                        <button type="button" class="btn-Enter btn
                                                btn-danger
                                                btn-outline-danger p-3"><i
                                class="bi
                                                    bi-search
                                                    text-white"></i></button>
                        <input type="text"
                               class="form-control ٍEnter"
                               placeholder="جستجوی محصولات"
                               aria-label="Text input with
                                                segmented
                                                dropdown
                                                button">
                    </div>
                </div>
    </header>

</section>
<!-- for gap in pag -->

<div class="container-fluid">
    <!--===== menu collapse in top page<============-->

    <div class="d-flex bgmnuhidden flex-column">
        <div class="d-flex justify-content-end">
            <i id="close-icon-top-mnu"
               class="bi bi-x-lg "></i>
        </div>
        <ul>
            <li class="list-unstyled py-3"><a href="#"
                                              class="text-decoration-none text-muted
                text-end">تماس با ما </a></li>
            <li class="list-unstyled py-3"><a href="#"
                                              class="text-decoration-none text-muted
                text-end">مجله ی دیریم</a></li>
            <li class="list-unstyled py-3"><a href="#"
                                              class="text-decoration-none text-muted
                text-end">فروشگاه</a></li>
            <li class="list-unstyled py-3"><a href="#"
                                              class="text-decoration-none text-muted
                text-end">علاقه مندی</a></li>

        </ul>
    </div>


    <!-- for basket hidden -->
    <div class="hidden-basket col-lg-3 col-10 border
                                rounded
                                ">
        <div class="position-relative"></div>
        <!-- قسمت محصولات -->
        <div class="boxforpro">
            <!-- محصول اول -->
            <div class="addingtobas">
                <div class="row d-flex
                                            justify-content-between ">
                    <div class="col-6">
                        <p class="h4 fw-bolder m-4">سبد
                            خرید</p>
                    </div>
                    <div class="col-6 d-flex
                                                justify-content-end ">
                        <p class="h5 text-muted m-4
                                                    closebas">بستن</p>
                    </div>
                </div>
                <div class="hrr"></div>
                <div class="row py-4 mx-2 forclosepro">
                    <div class="col-5 col-md-4">
                        <img src="./img/bask1.webp"
                             class="img-for-bsket"
                             alt="img">
                    </div>
                    <div class="col-6 col-md-7 d-flex
                                                flex-column ">
                        <p class="">شلوار اسلش جیب
                            جلومدل
                            121575</p>
                        <div class="btn-group p-0
                                                    counterr1 trh diir
                                                    " role="group"
                             aria-label="First
                                                    group" style="max-width:
                                                    max-content;">
                            <button type="button"
                                    class="btn
                                                        btn-outline-danger
                                                        plus">+</button>
                            <button type="button"
                                    class="btn
                                                        btn-outline-danger
                                                        disabled" id="result">1</button>
                            <button type="button"
                                    class="btn
                                                        btn-outline-danger
                                                        mines">-</button>
                        </div>
                        <p class="text-danger ">تومان
                            <span
                                class="span1">418,000</span></p>
                    </div>
                    <div class="col-1">
                        <img
                            src="./img/icons8-macos-close-24.png"
                            class="closepro" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row customer m-2 position-absolute
                                    bottom-0 ">
            <div class="col-12 d-flex
                                        justify-content-between m-3">
                <p class="h5 fw-bolder">جمع كل سبد خريد:</p>
                <p class="h5 fw-bolder text-danger"><span
                        class="span1">768,000</span>تومان</p>
            </div>
            <a href="#" class="text-decoration-none
                                        text-muted py-2">مشاهده ی محصولات
                بیشتر...</a>
            <div class="col-12 text-center mt-4">
                <a href="#" class="btn btn-light w-100
                                            mb-1
                                            rounded-0 border py-2">مشاهده ی سبد
                    خرید</a>
                <a href="#" class="btn btn-danger w-100
                                            rounded-0 py-2">تسویه حساب</a>
            </div>
        </div>
    </div>
</div>
<!--=========================================================>
CLOSE BASKET HIDDEN
<======================================================-->
<!--===============> show login hidden
<====================-->
<div class="show-login-hidden col-10 col-md-5 col-lg-3 border">
    <div class="row d-flex
                                justify-content-between ">
        <div class="col-6">
            <p class="h4 fw-bolder m-4">ورود</p>
        </div>
        <div class="col-6 d-flex
                                    justify-content-end ">
            <p class="h5 text-muted m-4
                                    closelogin-hide">بستن</p>
        </div>
    </div>
    <div class="hrr"></div>
    <div class="p-4 d-flex flex-column">
        <label class=" h5">
            شماره موبایل<span class="text-danger fw-bolder">*</span>
        </label>
        <input type="text" class="py-3 rounded"id="input1" placeholder="تلفن">
    </div>
    <div class="p-4 d-flex flex-column">
        <label class=" h5">
            رمز عبور<span class="text-danger fw-bolder">*</span>
        </label>
        <input type="text" class="py-3 rounded"id="input1" >
    </div>
    <div class="text-center py-3"><a href="#" class="btn btn-danger rounded-0"id="login" style="width: 90%;">ورود</a></div>
    <div class="d-flex containforcheck">
        <input type="checkbox"id="input2"class="m-3">
        <a href="#" class="text-decoration-none text-dark py-3">مرا به خاطر بسپار</a>
    </div>
    <a href="#" class="text-decoration-none text-danger m-3 py-4">رمز عبور را فراموش کرده اید ؟</a>
    <p class="w-100 text-center py-3">یا</p>
    <div class="text-center py-3"><a href="#" class="btn btn-danger rounded-0"id="login" style="width: 90%;">ورودبا رمز یکبارمصرف</a></div>
    <div class="hrr"></div>
    <div style="width: -webkit-fill-available;" class="text-center py-4 avatar"><img src="./img/icons8-customer-32 (1).png" style="opacity: 0.2;height: 91px;" alt="img">
        <p class="fw-bolder">هنوز حساب کاربری ندارید؟ </p>
        <a href="#"class="text-decoration-none text-dark">ایجاد حساب کاربری</a>
        <div class="bg-danger w-50"style="height:5px"></div>

    </div>
</div>
</div>




<!--=================================================================== new section ===content page ===========================-->
<div class="container-fluid">
    <section class="content">
        <!--==== Advertising(تبلیغات) ==-->
        <div class="row forcenteradvertis text-center">
            @foreach(\App\Models\Category::all()->take(8) as $item)
                <div class="col-12 col-lg-3 advertis">
                    <a href="{{route('product_category',$item->id)}}">
                        <img src="{{{url($item->image)}}}" alt="" class="pb-lg-3 pb-2">
                    </a>
                </div>
            @endforeach
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
            @php
                $products=\App\Models\Product::all();
$arr=[];
foreach ($products as $product){
$arr[$product->id]=['count_order'=>$product->orders->count(),'product'=>$product];

}
$productsort=collect($arr)->sortByDesc('count_order')->take(12);
            @endphp
            @foreach($productsort as $pro_or)
                <div class="item itemforhover">
                    <div class="card position-relative"
                         style="width:14rem ;">
                        <a href="#" class="text-decoration-none
                                        text-dark">
                            <!--== img for card == -->
                            <img class="card-img-top" id="img-card"
                                 src="{{!$pro_or['product']->images()->count()==0?url($pro_or['product']->images->image):''}}"
                                 alt="Card image cap">
                        </a>
                        <div class="like position-absolute
                                        flex-column
                                        justify-content-center bg-white"
                             style="width:30px ;height:
                                        100px;">
                            <!--=== show icon when hover card ===-->
                            <a href="{{route('single_product',$pro_or['product']->id)}}" class="text-decoration-none
                                            text-dark py-2">
                                <i class="bi bi-cart3 icononimg"
                                   id="addbas7"></i>
                                <i class="bi bi-check2 selbas7"></i>
                            </a></a>
                            <a href="#" class="text-decoration-none
                                        text-dark py-2">
                                <i class="bi bi-heart iconlike7"></i>
                                <i class="bi bi-check2 iconselect7"></i>
                            </a>
                        </div>
                        <!--===labale in imag ===-->
                        <span class="badge text-bg-danger vijhe p-2
                                    rounded-0">ویژه</span>
                        @if($pro_or['product']->inventory==0)
                            <span class="badge text-bg-secondary mojoudi p-2 rounded-0">
                                اتمام موجودی
                            </span>
                        @endif


                        @php
                            $discount=$pro_or['product']->discounts->sum(function ($dis){
                                return $dis->percent;
                            });
                        @endphp


                        <div class="card-body p-2">
                            <!--== price == -->
                            <a href="#" class="text-decoration-none
                                        text-dark">
                                @if(!$discount==0)
                                    <span class="badge text-bg-danger ">{{$discount}}
                                            تخفیف</span>
                                @endif
                                <p class="card-text">
                                    {{$pro_or['product']->title}}
{{--                                    <span class="span1">180091</span>--}}
                                </p>
                            </a>

                            @if(!$discount==0)
                                <div class="d-flex
                                        justify-content-between card-text">
                                    <del class="text-muted span1">{{$pro_or['product']->price}}
                                        تومان</del>
                                    <small class="text-danger span1">{{$pro_or['product']->price/100*$discount-$pro_or['product']->price}}
                                        تومان</small>
                                </div>
                            @endif
                            <small class="text-danger span1">{{$pro_or['product']->price}}
                                تومان</small>
                        </div>
                    </div>
                </div>
            @endforeach

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
    <section class="footer pt-5 ">
        <footer>
            <div class="row  text-center">
                <div class="col-6 col-lg-2 pb-2">
                    <img src="./img/fincol1.svg" alt="img">
                    <p class="text-muted">ارسال به تمام کشور</p>
                </div>
                <div class="col-6 col-lg-2 pb-2">
                    <img src="./img/fincol2.svg" alt="img">
                    <p class="text-muted">بهترین کیفیت </p>
                </div>
                <div class="col-6 col-lg-2 pb-2">
                    <img src="./img/fincol3.png" alt="img">
                </div>
                <div class="col-6 col-lg-2 pb-2">
                    <img src="./img/fincol.png" alt="img">
                </div>
                <div class="col-6 col-lg-2 pb-2">
                    <img src="./img/fincol4.svg" alt="img">
                    <p class="text-muted">پشتیبانی آنلاین</p>
                </div>
                <div class="col-6 col-lg-2 pb-2">
                    <img src="./img/fincol5.svg" alt="img">
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
            <p class="fw-bolder h5 text-center py-3">آدرس فروشگاه</p>
            <p class=" text-center"></p>
            <br>
            <br>
            <br>
            <br>


</div>

</footer>
</section>
<!-- open navbar in button page for mobile &tablet size -->
<div class="navformobile d-flex flex-column border position-fixed
                bottom-0 bg-white w-100 d-lg-none">
    <!-- جدید برای همه صفحات  -->
    <div class="row">

        <div class="col-3 text-center"><a href="#"><img src="./img/icons8-shop-32.png" alt="shop"style="width:25px; height=25px"></a></div>
        <div class="col-3 text-center"><a href="#"><img src="./img/icons8-home-page-48.png" alt=""style="width:25px; height=25px"> </a></div>
        <div class="col-3 text-center position-relative"><a href="#"><img src="./img/icons8-heart-32.png" alt=""style="width:25px; height=25px">
                <span class="span1
                                                    position-absolute
                                                    text-white counter1"id="counter1">0</span>
            </a> </div>
        <div class="col-3 text-center">
            <a href="#"> <img src="./img/icons8-customer-32 (1).png" alt="person" style="width: 25px;height: 25px;"></a>
        </div>
    </div>
    <div class="row-text-navmobile row ">
        <div class="col-3 text-center">
            <a class="text-decoration-none text-dark fw-bold" href=""><p>فروشگاه</p></a>
        </div>
        <div class="col-3 text-center">
            <a class="text-decoration-none text-dark fw-bold" href="#"> <p>خانه</p></a>
        </div>
        <div class="col-3 text-center">
            <a class="text-decoration-none text-dark fw-bold" href="#"><p>علاقه مندی</p></a>
        </div>
        <div class="col-3 text-center">
            <a class="text-decoration-none text-dark fw-bold" href="#"><p>حساب کاربری</p></a>
        </div>
    </div>
</div>

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
<script>


    function addToInterests(event,id){

    }

    //////////
    let like7=document.querySelector(".iconlike7");
    let select7=document.querySelector('.iconselect7')
    like7.addEventListener('click',function(e){
        e.preventDefault();
        like7.style.display="none";
        select7.style.display="block"
        return (shownumlike.innerHTML)++,(shownumlike1.innerHTML)++;
    })
</script>
</body>
</html>
//شنبه ساعت دوازده
