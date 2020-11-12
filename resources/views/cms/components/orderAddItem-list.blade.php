@foreach($courses as $course)
    <tr>
        <td>{{ $course->id }}</td>
        <td>{{ $course->title }}</td>
        <td style="text-decoration: line-through;">{{ number_format($course->regular_price,0,'','.') }} đ</td>
        <td>{{ number_format($course->sale_price,0,'','.') }} đ</td>
        <td> <button data-info='{{ json_encode($course,JSON_UNESCAPED_UNICODE) }}' ref="add_to_cart" class="btn btn-primary" id="addItem" >Thêm vào đơn hàng</button></td>
    </tr>
@endforeach

<tr>
    <td colspan="7" align="center">
        {{ $courses->links() }}
    </td>
</tr>
