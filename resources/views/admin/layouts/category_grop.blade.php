<ul class="list-group list-group-flush">
    @foreach($categories as $category)
        <li class="list-group-item">
            <div class="d-flex">
                <span>{{$category->name_category}}</span>
                <div class="actions mr-2">

                    @can('delete_category')
                        <form action="{{route('admin.categories.destroy',$category->id)}}" id="cate_{{ $category->id }}_delete" method="post">
                            @csrf
                            @method('delete')
                        </form>
                        <a href="" onclick="event.preventDefault(); document.getElementById('cate_{{ $category->id }}_delete').submit()" class="badge badge-danger">حذف</a>
                    @endcan

                    @can('edit_category')
                            <a href="{{route('admin.categories.edit',$category->id)}}" class="badge badge-primary">ویرایش</a>
                    @endcan

                    @can('create_category')
                            <a href="{{route('admin.categories.create')}}?parent={{$category->id}}" class="badge badge-warning">ثبت زیر دسته</a>
                    @endcan
                </div>
            </div>
            @if($category->child->count())
                @include('admin.layouts.category_grop',['categories'=>$category->child])
            @endif
        </li>
    @endforeach
</ul>
