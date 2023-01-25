@foreach($posts as $post)
    <tr>
        <td>{{$post->title}}</td>
        <td>{{jdate($post->created_at)}}</td>
        <td>{{$post->user->name}}</td>
        <td><a href="{{url($post->discriptions[0]->image)}}"><img src="{{url($post->discriptions[0]->image)}}" width="10%" height="10%"></a></td>
        <td class="d-flex">
            @can('delete_post')
                <form action="{{route('admin.posts.destroy',$post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                </form>
            @endcan
            @can('edit_post')
                <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
            @endcan
        </td>
    </tr>
@endforeach
