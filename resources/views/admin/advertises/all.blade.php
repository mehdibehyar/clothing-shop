@component('admin.layouts.content',['title'=>'تبلیغ ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">تبلیغ ها</li>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">تبلیغ ها</h3>

                <div class="card-tools d-flex">
                    <form>
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    @can('create_advertise')
                        <div class="btn-group-sm mr-1">
                            <a href="{{route('admin.advertises.create')}}" class="btn btn-info">ایجاد پوست جدید</a>
                        </div>
                    @endcan

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>

                    <tr>
                        <th>عنوان تبلیغ</th>
                        <th>زمان ایجاد</th>
                        <th>ایجاد شده توسط</th>
                        <th>تصویر</th>
                    </tr>
                    @foreach($advertises as $advertise)
                        <tr>
                            <td>{{$advertise->title}}</td>
                            <td>{{jdate($advertise->created_at)}}</td>
                            <td>{{$advertise->user->name}}</td>
                            <td><a href="{{url($advertise->image)}}"><img src="{{url($advertise->image)}}" width="10%" height="10%"></a></td>
                            <td class="d-flex">
                                @can('delete_advertise')
                                    <form action="{{route('admin.advertises.destroy',$advertise->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                    </form>
                                @endcan
                                @can('edit_advertise')
                                    <a href="{{route('admin.advertises.edit',$advertise->id)}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
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
