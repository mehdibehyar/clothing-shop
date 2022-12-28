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


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت | داشبورد اول</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="dist/css/custom-style.css">
    <link rel="stylesheet" href="/build/assets/admin.2e685f49.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    @include('admin.layouts.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">ایجاد محصول</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">لیست محصولات</a></li>
                            <li class="breadcrumb-item active">ایجاد محصول</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">

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
            </div><!-- /.container-fluid -->
        </section>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
                <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../../plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

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


    // $('#categories').select2({
    //     'placeholder' : 'دسته بندی مورد نظر را انتخاب کنید'
    // })
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
</body>
</html>
