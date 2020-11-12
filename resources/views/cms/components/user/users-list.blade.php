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


                        <td class="  column-key-created_at">{{ $user->email }}</td>
                        <td class="  column-key-created_at">{{ $user->phone }}</td>
                        <td class="column-key-status sorting_1">
                            @if ($user->status == 'active')
                            <span style="border-radius: 4px" class="label-success label p-1">{{ $user->status }}</span style="border-radius: 4px">
                            @else
                            <span style="border-radius: 4px" class="badge-danger label p-1">{{ $user->status }}</span>
                            @endif
                        </td>
                        <td class=" text-center">
                            <div class="table-actions">
                                @can('edit-users')
                                <a href="{{ route('users.edit',['id'=> $user->id]) }}" class="btn btn-icon btn-sm btn-primary"
                                    data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                @endcan

                                @can('delete-users')
                                <a href="{{ route('users.delete',['id'=>$user->id]) }}" onclick="return delUser('{{ $user->full_name }}')" class="btn btn-icon btn-sm btn-danger deleteDialog"
                                    data-toggle="tooltip" data-section="#" role="button" data-original-title="Delete">
                                    <i class="fa fa-trash"></i>
                                </a>
                                @endcan
                            </div>
                        </td>
                    </tr>
    @endforeach
