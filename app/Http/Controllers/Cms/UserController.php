<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Repositories\users\UserRepository;
use App\Repositories\users\UserRepositoryInterface;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnArgument;

class UserController extends Controller
{
    public $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index()
    {
        $users = $this->userRepository->getAll();
        return view('cms.modules.users.user',compact('users'));
    }
    public function giveAdmin($userId)
    {
        $giveAdmin = $this->userRepository->giveAdmin($userId);
        return redirect()->back();
    }
    public function removeAdmin($userId)
    {
        $giveAdmin = $this->userRepository->removeAdmin($userId);
        return redirect()->back();
    }
    public function create()
    {
        $users = User::all();
        $roles = $this->userRepository->create();
        return view('cms.modules.users.create',compact('roles','users'));
    }

    public function store(CreateUserRequest $request)
    {
       $user = $this->userRepository->store($request);
       return redirect()->route('users.index')->with('thong-bao','Đã thêm người dùng thành công !');
    }

    public function edit($id)
    {
        $roles = Role::all();
        $user = $this->userRepository->edit($id);
        return view('cms.modules.users.edit',compact('user','roles'));
    }
    public function update(EditUserRequest $request, $id)
    {
        $user = $this->userRepository->update($request, $id);
        return redirect()->route('users.index')->with('thong-bao','Đã sửa người dùng thành công !');
    }
    public function delete($id)
    {
        $user = $this->userRepository->delete($id);
        return redirect()->back();
    }
}