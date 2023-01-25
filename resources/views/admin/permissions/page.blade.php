@foreach($permissions as $permission)
    <tr>
        <td>{{$permission->name}}</td>
        <td>{{$permission->label}}</td>
        <td class="d-flex">
            @can('delete_permission')
                <form action="{{route('admin.permissions.destroy',$permission->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                </form>
            @endcan
            @can('edit_permission')
                <a href="{{route('admin.permissions.edit',$permission->id)}}" class="btn btn-sm btn-primary">ویرایش</a>
            @endcan
        </td>
    </tr>
@endforeach
