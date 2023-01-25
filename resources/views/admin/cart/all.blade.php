@component('admin.layouts.content',['title'=>'سفارش ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">سفارش ها</li>
    @endslot

    @slot('script')
        <script>
            let page={{!empty($orders->currentPage())?$orders->currentPage():1}};

            function paginate(event) {
                if (page=={{$orders->lastPage()}}){
                    return document.getElementById('more_downloads').remove();
                }
                page+=1;
                $.ajax({
                    type: 'get',
                    url: 'orders/pagination?page='+page,
                    success: function (result) {
                        $('#table_data').append(result);
                    }
                });
                let url= new URL(window.location.href);
                url.searchParams.set('page',page);
                window.history.pushState(window.location.href,'mehdi behyar',url.href);
            }

        </script>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">سفارش ها</h3>

                <div class="card-tools d-flex">
                    <form>
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    @can('create_post')
                        <div class="btn-group-sm mr-1">
{{--                            <a href="{{route('admin.posts.create')}}" class="btn btn-info">ایجاد پوست جدید</a>--}}

                            <a href="{{request()->fullUrlWithQuery(['status'=>'paid'])}}" class="btn btn-warning">paid</a>
                        </div>
                    @endcan

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody id="table_data">

                    <tr>
                        <th>کاربر</th>
                        <th>زمان ایجاد</th>
                        <th>قیمت</th>
                        <th>اظلاعات سفارش</th>
                        <th>کد پیگیری</th>
                        <th>وضعیت</th>
                        <th>اقدامات</th>
                    </tr>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->user->username}}</td>
                            <td>{{jdate($order->created_at)}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->response_info}}</td>
                            <td>{{$order->tracking_code}}</td>
                            <td><div class="border {{$order->status=='unpaid'?'bg-danger':'bg-success'}} {{$order->status=='unpaid'?'bg-danger':'bg-success'}}" style="text-align: center">{{$order->status}}</div></td>
                            <td class="d-flex">
                                @can('delete_order')
                                    <form action="{{route('admin.orders.destroy',$order->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                    </form>
                                @endcan
                                <a href="{{route('admin.single_order',$order->id)}}" class="btn btn-sm btn-primary ml-1">اطلاعات سفارش</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div style="text-align: center" id="more_downloads">
                    <button class="btn btn-warning" onclick="paginate(event)">بارگیری بیشتر</button>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

@endcomponent
