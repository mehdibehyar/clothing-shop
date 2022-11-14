
@foreach($products as $product)
    <tr>
        <td>{{$product->title}}</td>
        <td>{{$product->inventory}}</td>
        <td>{{$product->price}}</td>
        <td>{{jdate($product->created_at)}}</td>
        <td class="d-flex">
            @can('delete_product')
                <form action="{{route('admin.products.destroy',$product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                </form>
            @endcan
            @can('edit_product')
                <a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-sm btn-primary ml-1">ویرایش</a>
                <a href="{{route('admin.product.image.index',$product->id)}}" class="btn btn-sm btn-success">ثبت تصویر</a>
            @endcan
        </td>
    </tr>
@endforeach



