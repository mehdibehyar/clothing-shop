@component('admin.layouts.content',['title'=>'بخش ایجاد دسترسی برای کارمندان'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('admin.')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">کاربران</a></li>
        <li class="breadcrumb-item active">ایجاد دسترسی برای کارمندان</li>
    @endslot

    @slot('script')
        <script>
            $('#permissions').select2({
                'placeholder': 'دسترسی ها را وارد کنید'
            })
            $('#roles').select2({
                'placeholder' : 'مقام هارا وارد کنید'
            })
        </script>
    @endslot

    <div class="row">
        <div class="col-lg-12">
            <div class="card card">
                <div class="card-header">
                    <h3 class="card-title">فرم ایجاد دسترسی برای کارمندان</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                @include('admin.layouts.error')
                <form class="form-horizontal" method="post" action="{{route('admin.users.permission.store',$user->id)}}">
                    @csrf

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">دسترسی ها</label>
                        <select class="form-control" id="roles" name="roles[]" multiple>
                            @foreach(\App\Models\Role::all() as $role)
                                <option value="{{$role->id}}" {{in_array($role->id,$user->roles->pluck('id')->toArray())?'selected' : ''}}>{{$role->name}} _ {{$role->label}}</option>
                            @endforeach

                        </select>
                    </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">دسترسی ها</label>
                            <select class="form-control" id="permissions" name="permissions[]" multiple>
                                @foreach(\App\Models\Permission::all() as $permission)
                                    <option value="{{$permission->id}}" {{in_array($permission->id,$user->permissions->pluck('id')->toArray())?'selected' : ''}}>{{$permission->name}} _ {{$permission->label}}</option>
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
