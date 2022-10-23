@component('admin.layouts.content',['title'=>'بخش اجازه دسترسی'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.permissions.index')}}">دسترسی ها</a></li>
        <li class="breadcrumb-item active">ایجاد دسترسی جدید</li>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد دسترسی</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @include('admin.layouts.error')
                <form class="form-horizontal" method="post" action="{{route('admin.permissions.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان دسترسی</label>

                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="inputEmail3" placeholder="عنوان دسترس را وارد کنید">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات دسترسی</label>

                            <div class="col-sm-10">
                                <input type="text" name="label" class="form-control" id="inputEmail3" value="{{old('label')}}" placeholder="توضیحات دسترسی را وارد کنید">
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ایجاد</button>
                        <a href="{{route('admin.permissions.index')}}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>

            </div>

        </div>
    </div>

@endcomponent
