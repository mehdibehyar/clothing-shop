<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>ثبت نام</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLb  ar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    {{--    <link href="login.css" rel="stylesheet" type="text/css" media="all" />--}}
    @vite('resources/css/auth.css')
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>
<body>
@include('sweetalert::alert')
<!-- main -->
<div class="main-w3layouts wrapper">
    <h1>فرم ثبت نام</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="{{route('register')}}" method="post">
                @csrf
                <input class="text @error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" required="" value="{{old('username')}}">
                @error('username')
                <span class="invalid-feedback text-white" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <input class="text @error('phone') is-invalid @enderror" type="text" style="margin-top: 25px;" name="phone" placeholder="Phone" required="" value="{{old('phone')}}">
                @error('phone')
                <span class="invalid-feedback text-white" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <input class="text @error('password') is-invalid @enderror" type="password" style="margin-top: 25px;" name="password" placeholder="Password" required="">
                @error('password')
                <span class="invalid-feedback text-white" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <input class="text w3lpass @error('confirmation_password') is-invalid @enderror" type="password" placeholder="Confirm Password" name="confirmation_password" required="">
                @error('confirmation_password')
                <span class="invalid-feedback text-white" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <input type="submit">
            </form>
            <p><a href="{{route('login')}}">وارد شوید!</a></p>
        </div>
    </div>

    <ul class="colorlib-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
@include('sweetalert::alert')
<!-- //main -->
</body>
</html>
