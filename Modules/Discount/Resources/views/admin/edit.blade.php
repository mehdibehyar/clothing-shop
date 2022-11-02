@component('admin.layouts.content' , ['title' => 'ایجاد محصول'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="/admin">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.discounts.index') }}">لیست محصولات</a></li>
        <li class="breadcrumb-item active">ایجاد محصول</li>
    @endslot

    @slot('script')
        <script>
            $('#categories').select2({
                'placeholder' : 'دسته ها را وارد کنید'
            });
            $('#products').select2({
                'placeholder' : 'محصولات را وارد کنید'
            });
            $('#users').select2({
                'placeholder' : 'کاربران را وارد کنید'
            });

        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            @include('admin.layouts.error')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد تخفیف</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{route('admin.discounts.update',$discount->id)}}" method="POST">
                    @csrf
                    @method('patch')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">کد تخفیف</label>
                            <input type="text" name="code" class="form-control" id="inputEmail3" placeholder="کد تخفیف را وارد کنید" value="{{ old('code',$discount->code) }}">
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">میزان تخفیف(درصد)</label>
                            <input type="number" max="99" min="1" name="percent" class="form-control" id="inputPassword3" placeholder="میزان تخفیف را وارد کنید" value="{{ old('percent',$discount->percent) }}">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">اعمال برای دسته ها</label>
                            <select class="form-control" name="categories[]" id="categories" multiple>
                                @foreach(\App\Models\Category::all() as $category)
                                    <option value="{{$category->id}}" {{in_array($category->id,$discount->categories->pluck('id')->toArray())?'selected':''}}>{{$category->name_category}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">اعمال برای محصولات</label>
                            <select class="form-control" name="products[]" id="products" multiple>
                                @foreach(\App\Models\Product::all() as $product)
                                    <option value="{{$product->id}}" {{in_array($product->id,$discount->products->pluck('id')->toArray())?'selected':''}}>{{$product->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">اعمال برای کاربران</label>
                            <select class="form-control" name="users[]" id="users" multiple>
                                @foreach(\App\Models\User::all() as $user)
                                    <option value="{{$user->id}}" {{in_array($user->id,$discount->users->pluck('id')->toArray())?'selected':''}}>{{$user->email}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">زمان انقضا</label>
                            <input type="datetime-local" name="expiration_time" class="form-control" id="inputPassword3" placeholder="زمان انقضا را وارد کنید" value="{{ old('expiration_time',$discount->expiration_time) }}">
                        </div>


                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش تخفیف</button>
                        <a href="{{route('admin.discounts.index')}}" class="btn btn-default float-left">لغو</a>
                    </div><br><br>



                    <!-- /.card-footer -->
                </form>

            </div>
        </div>
    </div>

@endcomponent
