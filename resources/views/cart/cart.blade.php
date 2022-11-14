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
                        <tr id="product-{{$loop->index}}">
                            <td><img src="{{$cart['product']->images['image']}}" height="10%" width="10%">{{\App\Models\Size::find($cart['size'])->size . "_" . \App\Models\Color::find($cart['color'])->label}}</td>
                            <td>{{$cart['product']->price}}</td>
                            <td><input type="number" name="number" onchange="updateQuantity(event,'{{$cart['id']}}')" value="{{$cart['quantity']}}"></td>
                            <td>20000000</td>
                            <td class="d-flex">
                                <button type="submit" onclick="destroy(event,'{{$cart['product']->id}}','{{$loop->index}}')" class="btn btn-sm btn-danger ml-1">حذف</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>
                    <button class="btn btn-success">به روز رسانی سبد</button>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@include('layouts.endSidebar')
@endcomponent
