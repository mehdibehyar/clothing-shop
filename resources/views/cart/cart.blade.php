@component('layouts.content')
    @slot('title')
        Cart
    @endslot

    @slot('script')
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
                $.ajax({
                    type : 'post',
                    url : 'cart/delete/'+id,
                    data :{
                        _method : 'delete',
                    },
                    headers:{
                        'X-CSRF-TOKEN' : document.head.querySelector('.csrf-token').content
                    },
                    success : function (result){
                        for (let resultKey in result) {
                            if (resultKey=='errors'){
                                window.alert(result[resultKey]);
                            }else {
                                document.getElementById('product-'+index).remove();
                            }
                        }

                    }
                });
            }
        </script>
    @endslot
    <div class="col-9">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>

                    <tr>
                        <th>محصول</th>
                        <th>قیمت</th>
                        <th>تعداد</th>
                        <th>قیمت کل</th>
                        <th>اقدامات</th>
                    </tr>
                    @foreach(\App\Http\Headers\Cart\Cart::all() as $cart)
                        @if(!is_null($cart['product']))
                            <tr id="product-{{$loop->index}}">
                                <td><img src="{{!is_null($cart['product']->images) ?url($cart['product']->images['image']):'ghj'}}" height="10%" width="10%">{{\App\Models\Size::find($cart['size'])->size . "_" . \App\Models\Color::find($cart['color'])->label}}</td>
                                <td>{{$cart['product']->price}}</td>
                                <td><input type="number" name="number" onchange="updateQuantity(event,'{{$cart['id']}}')" value="{{$cart['quantity']}}"></td>
                                <td></td>
                                <td class="d-flex">
                                    <button type="submit" onclick="destroy(event,'{{$cart['id']}}','{{$loop->index}}')" class="btn btn-sm btn-danger ml-1">حذف</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <div>
                    <form action="{{route('cart.payment')}}" method="post" id="payment">
                        @csrf
                    </form>
                    <button class="btn btn-success" onclick="document.getElementById('payment').submit()">خرید</button>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        @include('sweetalert::alert')
        <!-- /.card -->
    </div>
@include('layouts.endSidebar')
@endcomponent
