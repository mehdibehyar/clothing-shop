@component('admin.layouts.content',['title'=>'بخش ایجاد پست'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.posts.index')}}">پست ها</a></li>
        <li class="breadcrumb-item active">ایجاد پست جدید</li>
    @endslot

    @slot('script')
        <script>







            // input
            let image;
            $('body').on('click','.button-image' , (event) => {
                event.preventDefault();

                image = $(event.target).closest('.description-field');
                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });

            // set file link
            function fmSetLink($url) {
                image.find('.image_label').first().val($url);
            }

            let createNewDescription = ({ id }) => {
                return `
                        <div class="row description-field" id="description-${id}">
                            <div class="col-3">
                                 <label>عنوان</label>
                                 <input type="text" class="form-control" name="descriptions[${id}][title]">
                            </div>
                            <div class="col-3">
                                <label>توضیحات</label>
                                <textarea placeholder="توضیحات را وارد کنید" name="descriptions[${id}][description]]"></textarea>
                            </div>
                        <div class="col-3">
                            <div class="form-group">
                                 <label>تصویر</label>
                                 <div class="input-group">
                                    <input type="text" class="form-control image_label" name="descriptions[${id}][image]"
                                           aria-label="Image" aria-describedby="button-image">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary button-image" type="button">انتخاب</button>
                                    </div>
                                 </div>
                            </div>
                        </div>
                             <div class="col-2 d-flex">
                                <div>
                                    <button type="button" class="btn btn-sm btn-warning" onclick="document.getElementById('description-${id}').remove()">حذف</button>
                                </div>
                            </div>
                        </div>
                `
            }



            $('#add_description').click(function() {
                let descriptions = $('#descriptions');
                let id = descriptions.children().length;

                descriptions.append(
                    createNewDescription({
                        id
                    })
                );

            });





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
                <form class="form-horizontal" method="post" action="{{route('admin.posts.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">عنوان پست</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" value="{{old('name')}}" id="inputEmail3" placeholder="عنوان پست را وارد کنید">
                            </div>

                        </div><hr>

                        <div class="form-group" id="descriptions">

                        </div>
                        <button class="btn btn-sm btn-danger" type="button" id="add_description">توضیحات جدید</button>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ایجاد</button>
                        <a href="{{route('admin.posts.index')}}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>

            </div>

        </div>
    </div>

@endcomponent
