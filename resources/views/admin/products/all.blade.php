@component('admin.layouts.content',['title'=>'محصول ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">محصول ها</li>
    @endslot
    @slot('script')
        <script>
            let page=1;

            function paginate(event) {
                if (page=={{$products->lastPage()}}){
                    document.getElementById('more_downloads').remove();
                }
                page+=1;
                $.ajax({
                    type: 'get',
                    url: 'products/pagination?page='+page,
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
                <h3 class="card-title">محصول ها</h3>

                <div class="card-tools d-flex">
                    <form>
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    @can('create_product')
                        <div class="btn-group-sm mr-1">
                            <a href="{{route('admin.products.create')}}" class="btn btn-info">ایجاد محصول جدید</a>
                        </div>
                    @endcan
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody id="table_data">

                            <tr>
                                <th>عنوان محصول</th>
                                <th>تعداد محصول</th>
                                <th>قیمت محصول</th>
                                <th>زمان ایجاد</th>
                                <th>اقدامات</th>
                            </tr>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->title}}</td>
                                <td>{{$product->inventory}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{jdate($product->created_at)}}</td>
                                <td class="d-flex">
                                    @can('delete_product')
                                        <form action="{{route('admin.products.destroy',$product->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                        </form>
                                    @endcan
                                    @can('edit_product')
                                        <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
                                        <a href="{{route('admin.product.image.index',$product->id)}}" class="btn btn-sm btn-success">ثبت تصویر</a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
                <div style="text-align: center" id="more_downloads">
                    <button class="btn btn-warning" onclick="paginate(event)">بارگیری بیشتر</button>
                </div>
                {{$products->getPageName()}}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

@endcomponent





