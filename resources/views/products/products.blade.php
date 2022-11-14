@component('layouts.content')
    @slot('title')
        products
    @endslot

    @slot('script')
        <script>

            $.ajax({
                type : 'get',
                url : 'page/1',
                success : function(result) {

                }
            });
        </script>
    @endslot

    <div class="row m-5" style="width: 50%;height: 50%">
        @foreach(\App\Models\Product::all() as $product)
            <div class="col-4 card">
                <img src="{{!is_null($product->images)?url($product->images->image):''}}" width="100%" height="50%">
                <div class="card border">
                    <p style="font-size: 20px;font-family: 'B Homa';text-align: center">
                        {{$product->title}}
                    </p>
                </div>
                <div class="card">
                    <p class="m-3" style="font-family: 'B Homa';font-size: 16px">
                        {{$product->description}}
                    </p>
                    <a href="{{route('single_product',$product->id)}}" class="btn btn-success">خرید</a>
                </div>
            </div>
        @endforeach
    </div>
@endcomponent
