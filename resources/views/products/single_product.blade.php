

{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta name="csrf-token" class="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <link rel="stylesheet" href="./singlepro.css">--}}
{{--    @vite('resources/css/single_product.css')--}}
{{--    <link rel="icon" type="image/x-icon" href="./img/iconfort4.webp">--}}
{{--    <link--}}
{{--        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"--}}
{{--        rel="stylesheet"--}}
{{--        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"--}}
{{--        crossorigin="anonymous">--}}
{{--    <link rel="stylesheet"--}}
{{--          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">--}}
{{--    <link rel="stylesheet"--}}
{{--          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">--}}
{{--    <link rel="stylesheet"--}}
{{--          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">--}}
{{--    <title>single product</title>--}}
{{--    <style id="mystyle">--}}

{{--    </style>--}}
{{--</head>--}}
{{--<body id="body">--}}
{{--<!--== HEADER& NAVBAR ====-->--}}
{{--<div class="bodyforclick"></div>--}}

{{--@include('products.layouts.navbar')--}}
{{--<!-- =======================================================>close header <=============================-->--}}
{{--<main>--}}
{{--    <!--====> DIRECTION <=====-->--}}
{{--    <div class="direction d-none d-lg-block p-3 container">--}}
{{--        <a href="#" class="text-muted--}}
{{--                                text-decoration-none home " id="">خانه\</a>--}}
{{--        <a href="#" class="text-muted--}}
{{--                                text-decoration-none next " id="">کیف</a>--}}
{{--    </div>--}}
{{--    <!--========> image for product <===========-->--}}
{{--    <div class="row ">--}}
{{--        <div class="col-12 col-lg-6 p-4 ">--}}
{{--            <img class="img-fluid " src="{{url($product->images->image)}}"--}}
{{--                 alt="img">--}}
{{--        </div>--}}
{{--        <!--======> مشخصات محصول <=======-->--}}
{{--        <div class=" col-lg-6 d-none d-lg-block" >--}}
{{--            <div id="navWrap">--}}
{{--                <div class=" boxes mx-5 p-5 shadow--}}
{{--                                    rounded "  id="nvc" >--}}
{{--                    <div >--}}
{{--                        <h5 class="fw-bolder pt">--}}
{{--                            {{$product->title}}--}}
{{--                        </h5>--}}
{{--                        <p><del class="span1 text-muted">{{$product->price}}</del><span--}}
{{--                                class="span1 text-danger me-4">186,000تومان</span></p>--}}
{{--                        @foreach($product->attributes as $att)--}}
{{--                            <p class="text-muted">--}}
{{--                                <img src="https://img.icons8.com/material-sharp/24/null/chevron-left.png"/>--}}
{{--                                {{$att->name}}:{{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}--}}
{{--                            </p>--}}
{{--                        @endforeach--}}
{{--                        <!-- <div class="form-check d-flex--}}
{{--                                justify-content-end"> -->--}}
{{--                        <!-- <label class="form-check-label h6--}}
{{--                            fw-bold me-4"--}}
{{--                            for="flexCheckDefault">--}}
{{--                            موجود شده را به من اطلاع بده--}}
{{--                        </label>--}}
{{--                        <input class="form-check-input"--}}
{{--                            type="checkbox" value=""--}}
{{--                            id="flexCheckDefault" onchange="disblock()">--}}
{{--                    </div> -->--}}
{{--                        <!--=======> hidden div <==========-->--}}
{{--                        >--}}
{{--                        <p class="h6 fw-bolder">انتخاب رنگ</p>--}}
{{--                        <div class="color d-flex">--}}
{{--                            @foreach($product->colors()->get()->unique('label') as $color)--}}
{{--                                <div class="circle-color-black ms-2" style="background-color: {{$color->color}}"></div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}

{{--                        <div class="mt-4">--}}
{{--                            <div class="btn-group me-2 counterr1--}}
{{--                                                " role="group" aria-label="First--}}
{{--                                                group">--}}
{{--                                <button type="button" class="btn--}}
{{--                                                    btn-outline-danger" onclick="plus(this)">+</button>--}}
{{--                                <button type="button" class="btn--}}
{{--                                                    btn-outline-danger--}}
{{--                                                    disabled" id="result">1</button>--}}
{{--                                <button type="button" class="btn--}}
{{--                                                    btn-outline-danger"onclick="minus(this)">-</button>--}}
{{--                            </div>--}}
{{--                            <button class="btn btn-danger--}}
{{--                                                rounded-0">افزودن به سبدخرید</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row " id="aaa">--}}
{{--        <div class="col-12 col-lg-6 p-4 ">--}}
{{--            <img class="img-fluid " src="{{!$product->images()->count()==0?url($product->images->image):''}}"--}}
{{--                 alt="img">--}}
{{--        </div>--}}
{{--        <!--======> مشخصات محصول <=======-->--}}
{{--        <div class=" col-lg-6 d-none d-lg-block" >--}}
{{--            <div id="navWrap">--}}
{{--                <div class=" boxes mx-5 p-5 shadow--}}
{{--                                    rounded "  id="nvc" >--}}
{{--                    <div >--}}
{{--                        <h5 class="fw-bolder pt">--}}
{{--                            {{$product->title}}--}}
{{--                        </h5>--}}
{{--                        @php--}}
{{--                            $discount=$product->discounts->sum(function ($dis){--}}
{{--                                return $dis->percent;--}}
{{--                            });--}}
{{--                        @endphp--}}
{{--                        <p><del class="span1 text-muted">{{$discount==0?'':$product->price . ' تومان'}}</del><span--}}
{{--                                class="span1 text-danger me-4">{{$discount==0?$product->price:$product->price/100*$discount-$product->price}}تومان</span></p>--}}
{{--                        @foreach($product->attributes as $att)--}}
{{--                            <p class="text-muted">--}}
{{--                                <img src="https://img.icons8.com/material-sharp/24/null/chevron-left.png"/>--}}
{{--                                {{$att->name}}:{{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}--}}
{{--                            </p>--}}
{{--                        @endforeach--}}
{{--                        <!-- <div class="form-check d-flex--}}
{{--                            justify-content-end"> -->--}}
{{--                        <!-- <label class="form-check-label h6--}}
{{--                            fw-bold me-4"--}}
{{--                            for="flexCheckDefault">--}}
{{--                            موجود شده را به من اطلاع بده--}}
{{--                        </label>--}}
{{--                        <input class="form-check-input"--}}
{{--                            type="checkbox" value=""--}}
{{--                            id="flexCheckDefault" onchange="disblock()">--}}
{{--                    </div> -->--}}
{{--                        <!--=======> hidden div <==========-->--}}
{{--                        <div class="form-check pt-4">--}}
{{--                            <div class="d-flex--}}
{{--                                                justify-content-end form-check">--}}
{{--                                <label class="form-check-label text-muted">--}}
{{--                                    سایز را انتخاب کنید.--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                                <select id="size2" name="size2" class="form-select" aria-label="Default select example">--}}
{{--                                    @foreach($product->sizes()->get()->unique('size') as $size)--}}
{{--                                        <option value="{{$size->id}}">{{$size->size}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}

{{--                        </div>--}}
{{--                        <p class="h6 fw-bolder my-3">انتخاب رنگ</p>--}}
{{--                        <div class="color d-flex">--}}
{{--                            @foreach($product->colors()->get()->unique('label') as $color)--}}
{{--                                <div id="color-{{$loop->index}}" onclick="selection(event,{{$loop->index}},'{{$color->id}}')" class="circle-color-black ms-2" style="background-color: {{$color->color}}"></div>--}}
{{--                            @endforeach--}}

{{--                        </div>--}}

{{--                        <div class="mt-4">--}}
{{--                            <button id="btnCart2" class="btn btn-danger--}}
{{--                                                rounded-0">افزودن به سبدخرید</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    <div id="stopHere" class="col-12 d-none d-lg-block "></div>--}}
{{--    <!--======>    مشخصات محصول برای ریسپانسیو <=======-->--}}
{{--    <div class="col-12 d-block d-lg-none py-4">--}}
{{--        <div class=" boxes mx-5 p-5 shadow--}}
{{--                            rounded " >--}}
{{--            <div >--}}
{{--                <h5 class="fw-bolder pt">--}}
{{--                    {{$product->title}}--}}
{{--                </h5>--}}
{{--                <p><del class="span1 text-muted">{{$product->price}}</del><span--}}
{{--                        class="span1 text-danger me-4">186,000تومان</span></p>--}}
{{--                @foreach($product->attributes as $att)--}}
{{--                    <p class="text-muted">--}}
{{--                        <img src="https://img.icons8.com/material-sharp/24/null/chevron-left.png"/>--}}
{{--                        {{$att->name}}:{{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}--}}
{{--                    </p>--}}
{{--                @endforeach--}}

{{--                <div class="form-check pt-4">--}}
{{--                    <div class="d-flex--}}
{{--                                                justify-content-end form-check">--}}
{{--                        <label class="form-check-label text-muted">--}}
{{--                            سایز را انتخاب کنید.--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                        <select id="size1" name="size1" class="form-select" aria-label="Default select example">--}}
{{--                            @foreach($product->sizes()->get()->unique('size') as $size)--}}
{{--                                <option value="{{$size->id}}">{{$size->size}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}


{{--                </div>--}}

{{--                <p class="h6 fw-bolder">انتخاب رنگ</p>--}}
{{--                <div class="color d-flex">--}}
{{--                    @foreach($product->colors()->get()->unique('label') as $color)--}}
{{--                        <div id="color-{{$loop->index}}" onclick="selection(event,'{{$loop->index}}','{{$color->id}}')" class="circle-color-black ms-2" style="background-color: {{$color->color}}"></div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}

{{--                    <button id="btnCArt1" class="btn btn-danger--}}
{{--                                        rounded-0">افزودن به سبدخرید</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!--===========> slider for Similar product--}}
{{--        <==========-->--}}
{{--    <!--============ =================================owl carousel-1================================= =======-->--}}
{{--    <div class="slider1 p-5">--}}
{{--        <div class="owl-carousel owl-theme">--}}
{{--            @foreach($product->categories()->first()->products as $product1)--}}
{{--                <div class="item itemforhover">--}}
{{--                    <a href="#"></a>--}}
{{--                    <div class="card position-relative rounded-0--}}
{{--                        shadow"--}}
{{--                         style="width:14rem ;">--}}
{{--                        <a href="{{route('single_product',$product1->id)}}" class="text-decoration-none--}}
{{--                            text-dark ddd">--}}
{{--                            <!--== img for card == -->--}}
{{--                            <img class="card-img-top rounded-0 "--}}
{{--                                 id="img-card"--}}
{{--                                 src="{{!$product1->images()->count()==0?url($product1->images->image):''}}"--}}
{{--                                 alt="Card image cap">--}}
{{--                        </a>--}}
{{--                        <div class="like1 position-absolute--}}
{{--                            d-flex--}}
{{--                            flex-column bg-white--}}
{{--                            justify-content-center "--}}
{{--                             style="width:45px ;">--}}
{{--                            <!--=== show icon when hover card ===-->--}}

{{--                            <a href="{{route('single_product',$product1->id)}}"><i class="bi bi-cart3 py-2" id="addbas1"></i></a><br>--}}

{{--                            <i class="bi bi-check2 select"></i>--}}

{{--                            <a href="#" onclick="addToInterest(event,{{$product1->id}})"><i class="bi bi-heart iconlike1 py-2"></i></a>--}}

{{--                            <a href="#"><i class="bi bi-check2 select"></i></a>--}}
{{--                        </div>--}}
{{--                        <!--===labale in imag ===-->--}}
{{--                        <span class="badge--}}
{{--                            mojoudi--}}
{{--                            p-2 rounded-0">اتمام موجودی</span>--}}
{{--                        <span class="badge text-bg-danger vijhe--}}
{{--                            p-2--}}
{{--                            rounded-0">ویژه</span>--}}
{{--                        <div class="card-body text-center p-2">--}}
{{--                            <!--== price == -->--}}
{{--                            <a href="#"--}}
{{--                               class="text-decoration-none--}}
{{--                                text-dark">--}}

{{--                                <p class="card-text">--}}
{{--                                    {{$product1->title}}--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <div class="d-flex--}}
{{--                                justify-content-center--}}
{{--                                card-text p-3">--}}

{{--                                <small class="text-danger--}}
{{--                                    span1">{{$product1->price}}--}}
{{--                                    تومان</small>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}


{{--</main>--}}
{{--@include('products.layouts.end_navbar')--}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
{{--<script--}}
{{--    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>--}}


{{--<script--}}
{{--    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>--}}

{{--<script src="../single-pro-app.js"></script>--}}

{{--<script--}}
{{--    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>--}}



{{--<script>--}}

{{--    function selection(event,id,color)--}}
{{--    {--}}
{{--        document.getElementById('mystyle').innerHTML=''--}}
{{--        let stylemehdi=({id})=>{--}}
{{--            return `--}}
{{--                #color-${id} {--}}
{{--            position: relative;--}}
{{--            display: inline-block;--}}
{{--            width: 30px;--}}
{{--            height: 30px;--}}
{{--        }--}}

{{--        #color-${id}::before {--}}
{{--            position: absolute;--}}
{{--            left: 0;--}}
{{--            top: 50%;--}}
{{--            height: 50%;--}}
{{--            width: 3px;--}}
{{--            background-color: white;--}}
{{--            content: "";--}}
{{--            transform: translateX(15px) rotate(-30deg);--}}
{{--            transform-origin: left bottom;--}}
{{--        }--}}

{{--        #color-${id}::after {--}}
{{--            position: absolute;--}}
{{--            left: 0;--}}
{{--            bottom: 0;--}}
{{--            height: 3px;--}}
{{--            width: 100%;--}}
{{--            background-color: white;--}}
{{--            content: "";--}}
{{--            transform: translateX(15px) rotate(-60deg);--}}
{{--            transform-origin: left bottom;--}}
{{--        }--}}
{{--    `;--}}
{{--        }--}}
{{--        document.getElementById('mystyle').append(stylemehdi({id}));--}}
{{--        window.value=color;--}}

{{--    }--}}
{{--    // let cardSearch=(categories)=>{--}}
{{--    //     let div=document.createElement('div');--}}
{{--    //     div.setAttribute('class','row');--}}
{{--    //     categories.map(function (item){--}}
{{--    //         // return `--}}
{{--    //         //     <a href="product_category/${item.id}" class="col-4 card">--}}
{{--    //         //         <img src="${item.image}" class="image" width="20%" height="20%">--}}
{{--    //         //     </a>--}}
{{--    //         // `;--}}
{{--    //--}}
{{--    //         let a=document.createElement('a');--}}
{{--    //         a.setAttribute('href','mehdi');--}}
{{--    //         a.setAttribute('class','col-4 card');--}}
{{--    //         let img=document.createElement('img');--}}
{{--    //         img.setAttribute('src','mehdi');--}}
{{--    //         img.setAttribute('class','image');--}}
{{--    //         img.setAttribute('width','20%');--}}
{{--    //         img.setAttribute('height','20px');--}}
{{--    //         a.append(img);--}}
{{--    //         div.append(a);--}}
{{--    //--}}
{{--    //--}}
{{--    //     })--}}
{{--    //     document.getElementById('productsSearch').append(div);--}}
{{--    //--}}
{{--    // };--}}

{{--    $('#btnSearch').click(function (){--}}
{{--        $.ajax({--}}
{{--            type:'get',--}}
{{--            // headers:{--}}
{{--            //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content--}}
{{--            // },--}}
{{--            data:{--}}
{{--                search:document.getElementById('searchInput').value--}}
{{--            }--}}
{{--            ,--}}
{{--            url:'{{route('search')}}',--}}
{{--            success:function (result){--}}
{{--                $('#aaa').children().remove();--}}
{{--                $('#aaa').append(result);--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}




{{--    let createError=({error})=>{--}}
{{--        return `--}}
{{--                <div class="alert alert-danger">--}}

{{--                </div>--}}
{{--                `--}}
{{--    }--}}



{{--    $('#btnCArt1').click(function(){--}}


{{--        $.ajax({--}}
{{--            type : 'post',--}}
{{--            url : '{{route('cart.add',$product->id)}}',--}}
{{--            data :{--}}
{{--                color:window.value,--}}
{{--                size:document.getElementById('size1').value--}}
{{--            },--}}
{{--            headers:{--}}
{{--                'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content--}}
{{--            },--}}
{{--            success : function(result) {--}}
{{--                console.log(result);--}}
{{--                for (let resultKey in result) {--}}

{{--                    if (resultKey=='success'){--}}
{{--                        document.getElementById('count_cart').innerHTML++;--}}
{{--                        window.alert('با موفقیت به سبد اضافه شد.');--}}

{{--                    }if (resultKey=='errors'){--}}

{{--                        window.alert(result[resultKey]);--}}

{{--                    }--}}




{{--                }--}}
{{--            }--}}
{{--        });--}}


{{--    });--}}

{{--    $('#btnCart2').click(function (){--}}

{{--        $.ajax({--}}
{{--            type : 'post',--}}
{{--            url : '{{route('cart.add',$product->id)}}',--}}
{{--            data :{--}}
{{--                color:window.value,--}}
{{--                size:document.getElementById('size2').value--}}
{{--            },--}}
{{--            headers:{--}}
{{--                'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content--}}
{{--            },--}}
{{--            success : function(result) {--}}
{{--                console.log(result);--}}
{{--                for (let resultKey in result) {--}}

{{--                    if (resultKey=='success'){--}}
{{--                        document.getElementById('count_cart').innerHTML++;--}}
{{--                        window.alert('با موفقیت به سبد اضافه شد.');--}}

{{--                    }if (resultKey=='errors'){--}}

{{--                        window.alert(result[resultKey]);--}}

{{--                    }--}}




{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}



{{--    function addToInterest(event,id){--}}
{{--        event.preventDefault();--}}

{{--        $.ajax({--}}
{{--            type : 'post',--}}
{{--            url :'{{route('interest.add')}}',--}}
{{--            data:{--}}
{{--                product:id--}}
{{--            },--}}
{{--            headers:{--}}
{{--                'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content--}}
{{--            },--}}
{{--            success : function(result) {--}}
{{--                console.log(result);--}}
{{--            }--}}
{{--        });--}}
{{--    }--}}


{{--</script>--}}

{{--</body>--}}
{{--</html>--}}













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" class="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main pag</title>
    <link rel="stylesheet" href="../all-main.css">
    <style class="mystyle">

    </style>
    <link rel="icon" type="image/x-icon" href="../img/iconfort4.webp">
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
<div class="container under-header">

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
                                           href="#m-dream">مجله</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="#call_me">تماس با ما </a>
                                    </li>
                                    <li css="nav-item">
                                        <a class="nav-link" href="{{route('show_products')}}">فروشگاه</a>
                                    </li>
                                    @auth()
                                        <li css="nav-item">
                                            <a class="nav-link" href="{{route('show_orders')}}">سفارش ها</a>
                                        </li>
                                    @endauth

                                </ul>
                            </div>
                        </div>
                </div>
                <div class="col-4 logo-in-top d-flex d-lg-none ">
                    <img class="logo-img" src="../img/dream-logo.png"
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
                        <img src="../img/icons8-customer-32 (1).png"
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
                                                shownumbas1 ">{{\App\Http\Headers\Cart\Cart::all()->count()}}</span>
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
                    </div>
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
                    <p class="text-dark fw-bolder mb-2 "><span
                            class="span1 text-muted mb-2">{{$total_price}}
                                            </span>هزار تومان</p>
                </div>
                <div class="ms-2 ps-3 d-flex">
                    <div class="position-relative">
                        <img src="../img/icons8-heart-32.png"
                             alt="">
                        <span class="span1 position-absolute
                                                text-white countere counter">{{auth()->check()?\App\Models\Interest::all()->count():\App\Http\Headers\Interest\Interest::all()->count()}}</span>
                    </div>
                    <a href="{{route('interests')}}" class="text-decoration-none
                                            text-dark pt-1"> <span class="fw-bolder">علاقه مندی ها</span></a>
                </div>
                <div>

                    <a href="#" class="text-decoration-none for-show-login
                                             for-show-login">
                        <img src="../img/icons8-customer-32 (1).png"
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
                     src="../img/dream-logo.png"
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
<!-- for gap in pag -->


@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="Error-for-login remove_error-{{$loop->index}}" style="width: 100%">
            <p class="fw-bolder pe-3">خطا: <span class=" fw-bolder"></span>{{$error}}</p>
            <img onclick="delete_error(event,'{{$loop->index}}')" src="../img/icons8-macos-close-24.png"class="closepro fw-bolder closeerror"style="cursor: pointer;" alt="">
        </div>
    @endforeach
@endif

<div class="container-fluid">
    <!--===== menu collapse in top page<============-->

    <div class="d-flex bgmnuhidden flex-column">
        <div class="d-flex justify-content-end">
            <i id="close-icon-top-mnu"
               class="bi bi-x-lg "></i>
        </div>
        <ul>
            <li class="list-unstyled py-3"><a href="#call_me"
                                              class="text-decoration-none text-muted
                text-end">تماس با ما </a></li>
            <li class="list-unstyled py-3"><a href="#m-dream"
                                              class="text-decoration-none text-muted
                text-end">مجله ی دیریم</a></li>
            <li class="list-unstyled py-3"><a href="{{route('show_products')}}"
                                              class="text-decoration-none text-muted
                text-end">فروشگاه</a></li>
            <li class="list-unstyled py-3"><a href="{{route('interests')}}"
                                              class="text-decoration-none text-muted
                text-end">علاقه مندی</a></li>
            @auth()
                <li class="list-unstyled py-3"><a href="{{route('show_orders')}}"
                                                  class="text-decoration-none text-muted
                text-end">سفارش ها</a></li>
            @endauth


        </ul>
    </div>

    <!--===============> gap for user <====================-->
    @auth()
        <svg xmlns="http://www.w3.org/2000/svg"
             viewBox="0 0 120 120" class="gap gap1
                                        rounded-circle text-bg-success
                                        animate__animated animate__bounce
                                        animate__delay-1s"><path
                d="M60.19,53.75a3,3,0,1,0,3.06,3A3,3,0,0,0,60.19,53.75Zm-11.37,0a3,3,0,1,0,3.06,3A3,3,0,0,0,48.81,53.75Zm45.94,4A35,35,0,1,0,52.75,92v12.76s14.55-4.25,30.53-19.28C94.68,74.74,94.75,59.41,94.75,59.41l0,0C94.74,58.87,94.75,58.3,94.75,57.72Zm-10.14.6s0,10.64-8,18.09A57.93,57.93,0,0,1,53,89.8V80.34A24.29,24.29,0,1,1,84.61,57.16c0,.4,0,.8,0,1.19ZM70.69,53.75a3,3,0,1,0,3.06,3A3,3,0,0,0,70.69,53.75Z"
                transform="translate(0.25 0.25)"></path></svg>
    @else
        <a href="{{route('login')}}">
            <svg xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 120 120" class="gap
                                        rounded-circle text-bg-success
                                        animate__animated animate__bounce
                                        animate__delay-1s"><path
                    d="M60.19,53.75a3,3,0,1,0,3.06,3A3,3,0,0,0,60.19,53.75Zm-11.37,0a3,3,0,1,0,3.06,3A3,3,0,0,0,48.81,53.75Zm45.94,4A35,35,0,1,0,52.75,92v12.76s14.55-4.25,30.53-19.28C94.68,74.74,94.75,59.41,94.75,59.41l0,0C94.74,58.87,94.75,58.3,94.75,57.72Zm-10.14.6s0,10.64-8,18.09A57.93,57.93,0,0,1,53,89.8V80.34A24.29,24.29,0,1,1,84.61,57.16c0,.4,0,.8,0,1.19ZM70.69,53.75a3,3,0,1,0,3.06,3A3,3,0,0,0,70.69,53.75Z"
                    transform="translate(0.25 0.25)"></path></svg>
        </a>
    @endauth
    @auth()

        <div class="page-gap">

            <div class="header-for-gap bg-success">
                <div class="row">
                    <div class="col-4 col-lg-3 d-flex
                                                colforavataradmin">
                        <img class="img-for-top-gap1
                                                    rounded-circle "
                             style="height: 35px; width:
                                                    35px;"
                             src="../img/profile1.png"
                             alt="">
                        <img class="img-for-top-gap2
                                                    rounded-circle "
                             style="height: 35px; width:
                                                    35px;"
                             src="../img/pofile2.jpg"
                             alt="">
                        <img class="img-for-top-gap3
                                                    rounded-circle "
                             style="height: 35px; width:
                                                    35px;"
                             src="../img/profile1.png"
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
                            src="../img/icons8-macos-close-24.png"
                            class="closegap"style="cursor: pointer;" alt="">
                    </div>
                </div>
            </div>
            @php
                $collection_mess=[];
                $messages1=auth()->user()->messages1;
                $messages2=auth()->user()->messages2;
                foreach ($messages1 as $mess1) {
                    $collection_mess[]=$mess1;
                }
                foreach ($messages2 as $mess2){
                    $collection_mess[]=$mess2;
                }
                $messages=collect($collection_mess)->sortBy('id')->values()->all();
            @endphp
            <div class="main-gap">
                @foreach($messages as $message)
                    @if($message->user_id1==auth()->user()->id)
                        <div class="message">
                            <p>
                                {{$message->text_message}}
                            </p>
                        </div>
                    @else
                        <div class="messageadmin">
                            <p>
                                {{$message->text_message}}
                            </p>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="footer-gap">
                <input type="text" class="input-for-chat
                                            rounded-3">
                <img src="../img/icons8-sent-50.png"
                     alt="send" class="send-icon">
            </div>
        </div>
    @endauth
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
                             src="../img/icons8-macos-close-24.png"
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
    <div style="width: -webkit-fill-available;" class="text-center py-4 avatar"><img src="../img/icons8-customer-32 (1).png" style="opacity: 0.2;height: 91px;" alt="img">
        <p class="fw-bolder">هنوز حساب کاربری ندارید؟ </p>
        <a href="{{route('register')}}"class="text-decoration-none text-dark">ایجاد حساب کاربری</a>
        <div class="bg-danger w-50"style="height:5px"></div>

    </div>
</div>
</div>



<div class="main2 container-fluid row">

</div>
<!--=================================================================== new section ===content page ===========================-->
<main class="container-fluid main1">
    <!--========> image for product <===========-->
    <div class="row ">
        <div class="col-12 col-lg-6 p-4 ">
            <img class="img-fluid " src="{{!$product->images()->count()==0?url($product->images->image):''}}"
                 alt="img">
        </div>
        <!--======> مشخصات محصول <=======-->
        <div class=" col-lg-6 d-none d-lg-block" >
            <div id="navWrap">
                <div class=" boxes mx-5 p-5 shadow
                                    rounded "  id="nvc" >
                    @php
                        $discount=$product->discounts->sum(function ($dis){
                            return $dis->percent;
                        });
                    @endphp
                    <div >
                        <h5 class="fw-bolder pt">
                            {{$product->title}}
                        </h5>
                        <p>
                            @if(!$discount==0)
                                <del class="span1 text-muted">{{$product->price}}تومان</del>

                            @endif
                            <span class="span1 text-danger me-4">{{$discount==0?$product->price:$product->price/100*$discount-$product->price}}تومان</span></p>
                        @foreach($product->attributes as $att)
                            <p class="text-muted">
                                <img src="https://img.icons8.com/material-sharp/24/null/chevron-left.png"/>
                                {{$att->name}}:{{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}
                            </p>
                        @endforeach
                        <!-- <div class="form-check d-flex
                            justify-content-end"> -->
                        <!-- <label class="form-check-label h6
                            fw-bold me-4"
                            for="flexCheckDefault">
                            موجود شده را به من اطلاع بده
                        </label>
                        <input class="form-check-input"
                            type="checkbox" value=""
                            id="flexCheckDefault" onchange="disblock()">
                    </div> -->
                        <!--=======> hidden div <==========-->
                        <div class="form-check pt-4">
                            <div class="d-flex
                                                justify-content-end form-check">
                                <label class="form-check-label
                                                    text-muted me-4"
                                       for="flexCheckDefault">
                                    زمانیکه محصول موجود شد از
                                    طریق پیامک اطلاع بده
                                </label>
                                <input class="form-check-input"
                                       type="checkbox" value=""
                                       id="flexCheckDefault">
                            </div>
                            <input type="text" class="w-100
                                                border rounded shadow p-2 mt-2"
                                   placeholder="شماره موبایل">
                            <a href="#" class="btn btn-danger
                                                my-3">ثبت</a>
                        </div>

                        <p class="h6 fw-bolder">انتخاب رنگ</p>
                        <div class="color d-flex">
                            @foreach($product->colors()->get()->unique('label') as $color)
                                <div style="background-color: {{$color->color}}" onclick="selection(event,'{{$loop->index}}','{{$color->id}}')" class="color-{{$loop->index}} circle-color-black ms-2">

                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4">
                            <div class="btn-group me-2 counterr1
                                                " role="group" aria-label="First
                                                group">
                                <button type="button" class="btn
                                                    btn-outline-danger" onclick="plus(this)">+</button>
                                <button type="button" class="btn
                                                    btn-outline-danger
                                                    disabled" id="result">1</button>
                                <button type="button" class="btn
                                                    btn-outline-danger"onclick="minus(this)">-</button>
                            </div>
                            <button class="btn btn-danger
                                                rounded-0">افزودن به سبدخرید</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="stopHere" class="col-12 d-none d-lg-block "></div>
    <!--======>    مشخصات محصول برای ریسپانسیو <=======-->
    <div class="col-12 d-block d-lg-none py-4">
        <div class=" boxes mx-5 p-5 shadow
                            rounded " >
            <div >
                <h5 class="fw-bolder pt">
                    {{$product->title}}
                </h5>
                <p>
                    @if(!$discount==0)
                        <del class="span1 text-muted">{{$product->price}}تومان</del>
                    @endif
                    <span class="span1 text-danger me-4">{{$discount==0?$product->price:$product->price/100*$discount-$product->price}}تومان</span></p>
                @foreach($product->attributes as $att1)
                    <p class="text-muted">
                        <img src="https://img.icons8.com/material-sharp/24/null/chevron-left.png"/>ابعاد
                        {{$att1->name}}:{{\App\Models\Attribute_Value::find($att1->pivot['attribute_value_id'])->value}}
                    </p>
                @endforeach
                <div class="form-check pt-4">
                    <div class="d-flex
                                        flex-column form-check">
                        <input class="form-check-input my-2"
                               type="checkbox" value=""
                               id="flexCheckDefault">
                        <label class="form-check-label
                                            text-muted ms-4"
                               for="flexCheckDefault">
                            زمانیکه محصول موجود شد از
                            طریق پیامک اطلاع بده
                        </label>
                    </div>
                    <input type="text" class="w-100
                                        border rounded shadow p-2 mt-2"
                           placeholder="شماره موبایل">
                    <a href="#" class="btn btn-danger
                                        my-3">ثبت</a>
                </div>
                <p class="h6 fw-bolder">انتخاب رنگ</p>
                <div class="color d-flex">
                    @foreach($product->colors()->get()->unique('label') as $color1)
                        <div style="background-color: {{$color1->color}}" onclick="selection(event,'{{$loop->index}}','{{$color1->id}}')" class="color-{{$loop->index}} circle-color-black ms-2">

                        </div>
                    @endforeach
                </div>

                <div class="mt-4">
                    <div class="btn-group me-2 counterr1
                                        " role="group" aria-label="First
                                        group">
                        <button type="button" class="btn
                                            btn-outline-danger" onclick="plus(this)">+</button>
                        <button type="button" class="btn
                                            btn-outline-danger
                                            disabled result">1</button>
                        <button type="button" class="btn
                                            btn-outline-danger"onclick="minus(this)">-</button>
                    </div>
                    <button class="btn btn-danger
                                        rounded-0 mt-3">افزودن به سبدخرید</button>
                </div>
            </div>
        </div>
    </div>


    <!--===========> slider for Similar product
        <==========-->
    <!--============ =================================owl carousel-1================================= =======-->
    <div class="slider1 p-5">
        <div class="owl-carousel owl-carousel1 owl-theme">
{{--            products example--}}


            @foreach($product->categories()->first()->products as $product1)


                @php
                    $discount=$product1->discounts->sum(function ($dis){
                        return $dis->percent;
                    });
                @endphp



                <div class="item itemforhover shadow rounded">
                <a href="{{route('single_product',$product1->id)}}"></a>
                <div class="card position-relative rounded-0
                                shadow"
                     style="width:14rem ;">
                    <a href="{{route('single_product',$product1->id)}}" class="text-decoration-none
                                    text-dark ddd">
                        <!--== img for card == -->
                        <img class="card-img-top rounded-0 "
                             id="img-card"
                             src="{{!$product1->images()->count()==0?url($product1->images->image):''}}"
                             alt="Card image cap">
                    </a>
                    <div class="like1 position-absolute
                                    d-flex
                                    flex-column bg-white
                                    justify-content-center "
                         style="width:45px ;">
                        <!--=== show icon when hover card ===-->

                        <a href="{{route('single_product',$product1->id)}}"><i class="bi bi-cart3 py-2" id="addbas1"></i></a>

                        <i class="bi bi-check2 select"></i>

                        <i class="bi bi-heart iconlike{{$loop->index}} py-2" onclick="addToInterest(event,'{{$product1->id}}','{{$loop->index}}')"></i>

                        <i class="bi bi-check2 select iconselect{{$loop->index}}"></i>
                    </div>
                    <!--===labale in imag ===-->
                    @if($product1->inventory==0)
                        <span class="badge mojoudi p-2 rounded-0">
                            اتمام موجودی
                        </span>
                    @endif
                    <span class="badge text-bg-danger vijhe
                                    p-2
                                    rounded-0">ویژه</span>
                    <div class="card-body text-center p-2">
                        <!--== price == -->
                        <a href="{{route('single_product',$product1->id)}}"
                           class="text-decoration-none
                                        text-dark">

                            <p class="card-text">
                                {{$product1->title}}
                                <span class="span1"></span>
                            </p>
                        </a>
                        <div class="d-flex
                                        justify-content-center
                                        card-text p-3">
                            @if(!$discount==0)
                                <del class="span1 text-muted">{{$product1->price}}تومان</del>

                            @endif

                            <small class="text-dangerspan1 text-danger">
                                {{$discount==0?$product1->price:$product1->price/100*$discount-$product1->price}}
                                تومان
                            </small>
                        </div>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>

    </div>


</main>


</footer>
</section>
<!-- open navbar in button page for mobile &tablet size -->
<div class="navformobile d-flex flex-column border position-fixed
                bottom-0 bg-white w-100 d-lg-none">
    <!-- جدید برای همه صفحات  -->
    <div class="row">

        <div class="col-3 text-center"><a href="#"><img src="../img/icons8-shop-32.png" alt="shop"style="width:25px; height=25px"></a></div>
        <div class="col-3 text-center"><a href="#"><img src="../img/icons8-home-page-48.png" alt=""style="width:25px; height=25px"> </a></div>
        <div class="col-3 text-center position-relative"><a href="#"><img src="../img/icons8-heart-32.png" alt=""style="width:25px; height=25px">
                <span class="span1
                                                    position-absolute
                                                    text-white counter1"id="counter1">0</span>
            </a> </div>
        <div class="col-3 text-center">
            <a href="#"> <img src="../img/icons8-customer-32 (1).png" alt="person" style="width: 25px;height: 25px;"></a>
        </div>
    </div>
    <div class="row-text-navmobile row ">
        <div class="col-3 text-center">
            <a class="text-decoration-none text-dark fw-bold" href="{{route('show_products')}}"><p>فروشگاه</p></a>
        </div>
        <div class="col-3 text-center">
            <a class="text-decoration-none text-dark fw-bold" href="{{route('index')}}"> <p>خانه</p></a>
        </div>
        <div class="col-3 text-center">
            <a class="text-decoration-none text-dark fw-bold" href="{{route('interests')}}"><p>علاقه مندی</p></a>
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
<script src="../scriptmain.js"></script>
<script>
    let button_back=()=>{
        return `
            <div class="text-center py-2">
                <button onclick="back_page(event)" class="btn btn-danger w-50 btn-back">
                بازگشت
            </button>
            </div>
            `;
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
                    $('.main2').append(button_back());
                    $('.main2').append(result);
                }

            }
        });



    });

    function back_page(event){
        $('.main2').children().remove();
        $('.main1').css('display','block');
    }

    //phone ckeck
    function check_phone(number) {
        let regex = new RegExp("^(\\+98|0)?9\\d{9}$");
        let result = regex.test(number);
        return result;
    };


    {{--$('.btn-login').click(function (){--}}

    {{--    if ($('.user_name').val().length==0){--}}
    {{--        return window.alert('وارد کردن فیلد شماره تماس الزامی است.');--}}
    {{--    }--}}
    {{--    if ($('.password').val().length==0){--}}
    {{--        return window.alert('وارد کردن فیلد پسورد الزامی است.');--}}
    {{--    }--}}

    {{--    $.ajax({--}}
    {{--        type : 'post',--}}
    {{--        url :'{{route('login')}}',--}}
    {{--        data:{--}}
    {{--            password:$('.password').val(),--}}
    {{--            username:$('.user_name').val()--}}
    {{--        },--}}
    {{--        headers:{--}}
    {{--            'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content--}}
    {{--        },--}}
    {{--        success : function(result) {--}}
    {{--            if (result['login']==true){--}}
    {{--                return console.log(result);--}}
    {{--            }--}}
    {{--            if (result['errors']){--}}
    {{--                return window.alert(result['errors']);--}}
    {{--            }--}}
    {{--        }--}}
    {{--    });--}}
    {{--});--}}

    function closepro(event,id,index){
        $.ajax({
            type : 'post',
            url : 'cart/delete/'+id,
            data :{
                _method : 'delete',
            },
            headers:{
                'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
            },
            success : function (result){
                for (let resultKey in result) {
                    if (resultKey=='errors'){
                        window.alert(result[resultKey]);
                    }else {
                        $(".forclosepro"+index).css({display:"none",});
                    }
                }

            }
        });


    }

    function delete_error(event,index){
        document.querySelector('.remove_error-'+index).remove();
    }

    $('')




    function selection(event,id,color)
    {
        document.querySelector('.mystyle').innerHTML='';
        let stylemehdi=({id})=>{
            return `
                .color-${id} {
            position: relative;
            display: inline-block;
            width: 30px;
            height: 30px;
        }

        .color-${id}::before {
            position: absolute;
            left: 0;
            top: 50%;
            height: 50%;
            width: 3px;
            background-color: white;
            content: "";
            transform: translateX(15px) rotate(-30deg);
            transform-origin: left bottom;
        }

        .color-${id}::after {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 100%;
            background-color: white;
            content: "";
            transform: translateX(15px) rotate(-60deg);
            transform-origin: left bottom;
        }
    `;
        }
        document.querySelector('.mystyle').append(stylemehdi({id}));
        window.value=color;

    }



    $('#btnCArt1').click(function(){


        $.ajax({
            type : 'post',
            url : '{{route('cart.add',$product->id)}}',
            data :{
                color:window.value,
                size:document.getElementById('size1').value
            },
            headers:{
                'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
            },
            success : function(result) {
                console.log(result);
                for (let resultKey in result) {

                    if (resultKey=='success'){
                        document.getElementById('count_cart').innerHTML++;
                        window.alert('با موفقیت به سبد اضافه شد.');

                    }if (resultKey=='errors'){

                        window.alert(result[resultKey]);

                    }




                }
            }
        });


    });

    $('#btnCart2').click(function (){

        $.ajax({
            type : 'post',
            url : '{{route('cart.add',$product->id)}}',
            data :{
                color:window.value,
                size:document.getElementById('size2').value
            },
            headers:{
                'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
            },
            success : function(result) {
                console.log(result);
                for (let resultKey in result) {

                    if (resultKey=='success'){
                        document.getElementById('count_cart').innerHTML++;
                        window.alert('با موفقیت به سبد اضافه شد.');

                    }if (resultKey=='errors'){

                        window.alert(result[resultKey]);

                    }




                }
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


</script>
</body>
</html>



