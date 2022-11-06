@component('admin.layouts.content',['title'=>'بخش مقام ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.roles.index')}}">مقام ها</a></li>
        <li class="breadcrumb-item active">ایجاد مقام جدید</li>
    @endslot

    @slot('script')
        <script>
            $('#permissions').select2({
                'placeholder': 'دسترسی ها را وارد کنید'
            })
            // $('').select2({})
        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد مقام</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @include('admin.layouts.error')
                <form class="form-horizontal" method="post" action="{{route('admin.roles.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان مقام</label>

                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="inputEmail3" placeholder="عنوان مقام را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات مقام</label>

                            <div class="col-sm-10">
                                <input type="text" name="label" class="form-control" id="inputEmail3" value="{{old('label')}}" placeholder="توضیحات مقام را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسترسی ها</label>
                            <select class="form-control" id="permissions" name="permissions[]" multiple>
                                @foreach(\App\Models\Permission::all() as $permission)
                                    <option value="{{$permission->id}}">{{$permission->name}} _ {{$permission->label}}</option>
                                @endforeach

                            </select>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ایجاد</button>
                        <a href="{{route('admin.roles.index')}}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>

        </div>
    </div>

@endcomponent
