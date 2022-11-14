@component('layouts.content')
    @slot('title')
        Single Product
    @endslot
    @slot('script')
        <script>


            let createError=({error})=>{
                return `
                <div class="alert alert-danger">

                </div>
                `
            }


            let AddToCart = (event) => {

                $.ajax({
                    type : 'post',
                    url : '{{route('cart.add',$product->id)}}',
                    data :{
                        color:document.getElementById('color').value,
                        size:document.getElementById('size').value
                    },
                    headers:{
                        'X-CSRF-TOKEN' : document.querySelector('.csrf-token').content
                    },
                    success : function(result) {
                        for (let resultKey in result) {

                            if (resultKey=='success'){
                                let success=document.createElement('div');
                                success.setAttribute('class','alert alert-success');
                                success.innerHTML='با موفقیت به سبد اضافه شد.';
                                document.getElementById('success').append(success);

                            }if (resultKey=='errors'){
                                let error=document.createElement('div');
                                error.setAttribute('class','alert alert-danger');
                                error.innerHTML=result[resultKey];
                                document.getElementById('errors').append(error);

                            }




                        }
                    }
                });
            }



        </script>
    @endslot
    <meta name="csrf-token" class="csrf-token" content="{{ csrf_token() }}">
    <div class="card m-5">

        <div class="image" id="image1">
            <img src="{{!is_null($product->images)?url($product->images->image):''}}" class="img-bordered" width="30%" height="30%">
            <div>
                <p style="font-size: 25px;font-family: 'B Homa'">
                    {{$product->title}}
                </p>
            </div>
            <div id="success">
            </div>
            <div id="errors">

            </div>
            <div class="form-group">
{{--                <form method="post" action="{{route('cart.add',$product->id)}}">--}}
                    @csrf
                    <div>
                        <select name="color" id="color">
                            @foreach(array_unique($product->colors->pluck('label','id')->toArray()) as $id=>$color)
                                <option value="{{$id}}">{{$color}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select name="size" class="card" id="size">
                            @foreach(array_unique($product->sizes->pluck('size','id')->toArray()) as $id=>$size)
                                <option value="{{$id}}">{{$size}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-success" onclick="AddToCart(event)">افزودن به سبد خرید</button>
                    </div><br>
{{--                </form>--}}
            </div>
        </div>
        <div class="card text">
            <p style="font-family: 'B Homa';font-size: 16px">
                {{$product->description}}
            </p>
        </div>

    </div>
@endcomponent
