@component('admin.layouts.content',['title'=>'کاربران'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">کاربران</li>
    @endslot

    @slot('script')
        <script>
            let page={{!empty($users->currentPage())?$users->currentPage():1}};

            function paginate(event) {
                if (page=={{$users->lastPage()}}){
                    return document.getElementById('more_downloads').remove();
                }
                page+=1;
                $.ajax({
                    type: 'get',
                    url: 'users/pagination?page='+page,
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
                <h3 class="card-title">کاربران</h3>

                <div class="card-tools d-flex">
                    <form>
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="btn-group-sm mr-1">
                        @can('create_user')
                            <a href="{{route('admin.users.create')}}" class="btn btn-info">ایجاد کاربر جدید</a>
                        @endcan
                        @can('show_staff_users')
                            <a href="{{request()->fullUrlWithQuery(['admin'=>1])}}" class="btn btn-warning">کاربران مدیر</a>
                        @endcan
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody id="table_data">

                            <tr>
                                <th>ایدی کاربر</th>
                                <th>نام کاربر</th>
                                <th>ایمیل کاربر</th>
                                <th>وضعیت ایمیل</th>
                                <th>اقدامات</th>
                            </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    {!!$user->email_verified_at?"<span class='bg-success rounded'>فعال</span>":"<span class='bg-danger rounded'>غیرفعال</span>"!!}
                                </td>
                                <td class="d-flex">
                                    @can('delete_user')
                                        <form action="{{route('admin.users.destroy',$user->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                        </form>
                                    @endcan
                                    @can('edit_user')
                                            <a href="{{route('admin.users.edit',['user'=>$user->id])}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
                                    @endcan
                                    @if($user->IsStaffUser())
                                        @can('show_staff_access')
                                                <a href="{{route('admin.users.permissions.create',$user->id)}}" class="btn btn-sm btn-warning">دسترسی ها</a>
                                        @endcan
                                    @endif
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
