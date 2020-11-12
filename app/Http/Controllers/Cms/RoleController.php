<?php

namespace App\Http\Controllers\Cms;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use App\Repositories\role\RoleRespository;
use App\Repositories\role\RoleRespositoryInterface;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public $roleRespository;
    public function __construct(RoleRespositoryInterface $roleRespository)
    {
        $this->roleRespository = $roleRespository;
    }

    public function index()
    {
        $users = $this->roleRespository->getAll();
        return view('cms.modules.roles.role',compact('users'));
    }

    public function create()
    {
        return view('cms.modules.roles.create');
    }

    public function store(Request $request)
    {
        $role = $this->roleRespository->storeRole($request);
        return redirect()->route('roles.index');
    }

    public function edit($id)
    {
        $user = $this->roleRespository->editRole($id);
        $roles = Role::all();
        return view('cms.modules.roles.edit',compact('user','roles'));
    }
    public function update(Request $request,$id)
    {
        $user = $this->roleRespository->updateRole($request, $id);
        return redirect()->route('roles.index');
    }
}
