@component('admin.layouts.content',['title'=>'سفارش ها'])

    @slot('breadcrumb')

    @endslot

    @slot('script')

    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">سفارش </h3>

                <div class="card-tools d-flex">

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody id="table_data">

                    <tr>
                        <th>نام</th>
                        <th>زمان ایجاد</th>
                        <th>نام خانوادگی</th>
                        <th>شماره همراه</th>
                        <th>استان</th>
                        <th>شهر</th>
                        <th>آدرس</th>
                        <th>کد پستی</th>
                        <th>توضیحات</th>
                    </tr>
                    @foreach($order->informations as $info)
                        <tr>
                            <td>{{$info->firstname}}</td>
                            <td>{{jdate($order->created_at)}}</td>
                            <td>{{$info->lastname}}</td>
                            <td>{{$info->phone}}</td>
                            <td>{{$info->state}}</td>
                            <td>{{$info->city}}</td>
                            <td>{{$info->address}}</td>
                            <td>{{$info->postal_code}}</td>
                            <td>{{$info->description}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

@endcomponent
