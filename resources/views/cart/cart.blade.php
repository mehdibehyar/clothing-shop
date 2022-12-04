{{--@component('layouts.content')--}}
{{--    @slot('title')--}}
{{--        Cart--}}
{{--    @endslot--}}

{{--    @slot('script')--}}

{{--    @endslot--}}
{{--    <div class="col-9">--}}
{{--        <div class="card">--}}
{{--            <!-- /.card-header -->--}}
{{--            <div class="card-body table-responsive p-0">--}}
{{--                <table class="table table-hover">--}}
{{--                    <tbody>--}}

{{--                    <tr>--}}
{{--                        <th>محصول</th>--}}
{{--                        <th>قیمت</th>--}}
{{--                        <th>تعداد</th>--}}
{{--                        <th>قیمت کل</th>--}}
{{--                        <th>اقدامات</th>--}}
{{--                    </tr>--}}
{{--                    @foreach(\App\Http\Headers\Cart\Cart::all() as $cart)--}}
{{--                        @if(!is_null($cart['product']))--}}
{{--                            <tr id="product-{{$loop->index}}">--}}
{{--                                <td><img src="{{!is_null($cart['product']->images) ?url($cart['product']->images['image']):'ghj'}}" height="10%" width="10%">{{\App\Models\Size::find($cart['size'])->size . "_" . \App\Models\Color::find($cart['color'])->label}}</td>--}}
{{--                                <td>{{$cart['product']->price}}</td>--}}
{{--                                <td><input type="number" name="number" onchange="updateQuantity(event,'{{$cart['id']}}')" value="{{$cart['quantity']}}"></td>--}}
{{--                                <td></td>--}}
{{--                                <td class="d-flex">--}}
{{--                                    <button type="submit" onclick="destroy(event,'{{$cart['id']}}','{{$loop->index}}')" class="btn btn-sm btn-danger ml-1">حذف</button>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--                <div>--}}
{{--                    <form action="{{route('cart.payment')}}" method="post" id="payment">--}}
{{--                        @csrf--}}
{{--                    </form>--}}
{{--                    <button class="btn btn-success" onclick="document.getElementById('payment').submit()">خرید</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- /.card-body -->--}}
{{--        </div>--}}
{{--        @include('sweetalert::alert')--}}
{{--        <!-- /.card -->--}}
{{--    </div>--}}
{{--@include('layouts.endSidebar')--}}
{{--@endcomponent--}}



@component('products.layouts.content')
    @slot('script')
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="../bas.js"></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>


        <script>

            function updateQuantity(event,id){
                $.ajax({
                    type : 'post',
                    url : '{{route('cart.update')}}',
                    data :{
                        _method : 'patch',
                        id : id,
                        quantity : event.target.value,
                    },
                    headers:{
                        'X-CSRF-TOKEN' : document.head.querySelector('.csrf-token').content
                    },
                    success : function (result){
                        for (let resultKey in result) {
                            if (resultKey=='errors'){
                                window.alert(result[resultKey]);
                            }
                        }
                    }
                });
            }


            function destroy(event,id,index){
                event.preventDefault();
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
                                document.getElementById('product-'+index).remove();
                                document.getElementById('product1-'+index).remove();
                            }
                        }

                    }
                });
            }

            function plus(el,id,index){
                let quentity=(el.parentElement.children[1].innerHTML)++;

                $.ajax({
                    type : 'post',
                    url : '{{route('cart.update')}}',
                    data :{
                        _method : 'patch',
                        id : id,
                        quantity : document.getElementById('result-'+index).innerHTML,
                    },
                    headers:{
                        'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
                    },
                    success : function (result){
                        for (let resultKey in result) {
                            if (resultKey=='errors'){
                                window.alert(result[resultKey]);
                            }
                        }
                        console.log(result);
                    }
                });


            }
            function plus1(el,id,index){
                let quentity=(el.parentElement.children[1].innerHTML)++;

                $.ajax({
                    type : 'post',
                    url : '{{route('cart.update')}}',
                    data :{
                        _method : 'patch',
                        id : id,
                        quantity : document.getElementById('result1-'+index).innerHTML,
                    },
                    headers:{
                        'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
                    },
                    success : function (result){
                        for (let resultKey in result) {
                            if (resultKey=='errors'){
                                window.alert(result[resultKey]);
                            }
                        }
                        console.log(result);
                    }
                });


            }



            function minus(el,id,index){
                const resultpro=el.parentElement.children[1];
                if(resultpro.innerHTML>1)
                    (resultpro.innerHTML)--;

                $.ajax({
                    type : 'post',
                    url : '{{route('cart.update')}}',
                    data :{
                        _method : 'patch',
                        id : id,
                        quantity : document.getElementById('result-'+index).innerHTML,
                    },
                    headers:{
                        'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
                    },
                    success : function (result){
                        for (let resultKey in result) {
                            if (resultKey=='errors'){
                                window.alert(result[resultKey]);
                            }
                        }
                        console.log(result);
                    }
                });

            }
            function minus1(el,id,index){
                const resultpro=el.parentElement.children[1];
                if(resultpro.innerHTML>1)
                    (resultpro.innerHTML)--;

                $.ajax({
                    type : 'post',
                    url : '{{route('cart.update')}}',
                    data :{
                        _method : 'patch',
                        id : id,
                        quantity : document.getElementById('result1-'+index).innerHTML,
                    },
                    headers:{
                        'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
                    },
                    success : function (result){
                        for (let resultKey in result) {
                            if (resultKey=='errors'){
                                window.alert(result[resultKey]);
                            }
                        }
                        console.log(result);
                    }
                });
            }


            function update_the_basket(event)
            {
                event.preventDefault();

                $.ajax({
                    type : 'post',
                    url : '{{route('update.the.basket')}}',
                    headers:{
                        'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
                    },
                    success : function (result){
                        for (let resultKey in result) {
                            if (resultKey=='errors'){
                                window.alert(result[resultKey]);
                            }
                        }
                        document.getElementById('sum_price').innerHTML=result + ' تومان';
                        document.getElementById('sum_price1').innerHTML=result + ' تومان';

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
                    url:'{{route('search')}}',
                    success:function (result){
                        $('#aaa').children().remove();
                        $('#aaa').append(result);
                    }
                });
            });

        </script>
    @endslot

    <main>

        <div class="row container-fluid" id="aaa">
            <div class="col-lg-8">
                <p class="m-4">خرید محصولات بیشتر...</p>
                <table class="table table-hover  d-none
                                    d-lg-table">

                    <thead>
                    <tr>
                        <th scope="col "></th>
                        <th scope="col ">محصول</th>
                        <th scope="col " class="text-center">قیمت</th>
                        <th scope="col" class="text-center">تعداد</th>
{{--                        <th scope="col" class="text-center"> جمع جزء</th>--}}
                    </tr>
                    </thead>

                    <tbody>
                    @foreach(\App\Http\Headers\Cart\Cart::all() as $cart)
                        <tr id="product-{{$loop->index}}">
                            <th scope="row"><a onclick="destroy(event,'{{$cart['id']}}','{{$loop->index}}')" href="#"
                                               class="text-decoration-none
                                                    text-danger"><span
                                        class="">حذف</span><img
                                        class="me-4"
                                        src="../img/icons8-remove-50.png"
                                        alt="remove"></a></th>
                            <td class="d-flex tdha ">
                                <img src="{{!is_null($cart['product']->images) ?url($cart['product']->images['image']):'ghj'}}"
                                     class="img-pro" alt="img">
                                <p class="pe-4">{{$cart['product']->title}}</p>

                            </td>
                            <td class=" text-center">
                                @php
                                    $discount=$cart['product']->discounts->sum(function ($dis){
                                        return $dis->percent;
                                    });
                                @endphp
                                <p class="span1 trh">{{$discount==0?$cart['product']->price:$cart['product']->price/100*$discount-$cart['product']->price}}تومان
                                    تومان</p>
                            </td>
                            <td class=" text-center">
                                <div class="btn-group me-2 counterr1 trh" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-outline-dark"onclick="plus(this,'{{$cart['id']}}','{{$loop->index}}')">
                                        +
                                    </button>
                                    <button type="button" class="btn btn-outline-dark disabled" id="result-{{$loop->index}}">
                                        {{$cart['quantity']}}
                                    </button>
                                    <button type="button" class="btn btn-outline-dark" onclick="minus(this,'{{$cart['id']}}','{{$loop->index}}')">
                                        -
                                    </button>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    <!-- محصول اول -->



                    </tbody>
                </table>

                <!-- حالت ریسپانسیو جدول -->
                <table class=" col-12 d-flex d-lg-none
                                    justify-content-center py-3 ">
                    <tbody>
                    <!-- محصول اول در حالت ریسپانسیو -->
                    @foreach(\App\Http\Headers\Cart\Cart::all() as $cart)
                        <tr class="border rounded-4 my-2" id="product1-{{$loop->index}}">
                            <th scope="row" class="d-flex py-1"><a onclick="destroy(event,'{{$cart['id']}}','{{$loop->index}}')"
                                                                   href="#"
                                                                   class="text-decoration-none
                                                    text-danger"><span
                                        class="p-0 m-0 ">حذف</span><img
                                        class="me-4"
                                        src="../img/icons8-remove-50.png"
                                        alt="remove"></a></th>
                            <td class="d-flex tdha py-0">
                                <img src="{{!is_null($cart['product']->images) ?url($cart['product']->images['image']):'ghj'}}"
                                     class="img-pro" alt="img">
                                <p class="pe-4">{{$cart['product']->title}}</p>

                            </td>
                            <td class=" text-center d-flex
                                                py-0">
                                @php
                                    $discount=$cart['product']->discounts->sum(function ($dis){
                                        return $dis->percent;
                                    });
                                @endphp
                                <p class="span1 trh">{{$discount==0?$cart['product']->price:$cart['product']->price/100*$discount-$cart['product']->price}}تومان
                                    تومان</p>
                            </td>
                            <td class=" text-center d-flex
                                                py-0">
                                <div class="btn-group me-2
                                                    counterr1 trh
                                                    " role="group"
                                     aria-label="First
                                                    group">
                                    <button type="button"
                                            class="btn
                                                        btn-outline-dark"
                                            onclick="plus1(this,'{{$cart['id']}}','{{$loop->index}}')">+</button>
                                    <button type="button"
                                            class="btn
                                                        btn-outline-dark
                                                        disabled" id="result1-{{$loop->index}}">{{$cart['quantity']}}</button>
                                    <button type="button"
                                            class="btn
                                                        btn-outline-dark"
                                            onclick="minus1(this,'{{$cart['id']}}','{{$loop->index}}')">-</button>
                                </div>
                            </td>

                        </tr>
                    @endforeach


                    </tbody>
                </table>

                <!-- تخفیف -->
                <div class="d-flex justify-content-lg-between flex-column flex-lg-row
                                    pe-4">

                    <div class="col-lg-6 align-content-lg-end d-flex d-lg-flex">
{{--                        <form action="" method="post">--}}
{{--                            <input type="text" placeholder="کد  تخفیف داری؟"--}}
{{--                               class="rounded mx-2 ">--}}

{{--                            @csrf--}}
{{--                            <button class="btn btn-danger ps-3 mx-2">اعمال--}}
{{--                                کد--}}
{{--                                تخفیف</button>--}}
{{--                        </form>--}}
                    </div>
                    <div class=" col-lg-6 d-flex justify-content-center justify-content-lg-end text-lg-end py-2">
                        <a class="btn btn-secondary" onclick="update_the_basket(event)" id="update_the_basket">بروزرسانی
                            سبدخرید</a>

                    </div>

                </div>





            </div>


            <div class="col-12 col-lg-4">
                <div class="borderrr rounded m-4">
                    <p class="p-3 h5 fw-bolder text-center "> جمع کل سبد خرید</p>
                    <div class="d-flex justify-content-between border-bottom py-2 m-4">
                        <p class="h6 fw-bold">جمع جزء</p>
                        @php
                            $arr=[];
                            foreach (Cart::all() as $cart){
                                $arr[]=$cart['product']->discounts->sum(function ($des)use($cart){
                                    $p=$cart['product']->price/100*$des->percent;
                                    $p1=$cart['product']->price-$p;
                                    return $p1*$cart['quantity'];
                                })>0?$cart['product']->discounts->sum(function ($des)use($cart){
                                    $p=$cart['product']->price/100*$des->percent;
                                    $p1=$cart['product']->price-$p;
                                    return $p1*$cart['quantity'];
                                }):$cart['price']*$cart['quantity'];
                            }
                            $price=collect($arr)->sum(function ($item){
                                return $item;
                            });
                        @endphp
                        <p class="span1" id="sum_price">{{$price}} تومان</p>
                    </div>

                    <div class="d-flex justify-content-between border-bottom py-2 m-4">
                        <p class="h5 fw-bold">مجموع</p>
                        <p class="span1 text-danger" id="sum_price1">{{$price}} تومان</p>
                    </div>

                    <div>
                    <form method="get" action="{{route('create_information')}}" id="payment">
                        <button class="btn btn-danger rounded-0 buttt m-4">ادامه جهت تسویه حساب</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
    </main>
@endcomponent
