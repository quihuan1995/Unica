@foreach ($orders as $key=>$order)
<tr role="row">
    <td class=" no-sort">
        <div class="text-left">
        <div class="checkbox checkbox-primary table-checkbox">
            <input type="checkbox" class="checkboxes" name="id[]" value="1">
        </div>
        </div>
    </td>
    <td class="  column-key-id">{{$order->id}}</td>
    <td class=" text-left column-key-name">{{$order->full_name}}</td>
    <td class="  column-key-created_at"></td>
    <td class="  column-key-created_at">{{$order->phone}}</td>
    <td class="  column-key-created_at"></td>
    <td class="  column-key-created_at">{{$order->updated_at}}</td>
    @switch($order->status)
        @case(1)
        <td class="column-key-status sorting_1"><span class="badge-warning label p-1">Đang xủ lí</span></td>
            @break
        @case(2)
        <td class="column-key-status sorting_1"><span class="badge-success label p-1">Hoàn thành</span></td>
            @break
        @case(3)
        <td class="column-key-status sorting_1"><span class="badge-danger label p-1">Hủy</span></td>
            @break
        @default
            
    @endswitch
    <td class=" text-center">
        <div class="table-actions">
           
            @switch($order->status)
            @case(1)
                <a href="/cms/order/{{$order->id}}/detail " class="btn btn-icon btn-sm btn-secondary"data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-eye"></i></a>
            <a href="/cms/order/{{$order->id}}/edit" class="btn btn-icon btn-sm btn-primary"data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                @break
            @case(2)
                <a href="/cms/order/{{$order->id}}/success " class="btn btn-icon btn-sm btn-secondary"data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-eye"></i></a>
                @break
            @case(3)
                <a href="/cms/order/{{$order->id}}/disband " class="btn btn-icon btn-sm btn-secondary"data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-eye"></i></a>
                @break
            @default
                
            @endswitch
           
        </div>
    </td>
</tr>
@endforeach

