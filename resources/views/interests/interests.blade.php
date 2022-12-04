@component('products.layouts.content')
    @slot('script')
        <script>

            const checkbox=document.querySelectorAll(".check");
            const hiddendiv=document.querySelector(".hidden")
            function opacityi(){
                hiddendiv.style.opacity="1"
            }


            function delete_interest(event,id,index){
                $.ajax({
                    type:'post',
                    headers:{
                        'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
                    },
                    data:{
                      _method:'delete'
                    },
                    url:'interest/delete/'+id,
                    success:function (result){
                        document.getElementById('interest-'+index).remove()
                    }
                });
            }
            function delete_interest1(event,id,index){
                $.ajax({
                    type:'post',
                    headers:{
                        'X-CSRF-TOKEN' :document.querySelector('.csrf-token').content
                    },
                    data:{
                        _method:'delete'
                    },
                    url:'interest/delete/'+id,
                    success:function (result){
                        if (result==true){
                            document.getElementById('interest1-'+index).remove()
                        }
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
        <p class="h3 fw-bolder p-3">محصولات علاقه مندی شما</p>


        <div class="row py-5 rwforcart" id="aaa">
            <!-- اولین مورد علاقه مندی -->

            @auth()
                @foreach(auth()->user()->interests as $interest)
                    <div class="col-12 col-lg-3 p-0 m-0" id="interest-{{$loop->index}}">
                        <div class="card cd1r1 me-3">
                            <div class="d-flex justify-content-between
                                        mx-3">
                                <a href="#" onclick="delete_interest(event,'{{$interest->id}}','{{$loop->index}}')" class="text-danger p-3">حذف</a>

                            </div>

                            <!-- img in card1 -->
                            <img class="card-img-top
                                        img-fluid cdimgtop"
                                 src="{{!$interest->interestable->images()->count()==0?url($interest->interestable->images->image):''}}"
                                 alt="Card image cap">
                            <div class="card-body cbody
                                        ">
                                <h5 class="card-title
                                            text-muted
                                            text-center">{{$interest->interestable->title}}</h5>
                                @php
                                    $discount=$interest->interestable->discounts->sum(function ($dis){
                                        return $dis->percent;
                                    });
                                @endphp
                                <p class="card-text
                                            span1
                                            text-danger
                                            text-center
                                            pt-2">{{$discount==0?$interest->interestable->price:$interest->interestable->price/100*$discount-$interest->interestable->price}}تومان</p>
                                <del class="text-muted span1">{{$discount==0?'':$interest->interestable->price . ' تومان'}}</del>
                                <!--==== div with non style for hover ====-->
                                <div class="nonestyle ">
                                    @foreach($interest->interestable->attributes as $att)
                                        <p class="card-text">
                                            {{$att->name}} : {{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}
                                        </p>
                                    @endforeach
                                    <div class="d-flex
                                                ">
                                        <div class="flex-grow-1">
                                            <a href="{{route('single_product',$interest->interestable->id)}}"><img src="./img/icons8-fast-cart-64.png" class="pointer" alt="shop"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endauth

            @guest()
                @foreach(\App\Http\Headers\Interest\Interest::all() as $interest)
                    <div class="col-12 col-lg-3 p-0 m-0" id="interest1-{{$loop->index}}">
                        <div class="card cd1r1 me-3">
                            <div class="d-flex justify-content-between
                                        mx-3">
                                <a href="#" onclick="delete_interest1(event,'{{$interest['id']}}','{{$loop->index}}')" class="text-danger p-3">حذف</a>

                            </div>

                            <!-- img in card1 -->
                            <img class="card-img-top
                                        img-fluid cdimgtop"
                                 src="{{!$interest['product']->images()->count()==0?url($interest['product']->images->image):''}}"
                                 alt="Card image cap">
                            <div class="card-body cbody
                                        ">
                                <h5 class="card-title
                                            text-muted
                                            text-center">{{$interest['product']->title}}</h5>
                                @php
                                    $discount=$interest['product']->discounts->sum(function ($dis){
                                        return $dis->percent;
                                    });
                                @endphp
                                <p class="card-text
                                            span1
                                            text-danger
                                            text-center
                                            pt-2">{{$discount==0?$interest['product']->price:$interest['product']->price/100*$discount-$interest['product']->price}}تومان</p>
                                <del class="text-muted span1">{{$discount==0?'':$interest['product']->price . ' تومان'}}</del>
                                <!--==== div with non style for hover ====-->
                                <div class="nonestyle ">
                                    @foreach($interest['product']->attributes as $att)
                                        <p class="card-text">
                                            {{$att->name}} : {{\App\Models\Attribute_Value::find($att->pivot['attribute_value_id'])->value}}
                                        </p>
                                    @endforeach
                                    <div class="d-flex
                                                ">
                                        <div class="flex-grow-1">
                                            <a href="{{route('single_product',$interest['product']->id)}}"><img src="./img/icons8-fast-cart-64.png" class="pointer" alt="shop"></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endguest


        </div>
    </main>
@endcomponent
