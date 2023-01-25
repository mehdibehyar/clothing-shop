@component('admin.layouts.content',['title'=>'پیام ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">پیام ها</li>
    @endslot

    @slot('script')
        <script>
            let page={{!empty($messages->currentPage())?$messages->currentPage():1}};

            function paginate(event) {
                if (page=={{$messages->lastPage()}}){
                    return document.getElementById('more_downloads').remove();
                }
                page+=1;
                $.ajax({
                    type: 'get',
                    url: 'messages/pagination?page='+page,
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
                <h3 class="card-title">پیام ها</h3>

                <div class="card-tools d-flex">
                    <form>
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="search" class="form-control float-right" placeholder="جستجو">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
{{--                    @can('create_post')--}}
{{--                        <div class="btn-group-sm mr-1">--}}
{{--                            <a href="{{route('admin.posts.create')}}" class="btn btn-info">ایجاد پوست جدید</a>--}}
{{--                        </div>--}}
{{--                    @endcan--}}

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tbody id="table_data">

                    <tr>
                        <th>متن پیام</th>
                        <th>زمان ارسال</th>
                        <th>ارسال شده توسط</th>
                        <th>وضعیت پیام</th>
                        <th>اقدامات</th>
                    </tr>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$message->text_message}}</td>
                            <td>{{jdate($message->created_at)}}</td>
                            <td>{{$message->user1->username}}</td>
                            <td><button class="{{$message->response==true?'btn-success':'btn-danger'}}">{{$message->response==true?'پاسخ داده شده':'بدون پاسخ'}}</button></td>
                            <td class="d-flex">
                                @can('delete_message')
                                    <form action="{{route('admin.messages.destroy',$message->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                    </form>
                                @endcan
                                @can('response_message')
                                    <a href="{{route('admin.messages.response',$message->id)}}" class="btn btn-sm btn-primary ml-1 text-white">پاسخ دادن به پیام</a>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

                <div style="text-align: center" id="more_downloads">
                    <button class="btn btn-warning" onclick="paginate(event)">بارگیری بیشتر</button>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

@endcomponent
