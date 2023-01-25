@component('admin.layouts.content',['title'=>'دسترسی ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">دسترسی ها</li>
    @endslot


    @slot('script')
        <script>
            let page={{!empty($permissions->currentPage())?$permissions->currentPage():1}};

            function paginate(event) {
                if (page=={{$permissions->lastPage()}}){
                    return document.getElementById('more_downloads').remove();
                }
                page+=1;
                $.ajax({
                    type: 'get',
                    url: 'permissions/pagination?page='+page,
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
                <h3 class="card-title">دسترسی ها</h3>

                <div class="card-tools d-flex">
                    <form>
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    @can('create_permission')
                        <div class="btn-group-sm mr-1">
                            <a href="{{route('admin.permissions.create')}}" class="btn btn-info">ایجاد دسترسی جدید</a>
                        </div>
                    @endcan
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody id="table_data">

                            <tr>
                                <th>نام دسترسی</th>
                                <th>توضیحات</th>
                                <th>اقدامات</th>
                            </tr>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{$permission->name}}</td>
                                <td>{{$permission->label}}</td>
                                <td class="d-flex">
                                    @can('delete_permission')
                                        <form action="{{route('admin.permissions.destroy',$permission->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                        </form>
                                    @endcan
                                    @can('edit_permission')
                                        <a href="{{route('admin.permissions.edit',$permission->id)}}" class="btn btn-sm btn-primary">ویرایش</a>
                                    @endcan
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
