
            @foreach ($users as $key=>$user)
            <tr role="row">
                <td class=" no-sort">
                    <div class="text-left">
                    <div class="checkbox checkbox-primary table-checkbox">
                        <input type="checkbox" class="checkboxes" name="id[]" value="1">
                    </div>
                    </div>
                </td>
                <td class="  column-key-id">{{ $users->firstItem() + $key }}</td>
                <td class=" text-left column-key-name">{{ $user->full_name }}
                </td>

                <td class="  column-key-created_at">
                    {{ ucwords(implode(' , ',$user->roles()->get()->pluck('title')->toArray())) }}</td>
                <td class=" text-center">
                    <div class="table-actions">
                        @can('edit-users')
                        <a href="{{ route('roles.edit',['id'=> $user->id]) }}" class="btn btn-icon btn-sm btn-primary"
                            data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                        @endcan


                    </div>
                </td>
            </tr>
@endforeach

