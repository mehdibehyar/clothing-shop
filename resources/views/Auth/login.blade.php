<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>ورود</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
{{--    <link href="login.css" rel="stylesheet" type="text/css" media="all" />--}}
    @vite('resources/css/auth.css')
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>
<body>
<!-- main -->
<div class="main-w3layouts wrapper">
    <h1>فرم ورود</h1>
    <div class="main-agileinfo">
        <div class="agileits-top">
            <form action="" method="post">
                @csrf
                <input class="text @error('phone_username') is_invalid @enderror" type="text" name="username" placeholder="username" required="" value="{{old('username')}}">
                @error('username')
                <span class="invalid-feedback text-white" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <input class="text" type="password" style="margin-top: 25px;" name="password" placeholder="Password" required="">
                @error('password')
                <span class="invalid-feedback text-white" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
                <input type="submit" value="ورود">
            </form>
            <p><a href="{{route('register')}}">ثبت نام!</a></p>
            <p><a href="{{route('resetPassword')}}">فراموشی پسورد</a></p>
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
