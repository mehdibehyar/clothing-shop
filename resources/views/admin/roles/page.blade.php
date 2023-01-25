@foreach($roles as $role)
    <tr>
        <td>{{$role->name}}</td>
        <td>{{$role->label}}</td>
        <td class="d-flex">
            @can('delete_role')
                <form action="{{route('admin.roles.destroy',$role->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                </form>
            @endcan
            @can('edit_role')
                <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-sm btn-primary">ویرایش</a>
            @endcan
        </td>
    </tr>
@endforeach
