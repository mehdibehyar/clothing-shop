@component('admin.layouts.content' , ['title' => 'لیست تصاویر'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت </a></li>
        <li class="breadcrumb-item active">/ {{ $product->title }} </li>
        <li class="breadcrumb-item active">گالری تصاویر</li>
    @endslot

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">تصاویر</h3>

                    <div class="card-tools d-flex">
                        @can('create_image')
                            <div class="btn-group-sm mr-1">
                                <a href="{{ route('admin.product.image.create' , ['product' => $product->id]) }}" class="btn btn-info">ثبت تصویر جدید</a>
                            </div>
                        @endcan
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        @foreach($images as $image)
                            <div class="col-sm-2">
                                <a href="{{ url($image->image) }}">
                                    <img src="{{ url($image->image) }}" class="img-fluid mb-2" style="width: 70%;height: 70%">
                                </a>
                                @can('delete_image')
                                    <form action="{{ route('admin.product.image.destroy' , ['product' => $product->id , 'image' => $image->id]) }}" id="image-{{ $image->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                    </form>
                                @endcan
                                @can('edit_image')
                                    <a href="{{ route('admin.product.image.edit' , ['product' => $product->id , 'image' => $image->id]) }}" class="btn btn-sm btn-primary">ویرایش</a>
                                @endcan
                                @can('delete_image')
                                    <a href="#" class="btn btn-sm btn-danger" onclick="document.getElementById('image-{{ $image->id }}').submit()">حذف</a>
                                @endcan
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{ $images->render() }}
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endcomponent
