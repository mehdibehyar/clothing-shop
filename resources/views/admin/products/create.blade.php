@component('admin.layouts.content' , ['title' => 'ایجاد محصول'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">لیست محصولات</a></li>
        <li class="breadcrumb-item active">ایجاد محصول</li>
    @endslot

    @slot('script')
        <script>


            // set file link
            function fmSetLink($url) {
                document.getElementById('image_label').value = $url;
            }


            $('#categories').select2({
                'placeholder' : 'دسته بندی مورد نظر را انتخاب کنید'
            })
            // $('#attributes').select2({
            //     'placeholder' : 'دسترسی مورد نظر را انتخاب کنید'
            // })


            let changeAttributeValues = (event , id) => {
                let valueBox = $(`select[name='attributes[${id}][value]']`);

                $.ajaxSetup({
                    headers : {
                        'X-CSRF-TOKEN' : document.head.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type' : 'application/json'
                    }
                })

                $.ajax({
                    type : 'POST',
                    url : '/admin/attribute/values',
                    data : JSON.stringify({
                        name : event.target.value
                    }),
                    success : function(result) {
                        valueBox.html(`
                            <option value="" selected>انتخاب کنید</option>
                            ${
                            result.data.map(function (item) {
                                return `<option value="${item}">${item}</option>`
                            })
                        }`);

                        // $('.attribute-select').select2({ tags : true });
                    }
                });
            }

            let createNewAttr = ({ attributes , id }) => {
                return `
                    <div class="row" id="attribute-${id}">
                        <div class="col-5">
                            <div class="form-group">
                                 <label>عنوان ویژگی</label>
                                 <select name="attributes[${id}][name]" onchange="changeAttributeValues(event, ${id});" class="attribute-select form-control">
                                    <option value="">انتخاب کنید</option>
                                    ${
                    attributes.map(function(item) {
                        return `<option value="${item}">${item}</option>`
                    })
                }
                                 </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                 <label>مقدار ویژگی</label>
                                 <select name="attributes[${id}][value]" id="attributes" class="attribute-select form-control">
                                        <option value="">انتخاب کنید</option>
                                 </select>
                            </div>
                        </div>
                         <div class="col-2">
                            <label >اقدامات</label>
                            <div>
                                <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('attribute-${id}').remove()">حذف</button>
                            </div>
                        </div>
                    </div>
                `
            }
            let createNewColor = ({ colors , id }) => {
                return `
                        <div class="row" id="colors-${id}">
                            <div class="col-2">
                                <div class="form-group">
                                    <label>انتخاب رنگ</label>
                                    <input type="color" name="cs[${id}][color]"><br>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                     <label>عنوان رنگ</label>
                                     <input type="text" name="cs[${id}][label]">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>سایز</label>
                                    <input type="text" name="cs[${id}][size]">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>تعداد این نوع محصول</label>
                                    <input type="number" name="cs[${id}][number]"><br>
                                </div>
                            </div>
                             <div class="col-2 d-flex">

                                <div>
                                    <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('colors-${id}').remove()">حذف</button>
                                </div>
                            </div>
                        </div>
                `
            }

            $('#add_product_attribute').click(function() {
                let attributesSection = $('#attribute_section');
                let id = attributesSection.children().length;

                let attributes= $('#attributes').data('attributes');
                attributesSection.append(
                    createNewAttr({
                        attributes : attributes,
                        id
                    })
                );

                $('.attribute-select').select2({ tags : true });
            });
            $('#add_color_attribute').click(function() {
                let attributesSection = $('#attribute_color');
                let id = attributesSection.children().length;

                attributesSection.append(
                    createNewColor({
                        colors : [],
                        id
                    })
                );

            });


            // // input
            // let image;
            // $('body').on('click','.button-image' , (event) => {
            //     event.preventDefault();
            //
            //     image = $(event.target).closest('.image-field');
            //     window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            // });
            //
            // // set file link
            // function fmSetLink($url) {
            //     image.find('.image_label').first().val($url);
            // }


        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.error')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد محصول</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div id="attributes" data-attributes="{{ json_encode(\App\Models\Attribute::all()->pluck('name')) }}"></div>
                <form class="form-horizontal" action="{{route('admin.products.store')}}" method="POST">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">نام محصول</label>
                            <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="نام محصول را وارد کنید" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">قیمت</label>
                            <input type="number" name="price" class="form-control" id="inputPassword3" placeholder="قیمت را وارد کنید" value="{{ old('price') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">موجودی</label>
                            <input type="number" name="inventory" class="form-control" id="inputPassword3" placeholder="موجودی را وارد کنید" value="{{ old('inventory') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسته بندی ها</label>
                            <select class="form-control" name="categories[]" id="categories" multiple>
                                @foreach(\App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h6>ویژگی محصول</h6>
                        <hr>
                        <div id="attribute_section">

                        </div>
                        <button class="btn btn-sm btn-danger" type="button" id="add_product_attribute">ویژگی جدید</button><br><br>

                        <h6 class="">انتخاب رنگ</h6>
                        <hr>
                        <div id="attribute_color">

                        </div>
                        <button class="btn btn-sm btn-danger" type="button" id="add_color_attribute">انتخاب رنگ</button>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ثبت محصول</button>
                        <a href="" class="btn btn-default float-left">لغو</a>
                    </div><br><br>



                    <!-- /.card-footer -->
                </form>

            </div>
        </div>
    </div>

@endcomponent

