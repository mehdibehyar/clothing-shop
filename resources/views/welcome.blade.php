<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="row container">
                @foreach(\App\Models\Product::all() as $product)
                    <div class="col-4">
                        @isset($product->images)
                                <img src="{{url($product->images->image)}}" width="50%" height="70%">
                        @endisset
                        <form action="{{route('cart.add',$product->id)}}" method="post" id="addToCart{{$product->id}}">
                            @csrf
                        </form>
                        <div class="py-2">
                            <span class="btn btn-success" onclick="document.getElementById('addToCart{{$product->id}}').submit()">اضافه کردن به سبد خرید</span>
                        </div>
                    </div>

                @endforeach
            </div>
            @foreach($errors->all() as $error)
                <div class="text-danger card">

                    {{$error}}

                </div>
            @endforeach
            <form action="{{route('test.form')}}" method="post">
                @csrf
                <input type="text" name="test">
                <input type="submit">
            </form>

            <form action="{{route('test.form1')}}" method="post">
                @csrf
                <input type="text" name="test1">
                <input type="submit">
            </form>

            <form action="{{route('test.form2')}}" method="post">
                @csrf
                <input type="text" name="test2">
                <input type="submit">
            </form>



        </div>
    </body>
</html>
