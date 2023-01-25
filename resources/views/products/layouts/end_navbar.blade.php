<section class="footer">
    <footer>
        <div class="row text-center">
            <div class="col-6
                                                    col-lg-2 pb-2">
                <img src="../img/fincol1.svg"
                     alt="img">
                <p class="text-muted">ارسال
                    به تمام کشور</p>
            </div>
            <div class="col-6
                                                    col-lg-2 pb-2">
                <img src="../img/fincol2.svg"
                     alt="img">
                <p class="text-muted">بهترین
                    کیفیت </p>
            </div>
            <div class="col-6
                                                    col-lg-2 pb-2">
                <img src="../img/fincol3.png"
                     alt="img">
            </div>
            <div class="col-6
                                                    col-lg-2 pb-2">
                <img src="../img/fincol.png"
                     alt="img">
            </div>
            <div class="col-6
                                                    col-lg-2 pb-2">
                <img src="../img/fincol4.svg"
                     alt="img">
                <p class="text-muted">پشتیبانی
                    آنلاین</p>
            </div>
            <div class="col-6
                                                    col-lg-2 pb-2">
                <img src="../img/fincol5.svg"
                     alt="img">
                <p class="text-muted">پرداخت
                    انلاین و ایمن</p>
            </div>

        </div>
        <div class="text-center"></div>
        <p class=" h5 fw-bolder
                                                text-center">
            اطلاعات فروشگاه:
        </p>
        <p class="text-muted text-center
                                                py-3">آدرس فروشگاه:
            تهران پاکدشت,خاتون آباد,نبش خیابان امام رضا 48</p>


        <!-- open navbar in button page for mobile &tablet size -->
        <div class="navformobile d-flex border p-3 position-fixed
                        bottom-0 bg-white w-100 d-lg-none ">
            <div class="col-3 iconfornav ">
                <i class="bi bi-shop-window" onclick="document.location='{{route('show_products')}}'"></i>
                <p id="products_button" onclick="document.location='{{route('show_products')}}'">فروشگاه</p>
            </div>
            <div class="col-3 iconfornav">
                <i class="bi bi-house-door" onclick="document.location='{{route('index')}}'"></i>
                <p id="home_button" onclick="document.location='{{route('index')}}'">خانه</p>
            </div>
            <div class="col-3 iconfornav">
                <div onclick="document.location='{{route('interests')}}'" class="position-relative">
                    <svg onclick="document.location='{{route('interests')}}'" xmlns="http://www.w3.org/2000/svg"
                         width="25" height="25" fill="currentColor"
                         class="bi bi-heart text-muted" viewBox="0 0
                                16 16">
                        <path d="m8 2.748-.717-.737C5.6.281
                                2.514.878 1.4 3.053c-.523 1.023-.641
                                2.5.314 4.385.92 1.815 2.834 3.989 6.286
                                        6.357 3.452-2.368 5.365-4.542
                                        6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878
                                        10.4.28 8.717 2.01L8 2.748zM8 15C-7.333
                                        4.868 3.279-3.04 7.824
                                        1.143c.06.055.119.112.176.171a3.12 3.12
                                        0 0 1 .176-.17C12.72-3.042 23.333 4.867
                                        8 15z"></path>
                    </svg></i>
                    <span class="span1 position-absolute
                                text-white counter1">0</span>
                </div>
                <p id="interest_button" onclick="document.location='{{route('interests')}}'">علاقه مندی</p>
            </div>
            <div class="col-3 iconfornav">
                <i class="bi bi-person" onclick="document.location='{{route('login')}}'"></i>
                <p id="login_button" onclick="document.location='{{route('login')}}'">حساب کاربری</p>
            </div>

        </div>
    </footer>
</section>
