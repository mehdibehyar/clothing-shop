@component('products.layouts.content')
    {{--            <div class="col-lg-2 d-none d-lg-block">--}}
    {{--                <!-- ===filter inventory ==== -->--}}
    {{--                <!-- ===filter price ==== -->--}}
    {{--                <div class=" d-flex flex-column p-4 border--}}
    {{--                                        m-2 rounded my-4">--}}
    {{--                    <a href="#" class="btn btn-secondary">فیلتر--}}
    {{--                        قیمت</a>--}}
    {{--                    <!--====> progressbar for selected price--}}
    {{--                    <====-->--}}
    {{--                    <input type="range" class="form-range customRange2" min="{{$products->min('price')/1000}}" max="{{\App\Models\Product::max('price')/1000}}" id="customRange2" onchange="func2()">--}}
    {{--                    <div class="d-flex flex-row">--}}
    {{--                        <p class="text-muted pt-2">قیمت:<span class="span1">{{$products->max('price')}}-</span></p>--}}
    {{--                    </div>--}}
    {{--                    <p class="span1 customRange3">520.000تومان</p>--}}
    {{--                    <a href="#" id="btnFilterPrice" class="btn btn-secondary w-50">فیلتر</a>--}}
    {{--                </div>--}}

    {{--                <!--==== filter for color==== -->--}}
    {{--                <div class=" d-flex flex-column p-4 border--}}
    {{--                                        m-2 rounded my-4 filtercolor">--}}
    {{--                    <a href="#" class="btn btn-secondary">فیلتر--}}
    {{--                        رنگ</a>--}}
    {{--                    <div class="pt-3">--}}
    {{--                        @foreach(\App\Models\Color::all() as $color)--}}
    {{--                            <a href="#" onclick="filterColor(event,'{{$color->id}}')" class="text-decoration-none d-flex justify-content-between">--}}
    {{--                                <div class="circled" style="background-color: {{$color->color}}" id="red"></div>--}}
    {{--                                <p class="text-muted pt-2">{{$color->label}}</p>--}}
    {{--                            </a>--}}
    {{--                        @endforeach--}}
    {{--                        <div class="circled palangi"--}}
    {{--                             id="red"></div>--}}
    {{--                        <div class="circled" id="red"></div>--}}
    {{--                        <div class="circled" id="red"></div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    <div class="col-lg-12">
        <!--====== MENU FILTER FOR RESPONSIVE IN SMALL SIZE(منوی پنهان برای فیلترها) =====-->
        <div class=" filter-for-sm rounded
                                        position-absolute ">
            <!-- icon for close -->
            <div class="d-flex justify-content-end"><i
                    id="close-icon-filter-sm"
                    class="bi bi-x-lg"></i></div>
            <!--===> فیلتر حراج <====-->
            <div class="border m-2 rounded my-4">
                <div class=" d-flex flex-column
                                                p-4">
                    <a href="#" class="btn
                                                    btn-secondary">فیلتر حراج
                        و موجودی</a>
                    <div class="d-flex flex-row">
                        <input
                            class="form-check-input
                                                        ms-3"
                            type="checkbox" value=""
                            id="flexCheckDefault"><p>فروش
                            ویژه</p>
                    </div>
                    <div class="d-flex flex-row"><input
                            class="form-check-input
                                                        ms-3"
                            type="checkbox" value=""
                            id="flexCheckChecked"
                            checked>
                        <p>موجود در انبار </p>
                    </div>
                </div>
            </div>
            <!-- ===filter price ==== -->
            <div class=" d-flex flex-column p-4
                                            border
                                            m-2 rounded my-4">
                <a href="#" class="btn
                                                btn-secondary">فیلتر
                    قیمت</a>
                <!--====> progressbar for selected
                price (منوی پنهان)<====-->
                <input type="range"
                       class="form-range customRange4"
                       min="85" max="421"
                       id="customRange1"
                       onchange="func3()">
                <div class="d-flex flex-row">

                    <p class="text-muted pt-2">قیمت:<span
                            class="span1">
                                                        128.000تومان-</span></p>
                </div>
                <p class="span1 customRange5">520.000تومان</p>
                <a href="#" class="btn btn-secondary
                                                w-50">فیلتر</a>
            </div>
            <!--===دسته بندی محصولات ====-->
            <div class="proside border d-flex
                                            flex-column p-4 m-2 rounded my-4">
                <a href="#" class="btn
                                                btn-secondary">دسته
                    های محصولات</a>
                <ul class="pt-3 list-unstyled">
                    <li class="text-muted d-flex dropdow
                                                        flex-column py-3" >
                        <div class="d-flex justify-content-between">
                            <p onclick=displayblok(this)>اکسسوری<i
                                    class="bi bi-chevron-down "></i></p>
                        </div>
                        <div class="dropdowncontent12">
                            <a href="#"
                               class="text-decoration-none
                                                                    text-muted drop-item">رزیور آلات</a>
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

                    <li class="text-muted d-flex dropdow
                                                        flex-column py-3">
                        <div class="d-flex justify-content-between">
                            <p onclick=displayblok(this)>خدمات<i
                                    class="bi bi-chevron-down "></i></p>
                        </div>
                        <div class="dropdowncontent12">
                            <a href="#"
                               class="text-decoration-none
                                                                    text-muted drop-item">خدمات رزرو</a>
                            <a href="#"
                               class="text-decoration-none
                                                                    text-muted drop-item">خدمت ارسال</a>
                        </div>
                    </li>
                    <li class="text-muted d-flex dropdow
                                                        justify-content-between py-3">دسته
                        بندی نشده<i class="bi
                                                            bi-chevron-down "></i></li>
                    <li class="text-muted d-flex dropdow
                                                            flex-column py-3">
                        <div class="d-flex justify-content-between">
                            <p onclick=displayblok(this)>شال و روسری<i
                                    class="bi bi-chevron-down "></i></p>
                        </div>
                        <div class="dropdowncontent12">
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item"> شال</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">روسری </a>
                        </div>
                    </li>
                    <li class="text-muted d-flex dropdow
                                                            flex-column py-3">
                        <div class="d-flex justify-content-between">
                            <p onclick=displayblok(this)>کفش<i
                                    class="bi bi-chevron-down "></i></p>
                        </div>
                        <div class="dropdowncontent12">
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">بوت</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">پوتین</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">صندل</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">کالج</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">کتانی</a>
                        </div>
                    </li>
                    <li class="text-muted d-flex dropdow
                                                            flex-column py-3">
                        <div class="d-flex justify-content-between">
                            <p onclick=displayblok(this)>کیف<i
                                    class="bi bi-chevron-down "></i></p>
                        </div>
                        <div class="dropdowncontent12">
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">کوله</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">کیف اسپرت</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">کیف مجلسی</a>
                        </div>
                    </li>
                    <li class="text-muted d-flex dropdow
                                                            flex-column py-3">
                        <div class="d-flex justify-content-between">
                            <p onclick=displayblok(this)>لباس<i
                                    class="bi bi-chevron-down "></i></p>
                        </div>
                        <div class="dropdowncontent12">
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">پلیور و دورس</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">پیراهن و سرهمی</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">تیشرت</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">دامن</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">ست</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">سوییشرت</a>
                            <a href="#"
                               class="text-decoration-none
                                                                        text-muted drop-item">شلوار</a>
                        </div>
                    </li>
                    <li class="text-muted d-flex
                                                        justify-content-between py-3">لباسهای
                        پاییزه<i clcd1r1ass="bi
                                                            bi-chevron-down "></i></li>
                    <li class="text-muted d-flex
                                                        justify-content-between py-3">لباسهای
                        مجلسی</li>
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
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled red "
                             id="red"></div>
                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled Fuchsia"
                             id="red"></div>
                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled Aqua"
                             id="red"></div>
                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled gray"
                             id="red"></div>
                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled orange"
                             id="red"></div>
                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled Navy"
                             id="red"></div>
                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled black"
                             id="red"></div>
                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled brown"
                             id="red"></div>
                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled yellow"
                             id="red"></div>

                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled green"
                             id="red"></div>

                        <p class="text-muted pt-2">قرمز</p>
                    </a>
                    <a href="#"
                       class="text-decoration-none
                                                    d-flex
                                                    justify-content-between">
                        <div class="circled blue"
                             id="red"></div>
                        <p href="#"
                           class="text-decoration-none
                                                        text-muted pt-2">قرمز</p>
                    </a>
                    <div class="circled palangi"
                         id="red"></div>
                </div>
            </div>
        </div>
        <!--============> row for order list for
        show<========== -->
        <div class="row">
            <div class=" col-2 d-none d-lg-block
                                                py-4">
                <a href="#" class="text-muted
                                                    text-decoration-none "
                   id="">خانه\</a>
                <a href="#" class="fw-bolder
                                                    text-dark
                                                    text-decoration-none
                                                    text-decoration-none "
                   id="">کیف</a>
            </div>
            <div class="d-lg-none py-2">
                <i id="open-filter-sm" class="bi
                                                    bi-list"></i>
            </div>
            <div class="col-lg-7 d-none
                                                d-lg-block"></div>

        </div>
        <!-- ==================================>card in row1 <======================================-->
        <div class="row" id="products">
            <!--=== card1 ====>row1 ===-->
            @foreach($products as $product)
                <div class="col-6 col-lg-3">
                    <div class="card cd1r1">
                        <!-- img in card2 -->
                        <a href="{{route('single_product',$product->id)}}">
                            <img class="card-img-top img-fluid cdimgtop" src="{{url($product->images->image)}}" alt="Card image cap">
                            <div class="card-body cbody">
                                <div class="d-flex justify-content-end mb-2">
                                    <a href="#" class="badge text-bg-success mt-0 text-decoration-none">ویژه</a>
                                </div>
                                @php
                                    $discount=$product->discounts->sum(function ($dis){
                                        return $dis->percent;
                                    });
                                @endphp
                                <h5 class="card-title text-muted text-center">{{$product->title}}</h5>
                                <p class="card-text span1 text-danger text-center pt-2">{{$discount==0?$product->price:$product->price/100*$discount-$product->price}}تومان</p>
                                <del class="text-muted span1">{{$discount==0?'':$product->price . ' تومان'}}</del>
                                <!--==== div with non style for hover ====-->
                                <div class="nonestyle ">
                                    @foreach($product->attributes as $att)
                                        <p class="card-text">{{$att->name}} : {{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}</p>
                                    @endforeach
                                    <div class="d-flex">
                                        <a href="#" onclick="addToInterest(event,'{{$product->id}}')">
                                            <div class="flex-grow-1">
                                                <i class="ps-5 bi bi-heart icononimg iconlike4"  onclick="clicktolike(this)"></i>
                                            </div>
                                        </a>
                                        <a href="{{route('single_product',$product->id)}}">
                                            <div class="flex-grow-1">
                                                <i class="ps-5 bi bi-cart3 icononimg" id="addbas6"></i>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <!--=====> close card4 <=====-->
    <!--=========> CLOSE ROW3
    <=========-->
    <!--======> row for mor loading<==========
        -->
    <div class="row
                                                    justify-content-center
                                                    align-content-center py-5">
        <button id="download_more" class="btn
                                                        btn-secondary w-25">
            محصولات بیشتر</button>
    </div>

    @slot('script')

        <script>

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

            $('#btnFilterPrice').click(function (){
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
                        $('#products').children().remove();
                        if (isEmpty(result)){
                            $('#products').append(empty());
                        }
                        $('#products').append(result);

                    }
                });
            });

            $('#btnFilterPrice1').click(function (){
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
                        $('#products').children().remove();
                        if (isEmpty(result)){
                            $('#products').append(empty());
                        }
                        $('#products').append(result);

                    }
                });
            });

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
                        $('#products').children().remove();
                        if (isEmpty(result)){
                            $('#products').append(empty());
                        }
                        $('#products').append(result);

                    }
                });
            }


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
                    url:'{{route('show_products')}}',
                    success:function (result){
                        $('#products').children().remove();
                        if (isEmpty(result)){
                            $('#products').append(empty());
                        }
                        $('#products').append(result);

                    }
                });
            });

            let page={{!empty($products->currentPage())?$products->currentPage():1}};

            $('#download_more').click(function (){

                if (page=={{$products->lastPage()}}){
                    return document.getElementById('download_more').remove();
                }
                page+=1;
                $.ajax({
                    type:'get',
                    url:'{{route('products_paginate')}}'+'?page=2',
                    success:function (result){
                        $('#products').append(result);

                    }
                });
                let url= new URL(window.location.href);
                url.searchParams.set('page',page);
                window.history.pushState(window.location.href,'mehdi behyar',url.href);

            });


            function isEmpty(str) {
                return (!str || str.length === 0 );
            }





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
                        if (result['success']==true){
                            document.getElementById('count_interest').innerHTML+1;
                        }
                    }
                });
            }


        </script>
    @endslot
@endcomponent

