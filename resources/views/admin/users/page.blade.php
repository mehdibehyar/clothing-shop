@foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->username}}</td>
        <td>{{$user->phone}}</td>
        {{--                                <td>--}}
        {{--                                    {!!$user->email_verified_at?"<span class='bg-success rounded'>فعال</span>":"<span class='bg-danger rounded'>غیرفعال</span>"!!}--}}
        {{--                                </td>--}}
        <td class="d-flex">
            @can('delete_user')
                <form action="{{route('admin.users.destroy',$user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                </form>
            @endcan
            {{--                                    @can('edit_user')--}}
            {{--                                            <a href="{{route('admin.users.edit',['user'=>$user->id])}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>--}}
            {{--                                    @endcan--}}
            @if($user->IsStaffUser())
                @can('show_staff_access')
                    <a href="{{route('admin.users.permissions.create',$user->id)}}" class="btn btn-sm btn-warning">دسترسی ها</a>
                @endcan
            @endif
        </td>
    </tr>
@endforeach
