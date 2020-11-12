    @foreach($tags as $tag)
         <tr role="row">
            <td class=" text-left no-sort">
                <div class="text-left">
                    <div class="checkbox checkbox-primary table-checkbox">
                        <input type="checkbox" class="checkboxes" name="id[]" value="1">
                    </div>
                    </div>
            </td>
            <td class="  column-key-id">{{ $tag -> id }}</td>
            <td class=" text-left column-key-name"><a href="#">{{ $tag -> title }}</a></td>
            <td class=" text-left column-key-name"><a href="#">{{ $tag ->category->name }}</a></td>
            <td class="  column-key-created_at">{{ $tag -> created_at }}</td>
            <td class="  column-key-created_at">{{ $tag -> updated_at }}</td>
            <td class=" text-center">
                <div class="table-actions">
                    <a href="{{ route('tag.edit',['id'=>$tag->id]) }}" class="btn btn-icon btn-sm btn-primary" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                    <a onclick="return confirm('Want delete?')" href="{{ route('tag.delete',['id'=>$tag->id]) }}" class="btn btn-icon btn-sm btn-danger deleteDialog" data-toggle="tooltip" data-section="#" role="button" data-original-title="Delete">
                            <i class="fa fa-trash"></i>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
            <tr>
            <td colspan="7" align="center">
                {!! $tags->appends(["query" => isset($query) ? $query : null])->links() !!}
            </td>
        </tr>
