{{--@component('products.layouts.content')--}}

{{--    <div class="col-lg-2 d-none d-lg-block">--}}
{{--        <!-- ===filter inventory ==== -->--}}
{{--        <!-- ===filter price ==== -->--}}
{{--        <div class=" d-flex flex-column p-4 border--}}
{{--                                        m-2 rounded my-4">--}}
{{--            <a href="#" class="btn btn-secondary">فیلتر--}}
{{--                قیمت</a>--}}
{{--            <!--====> progressbar for selected price--}}
{{--            <====-->--}}
{{--            <input type="range" class="form-range customRange2" min="{{$products->min('price')/1000}}" max="{{\App\Models\Product::max('price')/1000}}" id="customRange2" onchange="func2()">--}}
{{--            <div class="d-flex flex-row">--}}
{{--                <p class="text-muted pt-2">قیمت:<span class="span1">{{$products->max('price')}}-</span></p>--}}
{{--            </div>--}}
{{--            <p class="span1 customRange3">{{$products->max('price')}}تومان</p>--}}
{{--            <a href="#" id="btnFilterPrice" class="btn btn-secondary w-50">فیلتر</a>--}}
{{--        </div>--}}

{{--        <!--==== filter for color==== -->--}}
{{--        <div class=" d-flex flex-column p-4 border--}}
{{--                                        m-2 rounded my-4 filtercolor">--}}
{{--            <a href="#" class="btn btn-secondary">فیلتر--}}
{{--                رنگ</a>--}}
{{--            <div class="pt-3">--}}
{{--                @foreach(\App\Models\Color::all() as $color)--}}
{{--                    <a href="#" onclick="filterColor(event,'{{$color->id}}')" class="text-decoration-none d-flex justify-content-between">--}}
{{--                        <div class="circled" style="background-color: {{$color->color}}" id="red"></div>--}}
{{--                        <p class="text-muted pt-2">{{$color->label}}</p>--}}
{{--                    </a>--}}
{{--                @endforeach--}}
{{--                <div class="circled palangi"--}}
{{--                     id="red"></div>--}}
{{--                <div class="circled" id="red"></div>--}}
{{--                <div class="circled" id="red"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-lg-10">--}}
{{--        <!--====== MENU FILTER FOR RESPONSIVE IN SMALL SIZE(منوی پنهان برای فیلترها) =====-->--}}
{{--        <div class=" filter-for-sm rounded--}}
{{--                                        position-absolute ">--}}
{{--            <!-- icon for close -->--}}
{{--            <div class="d-flex justify-content-end"><i--}}
{{--                    id="close-icon-filter-sm"--}}
{{--                    class="bi bi-x-lg"></i></div>--}}
{{--            <!--===> فیلتر حراج <====-->--}}
{{--            <!-- ===filter price ==== -->--}}
{{--            <div class=" d-flex flex-column p-4 border m-2 rounded my-4">--}}
{{--                <a href="#" class="btn btn-secondary">فیلتر قیمت</a>--}}
{{--                <!--====> progressbar for selected--}}
{{--                price (منوی پنهان)<====-->--}}
{{--                <input type="range" class="form-range customRange4" min="{{$products->min('price')/1000}}" max="{{\App\Models\Product::max('price')/1000}}" id="customRange1" onchange="func3()">--}}
{{--                <div class="d-flex flex-row">--}}

{{--                    <p class="text-muted pt-2">قیمت:--}}
{{--                        <span class="span1">{{$products->max('price')}}-</span>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <p class="span1 customRange5">{{$products->max('price')}}تومان</p>--}}
{{--                <a href="#" id="btnFilterPrice1" class="btn btn-secondary w-50">فیلتر</a>--}}
{{--            </div>--}}
{{--            <!--===دسته بندی محصولات ====-->--}}

{{--            <!--==== filter for color==== -->--}}
{{--            <div class=" d-flex flex-column p-4 border m-2 rounded my-4 filtercolor">--}}
{{--                <a href="#" class="btn btn-secondary">فیلتر رنگ</a>--}}
{{--                <div class="pt-3">--}}
{{--                    @foreach(\App\Models\Color::all() as $color)--}}
{{--                        <a href="#" onclick="filterColor(event,'{{$color->id}}')" class="text-decoration-none d-flex justify-content-between">--}}
{{--                            <div class="circled" style="background-color: {{$color->color}}" id="red"></div>--}}
{{--                            <p class="text-muted pt-2">{{$color->label}}</p>--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                    <div class="circled palangi"--}}
{{--                         id="red"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--============> row for order list for--}}
{{--        show<========== -->--}}
{{--        <div class="row">--}}

{{--            <div class="d-lg-none py-2">--}}
{{--                <i id="open-filter-sm" class="bi--}}
{{--                                                    bi-list"></i>--}}
{{--            </div>--}}
{{--            <div class="col-lg-7 d-none--}}
{{--                                                d-lg-block"></div>--}}

{{--        </div>--}}
{{--        <!-- ==================================>card in row1 <======================================-->--}}
{{--        <div class="row" id="products">--}}
{{--            <!--=== card1 ====>row1 ===-->--}}
{{--            @foreach($products as $product)--}}
{{--                <div class="col-6 col-lg-3">--}}
{{--                    <div class="card cd1r1">--}}
{{--                        <!-- img in card2 -->--}}
{{--                        <a href="{{route('single_product',$product->id)}}">--}}
{{--                            <img class="card-img-top img-fluid cdimgtop" src="{{!$product->images()->count()==0?url($product->images->image):''}}" alt="Card image cap">--}}
{{--                            <div class="card-body cbody">--}}
{{--                                <div class="d-flex justify-content-end mb-2">--}}
{{--                                    <a href="#" class="badge text-bg-success mt-0 text-decoration-none">ویژه</a>--}}
{{--                                </div>--}}
{{--                                @php--}}
{{--                                    $discount=$product->discounts->sum(function ($dis){--}}
{{--                                        return $dis->percent;--}}
{{--                                    });--}}
{{--                                @endphp--}}
{{--                                <h5 class="card-title text-muted text-center">{{$product->title}}</h5>--}}
{{--                                <p class="card-text span1 text-danger text-center pt-2">{{$discount==0?$product->price:$product->price/100*$discount-$product->price}}تومان</p>--}}
{{--                                <del class="text-muted span1">{{$discount==0?'':$product->price . ' تومان'}}</del>--}}
{{--                                <!--==== div with non style for hover ====-->--}}
{{--                                <div class="nonestyle ">--}}
{{--                                    @foreach($product->attributes as $att)--}}
{{--                                        <p class="card-text">{{$att->name}} : {{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}</p>--}}
{{--                                    @endforeach--}}
{{--                                    <div class="d-flex">--}}
{{--                                        <a href="#" onclick="addToInterest(event,'{{$product->id}}')">--}}
{{--                                            <div class="flex-grow-1">--}}
{{--                                                <i class="ps-5 bi bi-heart icononimg iconlike4"  onclick="clicktolike(this)"></i>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}
{{--                                        <a href="{{route('single_product',$product->id)}}">--}}
{{--                                            <div class="flex-grow-1">--}}
{{--                                                <i class="ps-5 bi bi-cart3 icononimg" id="addbas6"></i>--}}
{{--                                            </div>--}}
{{--                                        </a>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <!--=====> close card4 <=====-->--}}
{{--    <!--=========> CLOSE ROW3--}}
{{--    <=========-->--}}
{{--    <!--======> row for mor loading<==========--}}
{{--        -->--}}
{{--    <div class="row--}}
{{--                                                    justify-content-center--}}
{{--                                                    align-content-center py-5">--}}
{{--        <button id="download_more" class="btn--}}
{{--                                                        btn-secondary w-25">--}}
{{--             محصولات بیشتر</button>--}}
{{--    </div>--}}
{{--    </div>--}}


{{--    @slot('script')--}}
{{--        <script>--}}

{{--            let empty=()=>{--}}
{{--                return `--}}
{{--            <div class="container card border-info" style="width: 70%;height: 13%;margin-top: 15%;">--}}
{{--                <i><p class="text-center text-danger" style="font-size: 35px; margin-top:7px; font-family: 'B Homa'">--}}
{{--                    متاسفانه محصول مد نظر شما وجود ندارد !!--}}
{{--                </p></i>--}}

{{--                <b><p class="text-center text-secondary" style="font-size: 20px">--}}
{{--                    NOT FOUND | 404--}}
{{--                </p></b>--}}
{{--            </div>--}}
{{--            `--}}
{{--            }--}}

{{--            $('#btnFilterPrice').click(function (){--}}
{{--                $.ajax({--}}
{{--                    type:'get',--}}
{{--                    // headers:{--}}
{{--                    //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content--}}
{{--                    // },--}}
{{--                    data:{--}}
{{--                        price:document.querySelector('#customRange2').value,--}}
{{--                    }--}}
{{--                    ,--}}
{{--                    url:'{{route('show_products')}}',--}}
{{--                    success:function (result){--}}
{{--                        $('#products').children().remove();--}}
{{--                        if (isEmpty(result)){--}}
{{--                            $('#products').append(empty());--}}
{{--                        }--}}
{{--                        $('#products').append(result);--}}

{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--            $('#btnFilterPrice1').click(function (){--}}
{{--                $.ajax({--}}
{{--                    type:'get',--}}
{{--                    // headers:{--}}
{{--                    //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content--}}
{{--                    // },--}}
{{--                    data:{--}}
{{--                        price:document.querySelector('#customRange1').value,--}}
{{--                    }--}}
{{--                    ,--}}
{{--                    url:'{{route('show_products')}}',--}}
{{--                    success:function (result){--}}
{{--                        $('#products').children().remove();--}}
{{--                        if (isEmpty(result)){--}}
{{--                            $('#products').append(empty());--}}
{{--                        }--}}
{{--                        $('#products').append(result);--}}

{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--            function filterColor(event,id)--}}
{{--            {--}}
{{--                event.preventDefault();--}}
{{--                $.ajax({--}}
{{--                    type:'get',--}}
{{--                    // headers:{--}}
{{--                    //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content--}}
{{--                    // },--}}
{{--                    data:{--}}
{{--                        color:id--}}
{{--                    }--}}
{{--                    ,--}}
{{--                    url:'{{route('show_products')}}',--}}
{{--                    success:function (result){--}}
{{--                        $('#products').children().remove();--}}
{{--                        if (isEmpty(result)){--}}
{{--                            $('#products').append(empty());--}}
{{--                        }--}}
{{--                        $('#products').append(result);--}}

{{--                    }--}}
{{--                });--}}
{{--            }--}}


{{--            $('#btnSearch').click(function (){--}}

{{--                $.ajax({--}}
{{--                    type:'get',--}}
{{--                    // headers:{--}}
{{--                    //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content--}}
{{--                    // },--}}
{{--                    data:{--}}
{{--                        search:document.getElementById('searchInput').value--}}
{{--                    }--}}
{{--                    ,--}}
{{--                    url:'{{route('show_products')}}',--}}
{{--                    success:function (result){--}}
{{--                        $('#products').children().remove();--}}
{{--                        if (isEmpty(result)){--}}
{{--                            $('#products').append(empty());--}}
{{--                        }--}}
{{--                        $('#products').append(result);--}}

{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--            let page={{!empty($products->currentPage())?$products->currentPage():1}};--}}

{{--            $('#download_more').click(function (){--}}

{{--                if (page=={{$products->lastPage()}}){--}}
{{--                    return document.getElementById('download_more').remove();--}}
{{--                }--}}
{{--                page+=1;--}}
{{--                $.ajax({--}}
{{--                    type:'get',--}}
{{--                    url:'{{route('products_paginate')}}'+'?page=2',--}}
{{--                    success:function (result){--}}
{{--                        $('#products').append(result);--}}

{{--                    }--}}
{{--                });--}}
{{--                let url= new URL(window.location.href);--}}
{{--                url.searchParams.set('page',page);--}}
{{--                window.history.pushState(window.location.href,'mehdi behyar',url.href);--}}

{{--            });--}}


{{--            function isEmpty(str) {--}}
{{--                return (!str || str.length === 0 );--}}
{{--            }--}}





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
{{--                            document.getElementById('count_interest').innerHTML+1;--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}


{{--        </script>--}}
{{--    @endslot--}}
{{--@endcomponent--}}






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" class="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./all-main.css">
    <link rel="icon" type="image/x-icon" href="./img/iconfort4.webp">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
        crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<!--== HEADER& NAVBAR ====-->
<div class="bodyforclick"></div>
<div class="under-header"></div>
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
                                        <a href="{{route('show_products')}}" class="nav-link">فروشگاه</a>
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
                                                text-white shownumbas">{{\App\Http\Headers\Cart\Cart::all()->count()}}</span>
                        @php

                            $cart=\App\Http\Headers\Cart\Cart::all();
                            $arr=[];
                            foreach ($cart as $c){
                                $discount=$c['product']->discounts->sum(function ($dis){
                                    return $dis->percent;
                                });
                                if (!$discount==0){
                                    $p=$c['product']->price/100*$discount;
                                    $percent=$c['product']->price - $p;
                                    $arr[]=$percent*$c['quantity'];

                                }else{
                                    $arr[]=$c['product']->price * $c['quantity'];
                                }

                            }

                            $total_price=collect($arr)->sum(function ($item){
                                return $item;
                            });


                        @endphp
                    </div>
                    <p class="text-dark fw-bolder mb-2 "><span
                            class="span1 text-muted mb-2"> {{$total_price}}
                                            </span>هزار تومان</p>
                </div>
                <div class="ms-2 ps-3 d-flex">
                    <div class="position-relative">
                        <img src="./img/icons8-heart-32.png"
                             alt="">
                        <span class="span1 position-absolute
                                                text-white countere counter">{{auth()->check()?\App\Models\Interest::all()->count():\App\Http\Headers\Interest\Interest::all()->count()}}</span>
                    </div>
                    <a href="{{route('interests')}}" class="text-decoration-none
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
        <div class="row border-bottom">
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
                            @foreach(\App\Models\Category::all() as $cate)
                                <a class="drop-item text-center border py-2 text-decoration-none text-muted" href="{{route('product_category',$cate->id)}}">
                                    {{$cate->name_category}}
                                </a>
                            @endforeach
                        </div>
                </ul>

                <i class="bi bi-chevron-down "></i>

            </div>
            <!--===== menu in end header ====-->
            <div class=" col-9 mt-3 d-flex mnuhed">
                <!-- ==========product search ======-->
                <div class="col-3 d-lg-none py-2 d-flex">
                    <i id="open-filter-sm"
                       class="bi
                                            bi-list bg-danger text-white h-50"></i>
                    <p class="fw-bolder">فیلتر ها</p>
                </div>
                <div class="col-9 col-lg-12 d-flex justify-content-between">
                    <div class="input-group inputgroup1 mb-3
                                            ">
                        <button type="button" class="btn
                                                btn-danger
                                                btn-outline-danger p-3"><i
                                class="bi
                                                    bi-search
                                                    text-white btn-Enter"></i></button>
                        <input type="text"
                               class="form-control Enter"
                               placeholder="جستجوی محصولات"
                               aria-label="Text input with
                                                segmented
                                                dropdown
                                                button">
                    </div>
                </div>

    </header>

</section>



@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="Error-for-login remove_error-{{$loop->index}}" style="width: 100%">
            <p class="fw-bolder pe-3">خطا: <span class=" fw-bolder"></span>{{$error}}</p>
            <img onclick="delete_error(event,'{{$loop->index}}')" src="./img/icons8-macos-close-24.png"class="closepro fw-bolder closeerror"style="cursor: pointer;" alt="">
        </div>
    @endforeach
@endif


<div class="container-fluid">
    <!--===== menu collapse in top page<============-->

    <div class="d-flex bgmnuhidden flex-column">
        <div class="d-flex justify-content-end">
            <i id="close-icon-top-mnu"
               class="bi bi-x-lg"></i>
        </div>
        <ul>
            <li class="list-unstyled py-3"><a href="#"
                                              class="text-decoration-none text-muted
                text-end">تماس با ما </a></li>
            <li class="list-unstyled py-3"><a href="#"
                                              class="text-decoration-none text-muted
                text-end">مجله ی دیریم</a></li>
            <li class="list-unstyled py-3"><a href="{{route('show_products')}}"
                                              class="text-decoration-none text-muted
                text-end">فروشگاه</a></li>
            <li class="list-unstyled py-3"><a href="{{route('interests')}}"
                                              class="text-decoration-none text-muted
                text-end">علاقه مندی</a></li>

        </ul>
    </div>

    <!-- for gap in pag -->
    <svg xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 120 120" class="gap
                                    rounded-circle text-bg-success
                                    animate__animated animate__bounce
                                    animate__delay-1s"><path
            d="M60.19,53.75a3,3,0,1,0,3.06,3A3,3,0,0,0,60.19,53.75Zm-11.37,0a3,3,0,1,0,3.06,3A3,3,0,0,0,48.81,53.75Zm45.94,4A35,35,0,1,0,52.75,92v12.76s14.55-4.25,30.53-19.28C94.68,74.74,94.75,59.41,94.75,59.41l0,0C94.74,58.87,94.75,58.3,94.75,57.72Zm-10.14.6s0,10.64-8,18.09A57.93,57.93,0,0,1,53,89.8V80.34A24.29,24.29,0,1,1,84.61,57.16c0,.4,0,.8,0,1.19ZM70.69,53.75a3,3,0,1,0,3.06,3A3,3,0,0,0,70.69,53.75Z"
            transform="translate(0.25 0.25)"></path></svg>
    <div class="page-gap">
        <div class="header-for-gap bg-success">
            <div class="row">
                <div class="col-4 col-lg-3 d-flex
                                                colforavataradmin">
                    <img class="img-for-top-gap1
                                                    rounded-circle "
                         style="height: 35px; width:
                                                    35px;"
                         src="./img/profile1.png"
                         alt="">
                    <img class="img-for-top-gap2
                                                    rounded-circle "
                         style="height: 35px; width:
                                                    35px;"
                         src="./img/pofile2.jpg"
                         alt="">
                    <img class="img-for-top-gap3
                                                    rounded-circle "
                         style="height: 35px; width:
                                                    35px;"
                         src="./img/profile1.png"
                         alt="">

                </div>
                <div class="col-6 col-lg-8 mt-3">
                    <p class="h6 fw-bolder
                                                    text-white">سامانه پشتیبانی
                        سایت</p>
                    <p class="text-white">پاسخگوی
                        شما هستیم</p>
                </div>
                <div class="col-2 col-lg-1
                                                justify-content-center">
                    <img
                        src="./img/icons8-macos-close-24.png"
                        class="closegap"style="cursor: pointer;" alt="">
                </div>
            </div>
        </div>
        <div class="main-gap">

        </div>
        <div class="footer-gap">
            <input type="text" class="input-for-chat
                                            rounded-3">
            <img src="./img/icons8-sent-50.png"
                 alt="send" class="send-icon">
        </div>
    </div>

    <!-- for basket hidden -->
    <div class="hidden-basket col-lg-3 col-10 border
                                    rounded
                                    ">
        <!-- قسمت بالای سبد -->
        <div class="row d-flex
                                                justify-content-between hed-bas-hidden">
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
        <!-- قسمت میانی سبد -->
        <div class="addingtobas">
            @foreach(\App\Http\Headers\Cart\Cart::all() as $cart1)
                <div class="row py-4 mx-2
                                                        forclosepro{{$loop->index}}">
                    <div class="col-5 col-md-4">
                        <a href="{{route('single_product',$cart1['product']->id)}}">
                            <img
                                src="{{!$cart1['product']->images()->count()==0?url($cart1['product']->images->image):''}}"
                                class="img-for-bsket"
                                alt="img">
                        </a>
                    </div>
                    <div class="col-6 col-md-7
                                                            d-flex
                                                            flex-column ">
                        <p class="">
                            {{$cart1['product']->title}}
                        </p>
                        <div class="btn-group
                                                                p-0
                                                                counterr1 trh diir
                                                                " role="group"
                             aria-label="First
                                                                group"
                             style="max-width:
                                                                max-content;">
                            <button
                                type="button"
                                class="btn
                                                                    btn-outline-danger
                                                                    plus" onclick="plus(event,'{{$cart1['id']}}','{{$loop->index}}')">+</button>
                            <button
                                type="button"
                                class="btn
                                                                    btn-outline-danger
                                                                    disabled result-{{$loop->index}}"
                                id="result">{{$cart1['quantity']}}</button>
                            <button
                                type="button"
                                class="btn
                                                                    btn-outline-danger
                                                                    mines" onclick="minus(event,'{{$cart1['id']}}','{{$loop->index}}')">-</button>
                        </div>
                        @php
                            $discount=$cart1['product']->discounts->sum(function ($dis){
                                return $dis->percent;
                            });
                        @endphp
                        <p class="text-danger ">تومان
                            <span
                                class="span1">{{$discount==0?$cart1['product']->price:$cart1['product']->price/100*$discount-$cart1['product']->price}}</span></p>
                    </div>
                    <div class="col-1">
                        <img onclick="closepro(event,'{{$cart1['id']}}','{{$loop->index}}')"
                             src="./img/icons8-macos-close-24.png"
                             class="closepro"
                             alt="">
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center update-basket">
            <button class="btn btn-success">
                بروز رسانی سبد
            </button>
        </div>

        <!-- قسمت پایانی سبد -->
        <div class="row customer m-2
                                                ">
            <div class="col-12 d-flex
                                                    justify-content-between
                                                    m-3">
                <p class="h5 fw-bolder">جمع
                    كل سبد خريد:</p>
                <p class="h5 fw-bolder
                                                        text-danger"><span
                        class="span1">{{$total_price}}</span>تومان</p>
            </div>
            <a href="{{route('show_products')}}"
               class="text-decoration-none
                                                    text-muted py-2">مشاهده ی
                محصولات
                بیشتر...</a>
            <div class="col-12 text-center
                                                    mt-4">
                <a href="{{route('cart')}}" class="btn
                                                        btn-light w-100
                                                        mb-1
                                                        rounded-0 border py-2">مشاهده
                    ی سبد
                    خرید</a>
                <a href="{{route('create_information')}}" class="btn
                                                        btn-danger w-100
                                                        rounded-0 py-2">تسویه
                    حساب</a>
            </div>
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
    <form method="post" action="{{route('login')}}">
        @csrf
        <div class="p-4 d-flex flex-column">
            <label class=" h5">
                نام کاربری<span class="text-danger fw-bolder">*</span>
            </label>
            <input type="text" name="username" class="user_name py-3 rounded"id="input1" placeholder="نام کاربری">
        </div>
        <div class="p-4 d-flex flex-column">
            <label class=" h5">
                رمز عبور<span class="text-danger fw-bolder">*</span>
            </label>
            <input type="password" name="password" class="password py-3 rounded"id="input1" >
        </div>

        <div class="text-center py-3"><button class="btn-login btn btn-danger rounded-0"id="login" style="width: 90%;">ورود</button></div>
    </form>

    <a href="{{route('resetPassword')}}" class="text-decoration-none text-danger m-3 py-4">رمز عبور را فراموش کرده اید ؟</a>
    <p class="w-100 text-center py-3"></p>
    @auth()
        <div class="text-center py-3"><a href="{{route('getOut')}}" class="btn btn-dark rounded-0"id="login" style="width: 90%;">خروج</a></div>
    @endauth
    <div class="hrr"></div>
    <div style="width: -webkit-fill-available;" class="text-center py-4 avatar"><img src="./img/icons8-customer-32 (1).png" style="opacity: 0.2;height: 91px;" alt="img">
        <p class="fw-bolder">هنوز حساب کاربری ندارید؟ </p>
        <a href="{{route('register')}}"class="text-decoration-none text-dark">ایجاد حساب کاربری</a>
        <div class="bg-danger w-50"style="height:5px"></div>

    </div>
</div>
</div>


<!--=========================> main start
<=========================-->

<section class="container-fluid">

    <main>
        <div class="row">
            <div class="col-lg-2 d-none d-lg-block">

                <!-- ===filter price ==== -->
                <div class=" d-flex flex-column p-4
                                        border
                                        m-2 rounded my-4">
                    <a href="#" class="btn
                                            btn-secondary">فیلتر
                        قیمت</a>
                    <!--====> progressbar for
                    selected price
                    <====-->
                    <input type="range"
                           class="form-range
                                            customRange2" min="{{$products->min('price')/1000}}"
                           max="{{\App\Models\Product::max('price')/1000}}"
                           id="customRange2"
                           onchange="func2()">
                    <div class="d-flex flex-row">
                        <p class="text-muted pt-2">قیمت:<span
                                class="span1">
                                                    {{$products->max('price')}}تومان-</span></p>
                    </div>
                    <p class="span1 customRange3">{{$products->max('price')}}تومان</p>
                    <a href="#" class="btnFilterPrice btn
                                            btn-secondary
                                            w-50">فیلتر</a>
                </div>
                <!--===دسته بندی محصولات ====-->
                <div class="proside border d-flex
                                        flex-column p-4 m-2 rounded
                                        my-4">
                    <a href="#" class="btn
                                            btn-secondary">دسته
                        های محصولات</a>
                    <ul class="pt-3 list-unstyled">
                        @foreach(\App\Models\Category::all() as $cate)
                            <li class="text-muted d-flex
                                                justify-content-between
                                                py-3">
                                <a href="{{route('product_category',$cate->id)}}" class="btn">
                                    {{$cate->name_category}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!--==== filter for color==== -->
                <div class=" d-flex flex-column p-4
                                        border
                                        m-2 rounded my-4 filtercolor">
                    <a href="#" class="btn
                                            btn-secondary">فیلتر
                        رنگ</a>
                    <div class="pt-3">

                        @foreach(\App\Models\Color::all() as $color)
                            <a href="#" onclick="filterColor(event,'{{$color->id}}')"
                               class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                                <div style="background-color: {{$color->color}}" class="circled
                                                        blue"
                                     id="red"></div>
                                <p
                                   class="text-decoration-none
                                                        text-muted pt-2">{{$color->label}}</p>
                            </a>
                        @endforeach
                        <div class="circled palangi"
                             id="red"></div>
                        <div class="circled"
                             id="red"></div>
                        <div class="circled"
                             id="red"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <!--====== MENU FILTER FOR RESPONSIVE IN SMALL SIZE(منوی پنهان برای فیلترها) =====-->
                <div class=" filter-for-sm rounded
                                        position-fixed ">
                    <!-- icon for close -->
                    <div class="d-flex
                                            justify-content-end"><i
                            id="close-icon-filter-sm"
                            class="bi bi-x-lg"></i></div>
                    <!--===> فیلتر حراج <====-->
                    <!-- ===filter price ==== -->
                    <div class=" d-flex flex-column
                                            p-4
                                            border
                                            m-2 rounded my-4">
                        <a href="#" class="btn
                                                btn-secondary">فیلتر
                            قیمت</a>
                        <!--====> progressbar for
                        selected
                        price (منوی پنهان)<====-->
                        <input type="range"
                               class="form-range
                                                customRange4"
                               min="{{$products->min('price')/1000}}" max="{{\App\Models\Product::max('price')/1000}}"
                               id="customRange1"
                               onchange="func3()">
                        <div class="d-flex
                                                flex-row">

                            <p class="text-muted
                                                    pt-2">قیمت:<span
                                    class="span1">
                                                        {{$products->max('price')}}تومان-</span></p>
                        </div>
                        <p class="span1
                                                customRange5">{{$products->max('price')}}تومان</p>
                        <a href="#" class="btnFilterPrice1 btn
                                                btn-secondary
                                                w-50">فیلتر</a>
                    </div>
                    <!--===دسته بندی محصولات ====-->
                    <div class="proside border
                                            d-flex
                                            flex-column p-4 m-2 rounded
                                            my-4">
                        <a href="#" class="btn
                                                btn-secondary">دسته
                            های محصولات</a>
                        <ul class="pt-3 list-unstyled">
                            @foreach(\App\Models\Category::all() as $cate1)
                                <li class="text-muted d-flex justify-content-between py-3">
                                    <a href="{{route('product_category',$cate1)}}" class="btn">
                                        {{$cate1->name_category}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--==== filter for color==== -->
                    <div class=" d-flex flex-column
                                            p-4
                                            border
                                            m-2 rounded my-4
                                            filtercolor">
                        <a href="#" class="btn
                                                btn-secondary">فیلتر
                            رنگ</a>
                        <div class="pt-3">
                            @foreach(\App\Models\Color::all() as $color1)
                                <a href="#" class="text-decoration-none d-flex justify-content-between">
                                    <div class="circled blue" style="background-color: {{$color1->color}}" id="red" onclick="filterColor(event,'{{$color1->id}}')">

                                    </div>
                                    <p href="#" class="text-decoration-none text-muted pt-2">
                                        {{$color->label}}
                                    </p>
                                </a>
                            @endforeach
                            <div class="circled
                                                    palangi"
                                 id="red"></div>
                        </div>
                    </div>
                </div>
                <!--============> row for order list
                for
                show<========== -->
                <div class="row">
                    <div class=" col-2 d-none
                                                d-lg-block
                                                py-4">

                    </div>
                    <div class="col-lg-7 d-none
                                                d-lg-block"></div>
                    <div class="col-lg-3 ">
                        <p class="pt-2 pb-0
                                                    text-center
                                                    orederrlist d-none
                                                    d-md-block">مرتب
                            سازی بر
                            اساس آخرین</p>
                        <!-- =====================>for order list in hidden <=============================-->
                        <div
                            class="menu-for-orderlist
                                                    d-flex
                                                    justify-content-center
                                                    align-content-center">
                            <div
                                class="orderhidde">
                                <i
                                    id="close-icon-listhidden"
                                    class="bi
                                                            bi-x-lg "></i></div>
                            <ul class="unolist">
                                <li
                                    class="list-unstyled
                                                            py-2 expensive"><a href="#"
                                        class="text-decoration-none
                                                                text-muted">مرتب
                                        سازی بر
                                        اساس
                                        گرانترین</a></li>
                                <li
                                    class="list-unstyled inexpensive
                                                            py-2"><a
                                        href="#"
                                        class="text-decoration-none
                                                                text-muted">مرتب
                                        سازی بر
                                        اساس
                                        ارزانترین</a></li>
                                <li
                                    class="list-unstyled new
                                                            py-2"><a
                                        href="#"
                                        class="text-decoration-none
                                                                text-muted">مرتب
                                        سازی بر
                                        اساس
                                        جدیدترین</a></li>

                            </ul>
                        </div>


                        <div class="underline
                                                    w-100
                                                    bg-danger d-none
                                                    d-md-block"
                             style="height:4px
                                                    ;"></div>
                    </div>
                </div>
                <div class="row main2">


                </div>
                <!-- ==================================>card in row1 <======================================-->
                <div class="row main1">
                    <!--=== card1 ====>row1 ===-->
                    @foreach($products as $product)
                        <div class="col-6 col-lg-3 py-4">
                            <div class="card cd1r1 shadow">
                                <!-- img in card1 -->
                                <a href="{{route('single_product',$product->id)}}">
                                    <img
                                        class="card-img-top
                                                        img-fluid
                                                        cdimgtop rounded-top"
                                        src="{{!$product->images()->count()==0?url($product->images->image):''}}"
                                        alt="Card image
                                                        cap">
                                </a>
                                <div
                                    class="card-body
                                                        cbody
                                                        ">
                                    <div
                                        class="d-flex
                                                            justify-content-end
                                                            mb-2"><a
                                            href="#"
                                            class="badge
                                                                text-bg-success
                                                                mt-0
                                                                text-decoration-none">ویژه</a></div>
                                    <h5
                                        class="card-title
                                                            text-muted
                                                            text-center">{{$product->title}}</h5>
                                    <p
                                        class="card-text
                                                            span1
                                                            text-danger
                                                            text-center
                                                            pt-2">{{$product->price}}تومان</p>
                                    <!--==== div with non style for hover ====-->
                                    <div class="nonestyle">
                                        @foreach($product->attributes as $att)
                                            <p class="card-text">
                                                {{$att->name}} : {{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}
                                            </p>
                                        @endforeach
                                        <p class="card-text">

                                        </p>
                                        <div
                                            class="d-flex
                                                                ">
                                            <div
                                                class="flex-grow-1"><i
                                                    class="ps-5
                                                                        bi
                                                                        bi-heart
                                                                        icononimg
                                                                        iconlike{{$loop->index}}"
                                                    onclick="addToInterest(event,'{{$product->id}}','{{$loop->index}}')"></i>
                                                <i style="display: none" class="bi bi-check2 iconselect{{$loop->index}}"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="{{route('single_product',$product->id)}}">
                                                    <i class="ps-5 bi bi-cart3 icononimg" id="addbas6">

                                                    </i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!--=====> close card4 <=====-->
                <!--===============================================>
                close row 1
                <==================================-->

                <!--=====================> CLOSE
                CARD4
                <=========-->
                <!--===================> CLOSE
                ROW2<===============
                    -->


                <!--=====> close card4
                <=====-->
                <!--=========> CLOSE ROW3
                <=========-->
                <!--======> row for mor
                loading<==========
                    -->
                <div class="row
                                                    justify-content-center
                                                    align-content-center
                                                    py-5">
                    <div
                        id="section-for-ajax"></div>
                    <button class="btn download_more
                                                        btn-secondary
                                                        w-25 my-4 py-3"
                            id="morepro">
                        بارگیری بیشتر
                        محصولات</button>
                </div>
            </div>
        </div>
    </main>
</section>
<section class="footer">
    <footer class="container-fluid">
        <div class="row
                                            text-center">
            <div class="col-6
                                                col-lg-2 pb-2">
                <img
                    src="./img/fincol1.svg"
                    alt="img">
                <p class="text-muted">ارسال
                    به تمام کشور</p>
            </div>
            <div class="col-6
                                                col-lg-2 pb-2">
                <img
                    src="./img/fincol2.svg"
                    alt="img">
                <p class="text-muted">بهترین
                    کیفیت </p>
            </div>
            <div class="col-6
                                                col-lg-2 pb-2">
                <img
                    src="./img/fincol3.png"
                    alt="img">
            </div>
            <div class="col-6
                                                col-lg-2 pb-2">
                <img
                    src="./img/fincol.png"
                    alt="img">
            </div>
            <div class="col-6
                                                col-lg-2 pb-2">
                <img
                    src="./img/fincol4.svg"
                    alt="img">
                <p class="text-muted">پشتیبانی
                    آنلاین</p>
            </div>
            <div class="col-6
                                                col-lg-2 pb-2">
                <img
                    src="./img/fincol5.svg"
                    alt="img">
                <p class="text-muted">پرداخت
                    انلاین و ایمن</p>
            </div>

        </div>
        <div class="text-center">
            <p class="text-muted">هرگونه
                سوالی در خصوص انتخاب
                محصول و ثبت سفارش و
                تحویل
                کالا</p></div>
        <p class=" h5 fw-bolder
                                            text-center">
            تیم پشتیبانی سایت همه روزه
            به جز
            جمعه ها از ساعت 8
            تا 17 پاسخگوی درخواستهای شما
            از
            طریق سامانه پشتیبانی
            هستند.</p>
        <p class="fw-bolder h5 text-center
                                            py-3">آدرس فروشگاه:</p>
        <p class="text-muted
                                            text-center"> کرج
            خیابان مطهری ۲۰ متر بعد از
            تقاطع
            ملاصدرا نرسیده به
            فلکه اول پلاک 81 کدپستی:
            <br>
            3146987356
            ساعات کار شعبه کرج: شنبه تا
            پنج
            شنبه از ساعت 10 الی
            22:00 جمعه از ساعت 12 الی
            22:00</p>
        <br>
        <br>
        <br>
        <br>
    </footer>
</section>
<!-- open navbar in button page for mobile &tablet size -->
<div class="navformobile d-flex
                                    flex-column
                                    border position-fixed
                                    bottom-0 bg-white w-100
                                    d-lg-none ">
    <!-- جدید برای همه صفحات  -->
    <div class="row">

        <div class="col-3
                                            text-center"><a
                href="#"><img
                    src="./img/icons8-shop-32.png"
                    alt="shop"
                    style="width:25px;
                                                    height:25px"></a></div>
        <div class="col-3
                                            text-center"><a
                href="#"><img
                    src="./img/icons8-home-page-48.png"
                    alt=""
                    style="width:25px;
                                                    height:25px">
            </a></div>
        <div class="col-3
                                            text-center
                                            position-relative"><a
                href="#"><img
                    src="./img/icons8-heart-32.png"
                    alt=""
                    style="width:25px;
                                                    height:25px">
                <span
                    class="span1
                                                    position-absolute
                                                    text-white
                                                    counter1"
                    id="counter1">{{auth()->check()?\App\Models\Interest::all()->count():\App\Http\Headers\Interest\Interest::all()->count()}}</span>
            </a> </div>
        <div class="col-3
                                            text-center">
            <a href="#"> <img
                    src="./img/icons8-customer-32 (1).png"
                    alt="person"
                    style="width:25px;
                                                    height :
                                                    25px;"></a>
        </div>
    </div>
    <div
        class="row-text-navmobile
                                        row ">
        <div class="col-3
                                            text-center">
            <a
                class="text-decoration-none
                                                text-dark
                                                fw-bold text-for-mnu-mobile"
                href="{{route('show_products')}}"><p>فروشگاه</p></a>
        </div>
        <div class="col-3
                                            text-center">
            <a
                class="text-decoration-none
                                                text-dark
                                                fw-bold text-for-mnu-mobile"
                href="{{route('index')}}">
                <p>خانه</p></a>
        </div>
        <div class="col-3
                                            text-center">
            <a
                class="text-decoration-none
                                                text-dark
                                                fw-bold text-for-mnu-mobile"
                href="{{route('interests')}}"><p>علاقه
                    مندی</p></a>
        </div>
        <div class="col-3
                                            text-center">
            <a
                class="text-decoration-none for-show-login
                                                text-dark
                                                fw-bold text-for-mnu-mobile"
                href="#"><p>حساب
                    کاربری</p></a>
        </div>
    </div>
</div>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="../product-app.js"></script>
<script>

    let page={{!empty($products->currentPage())?$products->currentPage():1}};

    $('.download_more').click(function (){
        console.log('mehdi');

        if (page=={{$products->lastPage()}}){
            return document.querySelector('.download_more').remove();
        }
        page+=1;
        $.ajax({
            type:'get',
            url:'{{route('products_paginate')}}'+'?page=2',
            success:function (result){
                $('.main1').append(result);

            }
        });
        let url= new URL(window.location.href);
        url.searchParams.set('page',page);
        window.history.pushState(window.location.href,'mehdi behyar',url.href);

    });


        let empty=()=>{
        return `
            <div class="container card border-info" style="width: 70%;height: 13%;margin-top: 15%;">
                <i><p class="text-center text-danger" style="font-size: 35px; margin-top:7px; font-family: 'B Homa'">
                    متاسفانه محصول مد نظر شما وجود ندارد !!
                </p></i>

                <b><p class="text-center text-secondary" style="font-size: 20px">
                    NOT FOUND | 404
                </p></b>
            </div>
            `
    }

    let button_back=()=>{
        return `
            <div class="text-center py-2">
                <button onclick="back_page(event)" class="btn btn-danger w-50 btn-back">
                بازگشت
            </button>
            </div>
            `;
    }

    $('.Enter').keyup(function (event){
        if (event.key==='Enter'){
            document.querySelector('.btn-Enter').click();
        }
    });

    function back_page(event){
        $('.main2').children().remove();
        $('.main1').css('display','block');
    }

    $('.btn-Enter').click(function (){

        $.ajax({
            type : 'get',
            url :'{{route('search')}}',
            data:{
                search: document.querySelector('.Enter').value
            },

            success : function(result) {
                if (result.length==0){

                }else if(document.querySelector('.Enter').value.length==0){

                }
                else {
                    $('.main1').css('display','none');
                    $('.main2').children().remove();
                    $('.main2').append(result);
                }

            }
        });



    });

    function delete_error(event,index){
        document.querySelector('.remove_error-'+index).remove();
    }



    function filterColor(event,id)
    {
        event.preventDefault();
        $.ajax({
            type:'get',
            // headers:{
            //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
            // },
            data:{
                color:id
            }
            ,
            url:'{{route('show_products')}}',
            success:function (result){
                $('.main1').css('display','none');
                $('.main2').children().remove();
                if (isEmpty(result)){
                    $('.main2').append(empty());
                }
                $('.main2').append(result);

            }
        });
    }

    function isEmpty(str) {
        return (!str || str.length === 0 );
    }


        $('.btnFilterPrice1').click(function (){
            $.ajax({
                type:'get',
                // headers:{
                //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
                // },
                data:{
                    price:document.querySelector('#customRange1').value,
                }
                ,
                url:'{{route('show_products')}}',
                success:function (result){
                    $('.main1').css('display','none');
                    $('.main2').children().remove();
                    if (isEmpty(result)){
                        $('.main2').append(empty());
                    }
                    $('.main2').append(result);

                }
            });
        });



        $('.btnFilterPrice').click(function (){
            $.ajax({
                type:'get',
                // headers:{
                //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
                // },
                data:{
                    price:document.querySelector('#customRange2').value,
                }
                ,
                url:'{{route('show_products')}}',
                success:function (result){
                    $('.main1').css('display','none');
                    $('.main2').children().remove();
                    if (isEmpty(result)){
                        $('.main2').append(empty());
                    }
                    $('.main2').append(result);

                }
            });
        });





    function addToInterest(event,id,index){
        event.preventDefault();
        $.ajax({
            type : 'post',
            url :'{{route('interest.add')}}',
            data:{
                product:id
            },
            headers:{
                'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
            },
            success : function(result) {
                console.log(result);

                if (result['success']==true){

                    let like7=document.querySelector(".iconlike"+index);
                    let select7=document.querySelector('.iconselect'+index);
                    like7.style.display="none";
                    select7.style.display="block";

                    document.querySelector('.countere').innerHTML++;
                    document.querySelector('.counter1').innerHTML++;
                }
            }
        });
    }


    $('.expensive').click(function (){
        $.ajax({
            type:'get',
            // headers:{
            //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
            // },
            data:{
                sort:'expensive',
            }
            ,
            url:'{{route('show_products')}}',
            success:function (result){
                $('.main1').css('display','none');
                $('.main2').children().remove();
                if (isEmpty(result)){
                    $('.main2').append(empty());
                }
                $('.main2').append(result);

            }
        });
    });

    $('.inexpensive').click(function (){
        $.ajax({
            type:'get',
            // headers:{
            //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
            // },
            data:{
                sort:'inexpensive',
            }
            ,
            url:'{{route('show_products')}}',
            success:function (result){
                $('.main1').css('display','none');
                $('.main2').children().remove();
                if (isEmpty(result)){
                    $('.main2').append(empty());
                }
                $('.main2').append(result);

            }
        });
    });


    $('.new').click(function (){
        $.ajax({
            type:'get',
            // headers:{
            //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
            // },
            data:{
                sort:'new',
            }
            ,
            url:'{{route('show_products')}}',
            success:function (result){
                $('.main1').css('display','none');
                $('.main2').children().remove();
                if (isEmpty(result)){
                    $('.main2').append(empty());
                }
                $('.main2').append(result);

            }
        });
    });





</script>
</body>
</html>
