@component('admin.layouts.content',['title'=>'بخش ایجاد تبلیغ'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.advertises.index')}}">تبلیغ ها</a></li>
        <li class="breadcrumb-item active">ایجاد تبلیغ جدید</li>
    @endslot

    @slot('script')
        <script>

            $('#products').select2({
                'placeholder' : 'دسته بندی مورد نظر را انتخاب کنید'
            })

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
                    <h3 class="card-title">فرم ایجاد پست</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @include('admin.layouts.error')
                <form class="form-horizontal" method="post" action="{{route('admin.advertises.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان تبلیغ</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="{{old('title')}}" id="inputEmail3" placeholder="عنوان تبلیغ را وارد کنید">
                            </div>

                        </div>
                        <label>انتخاب تصویر</label>
                        <div class="input-group">
                            <input type="text" value="{{old('image')}}" id="image_label" class="form-control" name="image"
                                   aria-label="Image" aria-describedby="button-image">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">محصول ها</label>
                            <select class="form-control" name="products[]" id="products" multiple>
                                @foreach(\App\Models\Product::all() as $product)
                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                @endforeach
                            </select>
                        </div>




                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ایجاد</button>
                        <a href="{{route('admin.advertises.index')}}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>

            </div>

        </div>
    </div>

@endcomponent
