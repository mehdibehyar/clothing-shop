@foreach($orders as $order)
    <tr>
        <td>{{$order->user->username}}</td>
        <td>{{jdate($order->created_at)}}</td>
        <td>{{$order->price}}</td>
        <td>{{$order->response_info}}</td>
        <td>{{$order->tracking_code}}</td>
        <td><div class="border {{$order->status=='unpaid'?'bg-danger':'bg-success'}} {{$order->status=='unpaid'?'bg-danger':'bg-success'}}" style="text-align: center">{{$order->status}}</div></td>
        <td class="d-flex">
            @can('delete_order')
                <form action="{{route('admin.orders.destroy',$order->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                </form>
            @endcan
            <a href="{{route('admin.single_order',$order->id)}}" class="btn btn-sm btn-primary ml-1">اطلاعات سفارش</a>
        </td>
    </tr>
@endforeach
