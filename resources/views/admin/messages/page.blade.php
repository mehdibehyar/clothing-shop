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
