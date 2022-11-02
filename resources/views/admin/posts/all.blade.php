@component('admin.layouts.content',['title'=>'پوست ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">پوست ها</li>
    @endslot

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">پوست ها</h3>

                <div class="card-tools d-flex">
                    <form>
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    @can('create_posts')
                        <div class="btn-group-sm mr-1">
                            <a href="{{route('admin.posts.create')}}" class="btn btn-info">ایجاد پوست جدید</a>
                        </div>
                    @endcan

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>

                    <tr>
                        <th>عنوان پست</th>
                        <th>زمان ایجاد</th>
                        <th>ایجاد شده توسط</th>
                        <th>تصویر</th>
                        <th>اقدامات</th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{jdate($post->created_at)}}</td>
                            <td>{{$post->user->name}}</td>
                            <td><a href="{{url('images/'.$post->image)}}"><img src="{{url('images/'.$post->image)}}" width="10%" height="10%"></a></td>
                            <td class="d-flex">
                                @can('delete_posts')
                                    <form action="{{route('admin.posts.destroy',$post->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                    </form>
                                @endcan
                                @can('edit_posts')
                                    <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
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