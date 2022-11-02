@component('admin.layouts.content',['title'=>'تخفیف ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">تخفیف ها</li>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">تخفیف ها</h3>

                <div class="card-tools d-flex">
                    <form>
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    @can('create_discount')
                        <div class="btn-group-sm mr-1">
                            <a href="{{route('admin.discounts.create')}}" class="btn btn-info">ایجاد تخفیف جدید</a>
                        </div>
                    @endcan
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>

                            <tr>
                                <th>ایدی</th>
                                <th>کد تخفیف</th>
                                <th>میزان تخفیف(درصد)</th>
                                <th>زمان انقضا</th>
                                <th>کاربران</th>
                                <th>محصول ها</th>
                                <th>دسته ها</th>
                                <th>اقدامات</th>
                            </tr>
                        @foreach($discounts as $discount)
                            <tr>
                                <td>{{$discount->id}}</td>
                                <td>{{$discount->code}}</td>
                                <td>{{$discount->percent}}</td>
                                <td>{{jdate($discount->expiration_time)}}</td>
                                <td>{{$discount->users->count()?$discount->users->pluck('name')->join(','):'همه کاربران'}}</td>
                                <td>{{$discount->products->count()?$discount->products->pluck('title')->join(','):'همه محصول ها'}}</td>
                                <td>{{$discount->categories->count()?$discount->categories->pluck('name_category')->join(','):'همه دسته ها'}}</td>
                                <td class="d-flex">
                                    @can('delete_discount')
                                        <form action="{{route('admin.discounts.destroy',$discount->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                        </form>
                                    @endcan
                                    @can('edit_discount')
                                        <a href="{{route('admin.discounts.edit',$discount->id)}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
                                    @endcan
                                </td>
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
