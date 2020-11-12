<?php
namespace App\Repositories\users;
use App\Models\Role;
use App\Models\User;
use App\Repositories\users\UserRepositoryInterface;
use App\Repositories\BaseRepositoryAbstract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use JsonException;

class UserRepository extends BaseRepositoryAbstract implements UserRepositoryInterface {

    public function getAll(){
        return $this->model->all();
    }
    public function giveAdmin($userId){
        $user = $this->model::where('id',$userId);
        $adminRole = Role::where('title','Admin');
        $giveAdmin = $user->roles->attach($adminRole->id);
        $giveAdmin->save();

    }
    public function removeAdmin($userId){
        $user = $this->model->where('id',$userId);
        $adminRole = Role::where('title','Admin');
        $removeAdmin = $user->roles->detach($adminRole->id);
        $removeAdmin->save();
    }

    public function create(){
        return Role::all();
    }

    public function store(Request $request){
        $user = new User;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->address = json_encode(['city'=>$request->city,'streetAddress'=>$request->streetAddressgit ]);
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->birth = $request->birth;
        $user->password = Hash::make($request->password);
        //avata
        if ($request->hasFile('avatar')) {
            $img = $request->avatar;
            $img_name = Str::slug($request->full_name,'_').Str::random(5).'.'.$img->getClientOriginalExtension();
            $img->move('uploads/images/avatars',$img_name);
            $user->avatar = $img_name ;
        }else{
            $user->avatar = 'no-img.jpg';
        }
        $user->gender = $request->gender;
        // dd($user);
        $user->save();
        $user->roles()->sync($request->roles);
    }
    public function edit($id){
        $user = User::find($id);
        return $user;
    }
    public function update(Request $request, $id){
        $user = $this->model->find($id);
        $user->full_name=$request->full_name;
        $user->email=$request->email;
        $user->address = json_encode(['city'=>$request->city,'streetAddress'=>$request->streetAddress]);
        $user->phone=$request->phone;
        $user->birth=$request->birth;
        $user->gender=$request->gender;
        $user->password=Hash::make($request->password);
        if ($request->hasFile('avatar')) {
            $old_img_name = public_path('uploads\images\avatars\\'.$user->avatar);
            if(File::exists($old_img_name)) {
                File::delete($old_img_name);
            }
            $img = $request->avatar;
            $img_name = Str::slug($request->full_name,'_').Str::random(5).'.'.$img->getClientOriginalExtension();
            $img->move('uploads/images/avatars',$img_name);
            $user->avatar = $img_name ;
        }
        $user->roles()->sync($request->roles);
        // dd(public_path('uploads\images\avatars\\'.$user->avatar));
        $user->save();
    }
    public function delete($id)
    {
        $user = User::find($id);
        $old_img_name = public_path('uploads\images\avatars\\'.$user->avatar);
        $no_img = public_path('uploads\images\avatars\no-img.jpg');
        if(File::exists($old_img_name)!=$no_img) {
            File::delete($old_img_name);
        }
        $user->delete();
    }
}
?>
