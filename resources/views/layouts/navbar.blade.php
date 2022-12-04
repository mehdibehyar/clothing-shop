
<nav>

    <div class="row topnav d-flex justify-content-between
                        align-content-center border-bottom">
        <div class="col d-none d-lg-inline-flex">
            <!-- =NAME OLINE SHOP =-->
            <div class="name-onlinshop mt-3">
                <p class="h5 fw-bolder">فروشگاه Deress Land</p>
            </div>
        </div>
        <!--= MEIU =-->
        <div class="col-lg-6 col-4 menue ">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <button class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav"
                            aria-controls="navbarNav"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse "
                         id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link"
                                   aria-current="page"
                                   href="#Magazine">مجله</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('show_products')}}">فروشگاه</a>
                            </li>
                            @auth()
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('show_orders')}}">سفارش ها</a>
                                </li>
                            @endauth

                        </ul>
                    </div>
                </div>
        </div>
        <div class="col-4 logo-in-top d-flex d-lg-none ">
            <img class="logo-img" src="./img/1414.png"
                 alt="">
        </div>
        <div class="col-4 d-flex justify-content-end mt-2">
            <div class="d-none d-lg-flex">
                <a href="#" class="mx-3 text-muted"><i
                        class="bi
                                            bi-instagram"></i></a>
                <a href="#" class="text-muted"><i class="bi
                                            bi-telegram"></i></a>
            </div>
            <div class="d-flex d-lg-none">
                <i class="bi bi-person"></i>
                <div class="position-relative mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="25" height="25"
                         fill="currentColor" class="bi bi-bag
                                            text-muted" viewBox="0 0 16 16">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5
                                                2.5V4h-5v-.5A2.5 2.5 0 0 1 8
                                                1zm3.5 3v-.5a3.5 3.5 0 1 0-7
                                                0V4H1v10a2 2 0 0 0 2 2h10a2 2 0
                                                0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0
                                                1-1 1H3a1 1 0 0 1-1-1V5z"/>
                    </svg>
                    <span class="span1 position-absolute
                                                text-white countere shownumbas1">0</span>
                </div>
            </div>
        </div>
    </div>
</nav>


<div class="row row-nav-basket border-bottom">
    <!--================================================== bascket & login & like===== -->
    <div class="col-4 d-flex d-none d-lg-flex">
        <div class="ms-2 border-start ps-3 pe-5 d-flex">
            <div class="position-relative mx-3">
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="25" height="25"
                     fill="currentColor" class="bi bi-bag
                                            text-muted" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5
                                                2.5V4h-5v-.5A2.5 2.5 0 0 1 8
                                                1zm3.5 3v-.5a3.5 3.5 0 1 0-7
                                                0V4H1v10a2 2 0 0 0 2 2h10a2 2 0
                                                0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0
                                                1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
                <span class="span1 position-absolute
                                                text-white countere "
                      id="shownumbas">0</span>
            </div>
            <span onclick="document.location='{{route('cart')}}'">سبدخرید</span>
        </div>
        <div class="ms-2 border-start ps-3 d-flex">
            <div class="position-relative">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25" height="25"
                    fill="currentColor" class="bi
                                                bi-heart text-muted" viewBox="0
                                                0 16 16">
                    <path d="m8
                                                    2.748-.717-.737C5.6.281
                                                    2.514.878 1.4 3.053c-.523
                                                    1.023-.641 2.5.314 4.385.92
                                                    1.815 2.834 3.989 6.286
                                                    6.357 3.452-2.368
                                                    5.365-4.542
                                                    6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                                    10.4.28 8.717 2.01L8
                                                    2.748zM8 15C-7.333 4.868
                                                    3.279-3.04 7.824
                                                    1.143c.06.055.119.112.176.171a3.12
                                                    3.12 0 0 1
                                                    .176-.17C12.72-3.042 23.333
                                                    4.867 8 15z"></path>
                </svg></i>
                <span class="span1 position-absolute
                                            text-white countere counter">0</span>
            </div>
            <span onclick="document.location='{{route('interests')}}'">علاقه مندی ها</span>
        </div>
        <div>
            <i class="bi bi-person"></i>
            <span onclick="document.location='{{route('login')}}'">ورود/ثبت نام</span>
        </div>
        <div>
            <i class="bi bi-person"></i>
            <span onclick="document.location='{{route('getOut')}}'">خروج</span>
        </div>
    </div>

    <!-- ==========product search ======-->
    <div class="col-6 d-none d-lg-flex">
        <div class="input-group inputgroup1 mb-3">
            <button type="button" class="btn btn-danger
                                        btn-outline-danger"><i class="bi
                                            bi-search
                                            text-white"></i></button>

            <input type="text" class="form-control"
                   placeholder="جستجوی محصولات"
                   aria-label="Text input with segmented
                                        dropdown
                                        button">
        </div>
    </div>
    <!-- ============logo ====-->
    <div class="col-2 d-none d-lg-flex">
        <img class="logo-img" src="./img/1414.png"
             alt="">
    </div>
</div>




<div class="row border-bottom">
    <!-- ====dropdown list ===-->
    <div class="col-2 mt-3 d-none d-lg-flex">
        <ul>
            <li class="dropdown1 "><p
                    class="textdroupdown
                                            position-relative"><i
                        class="bi bi-list "></i>دسته
                    بندی
                    کالاها</p>
                <div class="dropdowncontent1">
                    @foreach(\App\Models\Category::all() as $category)
                        <a class="drop-item text-center border py-2 text-decoration-none text-muted" href="{{route('product_category',$category->id)}}">{{$category->name_category}}</a>
                    @endforeach
                </div>
        </ul>
    </div>
    <!--===== menu in end header ====-->
    <div class="col-8 mt-3 d-none d-lg-flex mnuhed">
        <ul class=" d-flex flex-row menuul">


            <li class="me-3 menulist">
                <a href="#information_phone" class="menu-link text-muted
                                                munli">تماس با
                    ما</a>
            </li>
            <li class="me-3 menulist">
                <a href="#Magazine" class="menu-link text-muted
                                                munli">مجله
                    دیریم</a>
            </li>


        </ul>
    </div>
{{--    <div class="col-2 my-2 d-none d-lg-flex">--}}
{{--        <a href="#" class="btn btn-danger rounded-0--}}
{{--                                        px-3--}}
{{--                                        py-2 text-center">%تخفیف های روز</a>--}}
{{--    </div>--}}
</div>
