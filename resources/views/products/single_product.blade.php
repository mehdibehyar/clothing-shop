

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" class="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./singlepro.css">
    @vite('resources/css/single_product.css')
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
    <title>single product</title>
    <style id="mystyle">

    </style>
</head>
<body id="body">
<!--== HEADER& NAVBAR ====-->
<div class="bodyforclick"></div>

@include('products.layouts.navbar')
<!-- =======================================================>close header <=============================-->
<main>
    <!--====> DIRECTION <=====-->
    <div class="direction d-none d-lg-block p-3 container">
        <a href="#" class="text-muted
                                text-decoration-none home " id="">خانه\</a>
        <a href="#" class="text-muted
                                text-decoration-none next " id="">کیف</a>
    </div>
    <!--========> image for product <===========-->
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
    <div class="row " id="aaa">
        <div class="col-12 col-lg-6 p-4 ">
            <img class="img-fluid " src="{{!$product->images()->count()==0?url($product->images->image):''}}"
                 alt="img">
        </div>
        <!--======> مشخصات محصول <=======-->
        <div class=" col-lg-6 d-none d-lg-block" >
            <div id="navWrap">
                <div class=" boxes mx-5 p-5 shadow
                                    rounded "  id="nvc" >
                    <div >
                        <h5 class="fw-bolder pt">
                            {{$product->title}}
                        </h5>
                        @php
                            $discount=$product->discounts->sum(function ($dis){
                                return $dis->percent;
                            });
                        @endphp
                        <p><del class="span1 text-muted">{{$discount==0?'':$product->price . ' تومان'}}</del><span
                                class="span1 text-danger me-4">{{$discount==0?$product->price:$product->price/100*$discount-$product->price}}تومان</span></p>
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
                                <label class="form-check-label text-muted">
                                    سایز را انتخاب کنید.
                                </label>
                            </div>
                                <select id="size2" name="size2" class="form-select" aria-label="Default select example">
                                    @foreach($product->sizes()->get()->unique('size') as $size)
                                        <option value="{{$size->id}}">{{$size->size}}</option>
                                    @endforeach
                                </select>

                        </div>
                        <p class="h6 fw-bolder my-3">انتخاب رنگ</p>
                        <div class="color d-flex">
                            @foreach($product->colors()->get()->unique('label') as $color)
                                <div id="color-{{$loop->index}}" onclick="selection(event,{{$loop->index}},'{{$color->id}}')" class="circle-color-black ms-2" style="background-color: {{$color->color}}"></div>
                            @endforeach

                        </div>

                        <div class="mt-4">
                            <button id="btnCart2" class="btn btn-danger
                                                rounded-0">افزودن به سبدخرید</button>
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
                <p><del class="span1 text-muted">{{$product->price}}</del><span
                        class="span1 text-danger me-4">186,000تومان</span></p>
                @foreach($product->attributes as $att)
                    <p class="text-muted">
                        <img src="https://img.icons8.com/material-sharp/24/null/chevron-left.png"/>
                        {{$att->name}}:{{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}
                    </p>
                @endforeach

                <div class="form-check pt-4">
                    <div class="d-flex
                                                justify-content-end form-check">
                        <label class="form-check-label text-muted">
                            سایز را انتخاب کنید.
                        </label>
                    </div>
                        <select id="size1" name="size1" class="form-select" aria-label="Default select example">
                            @foreach($product->sizes()->get()->unique('size') as $size)
                                <option value="{{$size->id}}">{{$size->size}}</option>
                            @endforeach
                        </select>


                </div>

                <p class="h6 fw-bolder">انتخاب رنگ</p>
                <div class="color d-flex">
                    @foreach($product->colors()->get()->unique('label') as $color)
                        <div id="color-{{$loop->index}}" onclick="selection(event,'{{$loop->index}}','{{$color->id}}')" class="circle-color-black ms-2" style="background-color: {{$color->color}}"></div>
                    @endforeach
                </div>

                <div class="mt-4">

                    <button id="btnCArt1" class="btn btn-danger
                                        rounded-0">افزودن به سبدخرید</button>
                </div>
            </div>
        </div>
    </div>

    <!--===========> slider for Similar product
        <==========-->
    <!--============ =================================owl carousel-1================================= =======-->
    <div class="slider1 p-5">
        <div class="owl-carousel owl-theme">
            @foreach($product->categories()->first()->products as $product1)
                <div class="item itemforhover">
                    <a href="#"></a>
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

                            <a href="{{route('single_product',$product1->id)}}"><i class="bi bi-cart3 py-2" id="addbas1"></i></a><br>

                            <i class="bi bi-check2 select"></i>

                            <a href="#" onclick="addToInterest(event,{{$product1->id}})"><i class="bi bi-heart iconlike1 py-2"></i></a>

                            <a href="#"><i class="bi bi-check2 select"></i></a>
                        </div>
                        <!--===labale in imag ===-->
                        <span class="badge
                            mojoudi
                            p-2 rounded-0">اتمام موجودی</span>
                        <span class="badge text-bg-danger vijhe
                            p-2
                            rounded-0">ویژه</span>
                        <div class="card-body text-center p-2">
                            <!--== price == -->
                            <a href="#"
                               class="text-decoration-none
                                text-dark">

                                <p class="card-text">
                                    {{$product1->title}}
                                </p>
                            </a>
                            <div class="d-flex
                                justify-content-center
                                card-text p-3">

                                <small class="text-danger
                                    span1">{{$product1->price}}
                                    تومان</small>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


</main>
@include('products.layouts.end_navbar')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


<script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="../single-pro-app.js"></script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>



<script>

    function selection(event,id,color)
    {
        document.getElementById('mystyle').innerHTML=''
        let stylemehdi=({id})=>{
            return `
                #color-${id} {
            position: relative;
            display: inline-block;
            width: 30px;
            height: 30px;
        }

        #color-${id}::before {
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

        #color-${id}::after {
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
        document.getElementById('mystyle').append(stylemehdi({id}));
        window.value=color;

    }
    // let cardSearch=(categories)=>{
    //     let div=document.createElement('div');
    //     div.setAttribute('class','row');
    //     categories.map(function (item){
    //         // return `
    //         //     <a href="product_category/${item.id}" class="col-4 card">
    //         //         <img src="${item.image}" class="image" width="20%" height="20%">
    //         //     </a>
    //         // `;
    //
    //         let a=document.createElement('a');
    //         a.setAttribute('href','mehdi');
    //         a.setAttribute('class','col-4 card');
    //         let img=document.createElement('img');
    //         img.setAttribute('src','mehdi');
    //         img.setAttribute('class','image');
    //         img.setAttribute('width','20%');
    //         img.setAttribute('height','20px');
    //         a.append(img);
    //         div.append(a);
    //
    //
    //     })
    //     document.getElementById('productsSearch').append(div);
    //
    // };

    $('#btnSearch').click(function (){
        $.ajax({
            type:'get',
            // headers:{
            //     'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
            // },
            data:{
                search:document.getElementById('searchInput').value
            }
            ,
            url:'{{route('search')}}',
            success:function (result){
                $('#aaa').children().remove();
                $('#aaa').append(result);
            }
        });
    });




    let createError=({error})=>{
        return `
                <div class="alert alert-danger">

                </div>
                `
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



    function addToInterest(event,id){
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
            }
        });
    }


</script>

</body>
</html>

