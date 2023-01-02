@component('admin.layouts.content',['title'=>'پیام ها'])

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="#">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">پیام ها</li>
    @endslot

    @slot('script')

    @endslot
    @include('admin.layouts.error')
    <div class="container card border border-dark p-3">
        <form action="{{route('admin.messages.response',$message->id)}}" method="post" class="form-control border border-warning">
            @csrf
            <div class="card p-3">
                <label class="label">متن پیام:</label>
                <p class="text">
                    {{$message->text_message}}
                </p>
            </div>
            <div class="card p-3">
                <label class="label">
                    پاسخ را اینجا وارد کنید.
                </label>
                <textarea name="message" class="form-control">

                </textarea>
            </div>
            <div class="p-3">
                <button class="button btn-success">
                    ارسال
                </button>
            </div>
        </form>
    </div>

@endcomponent
