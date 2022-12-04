@component('products.layouts.content')
    @slot('script')
    @endslot
    <main class="container-fluid px-3">

        <p class="h4 fw-bold text-center py-4 container-fluid text-bg-danger">خریدهاوسفارشات</p>
        <div class="row ">
            <!--اولین مورد -->
            @foreach($orders as $order)
                <div class="col-12 col-lg-3 p-0 m-0">
                    <div class="card cd1r1 ">
                        <div class="card-body cbody
                                        ">
                            <p class="card-text
                                            span1
                                            text-danger
                                            text-center
                                            pt-2">{{$order->price}}تومان</p>
                            <div class="nonestyle ">

                                <p class="h4 fw-bolder
                                                 text-center py-3 ">وضعیت:</p>
                                <p id="status" class="{{$order->status=='paid'?'text-success':'text-danger'}}
                                                h5
                                                text-center fw-bolder">{{$order->status}}<p>
                            </div>
                            <div class="d-flex
                                                    justify-content-between">
                                <p class="h5 fw-bolder
                                                        text-danger"> تاریخ
                                    خریدنهایی:</p>
                                <p class="text-dark
                                                        text-center fw-bold
                                                        span1 ps-4">{{jdate($order->created_at)}}</p>
                            </div>
                            <div class="d-flex
                                                    justify-content-between">
                                <p class="h5 fw-bolder
                                                        text-danger">شماره
                                    پیگیری:</p>
                                <p class="text-dark
                                                        text-center fw-bold
                                                        span1 ps-4">{{$order->tracking_code}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </main>
@endcomponent
