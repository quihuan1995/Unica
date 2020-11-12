<?php

namespace App\Repositories\role;


use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleRespository implements RoleRespositoryInterface{
    public function getAll()
    {
        return User::paginate(10);
    }

    public function storeRole(Request $request)
    {
        $role = new Role;
        $role->title = $request->title;
        $role->slug= Str::slug($request->title,'-');
        $role->permissions = json_encode($request->permissions);
        $role->save();
    }

    public function editRole($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function updateRole(Request $request,$id)
    {
        $user = User::find($id);
        $user->roles()->sync($request->roles);
        // $user->roles()->sync([$request->permissions]);
        $user->save();
    }
}
?>

