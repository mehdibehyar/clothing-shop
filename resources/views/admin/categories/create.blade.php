@component('admin.layouts.content',['title'=>'بخش اجازه دسترسی'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">دسته بندی ها</a></li>
        <li class="breadcrumb-item active">ایجاد دسته بندی جدید</li>
    @endslot

    @slot('script')
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                document.getElementById('button-image').addEventListener('click', (event) => {
                    event.preventDefault();

                    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
                });
            });

            // set file link
            function fmSetLink($url) {
                document.getElementById('image_label').value = $url;
            }
        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد دسته بندی</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                    @include('admin.layouts.error')
                <form class="form-horizontal" method="post" action="{{route('admin.categories.store')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان دسته بندی</label>
                            <div class="col-sm-10">
                                <input type="text" name="name_category" class="form-control" value="{{old('name')}}" id="inputEmail3" placeholder="عنوان دسته بندی را وارد کنید">
                            </div>
                            <label class="col-sm-2 control-label">تصویر</label>
                            <div class="input-group">
                                <input type="text" id="image_label" class="form-control" name="image"
                                       aria-label="Image" aria-describedby="button-image">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                                </div>
                            </div>
                            @if(request('parent'))
                                <label for="inputEmail3" class="col-sm-2 control-label">دسته بندی پدر</label>
                                <div class="col-sm-10">
                                    @php
                                        $parent=\App\Models\Category::find(request('parent'));
                                    @endphp
                                    <input type="text" disabled class="form-control" value="{{$parent->name_category}}" id="inputEmail3" placeholder="عنوان دسته بندی را وارد کنید">
                                    <input type="hidden" name="parent" value="{{$parent->id}}">
                                </div>
                            @endif
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ایجاد</button>
                        <a href="{{route('admin.categories.index')}}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>

            </div>

        </div>
    </div>

@endcomponent
