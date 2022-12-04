@component('products.layouts.content')
    @slot('script')
        <script src="../data.js"></script>
    @endslot

    <main class="container-fluid px-3">

        <p class="h4 fw-bold text-center py-4 container-fluid
                            text-bg-danger mt-5 rounded-3">لطفا اطلاعات خواسته شده را وارد
            کنید<img src="./img/icons8-folded-hands-emoji-48.png" alt=""></p>
        @include('admin.layouts.error')
        <form action="{{route('cart.payment')}}" method="post">
            @csrf
            <div class="row p-4">
                <div class="col-6 col-lg-4">
                    <label for="validationCustom01"
                           class="form-label fw-bolder h5">نام *</label>
                    <input type="text" name="firstname" class="form-control py-4"
                           id="validationCustom01" placeholder="نام خود را واردکنید">

                </div>
                <div class="col-6 col-lg-4">
                    <label for="validationCustom01"
                           class="form-label fw-bolder h5">نام خانوادگی
                        *</label>
                    <input type="text" name="lastname" class="form-control py-4"
                           id="validationCustom01" placeholder="نام خانوادگی خود...">

                </div>
                <div class="col-6 col-lg-4">

                </div>

            </div>
            <div class="row p-4">
                <div class="col-12 col-lg-4">
                    <label for="validationCustom01"
                           class="form-label fw-bolder h5">شماره موبایل
                        *</label>
                    <input type="tel" name="phone" class="form-control py-4"
                           id="validationCustom01" placeholder="شماره موبایل خود را واردکنید">

                </div>
                <div class="col-12 col-lg-4">
                    <label for="validationCustom01"
                           class="form-label fw-bolder h5">کدپستی
                        *</label>
                    <input type="text" name="postal_code" class="form-control py-4"
                           id="validationCustom01" placeholder="شماره
                                موبایل خود را واردکنید">
                </div>
                <div class="col-6 col-lg-4">

                </div>
            </div>
            <div class="row justify-content-center justify-content-lg-start me-lg-4">
                <label for="iii" class="text-center text-lg-end fw-bolder h5">استان    *</label>

                <input type="text" name="state" class="form-control py-4"
                       id="validationCustom01" placeholder="
                                ">

            </div>
            <div class="row py-4 justify-content-center justify-content-lg-start me-lg-4">
                <label for="city" class="text-center text-lg-end fw-bolder h5">شهر     *</label>
{{--                <select class=" w-50 py-4 rounded-3" name="city" id="city">--}}
{{--                    <option selected> ابتدا استان را انتخاب کنید</option>--}}

{{--                </select>--}}
                <input type="text" name="city" class="form-control py-4"
                       id="validationCustom01" placeholder="">
            </div>

            <div class="row py-4 justify-content-center justify-content-lg-start me-lg-4">
                <label for="address " class="fw-bolder h5">آدرس   *</label>
                <input type="text" name="address" id="address" class="py-4 rounded-3 form-control w-75"placeholder="آدرس را وارد کنید ">
            </div>

            <div class="row py-4 justify-content-center justify-content-lg-start me-lg-4">
                <label for="address " class="fw-bolder h5">توضیحات تکمیلی</label>
                <input type="text" name="description"size='1500'class="py-4 rounded-3 form-control w-75"placeholder="اختیاری">
            </div>


            <div class="row justify-content-center py-5">
                <button type="submit" class="btn btn-danger py-4 w-25 rounded-3 shadow">ثبت اطلاعات</button>
            </div>
        </form>
    </main>
@endcomponent
