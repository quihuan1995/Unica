<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Customer,Course};
use App\Repositories\users\UserRepositoryInterface;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class UserClientController extends Controller
{
    private $user;
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }
    public function course(){
        //khoa hoc thieu link va image
        $user=Auth::user();
        $customer=Customer::find('1');
        $courses=Customer::find('1')->course()->paginate(6);
        return view('client.modules.user.course',compact('customer','courses'));
    }
    public function seach(Request $request){
        $user=Auth::user();
        $customer=Customer::find('1');
        $courses=Customer::find('1')->course()->where('title','like',"%$request->seach_data%")->take(30)->paginate(6);
        return view('client.modules.user.course',compact('customer','courses'));
    }

    public function profile(Request $request){
        $customer=Customer::find('1');
        return view('client.modules.user.profile',compact('customer'));
    }
    public function update(Request $request){
        $user = Customer::find(1);
        $user->address=json_encode(['city'=>$request->city,'streetAddress'=>$request->streetAddress]);;
        $user->full_name=$request->full_name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->gender=$request->gender;
        if ($request->hasFile('avatar')) {
            $old_img_name = public_path('uploads\images\avatars\\'.$user->avatar);
            if(File::exists($old_img_name)) {
                File::delete($old_img_name);
            }
            $img = $request->avatar;
            $img_name = Str::slug($request->full_name,'_').Str::random(5).'.'.$img->getClientOriginalExtension();
            $img->move('uploads/images/avatars',$img_name);
            $user->avatar = $img_name ;
        }else{
            $user->avatar = 'no-img.jpg';
        }
        $user->save();
        return redirect()->route('user.profile')->with('success','Edit success');
        
    }
    public function wishlist(){
        $courses=Course::paginate(6);
        $wishlists=Customer::find('1')->wishlist()->paginate(6);

        return view('client.modules.user.wishlist',compact('courses','wishlists'));
    }
    public function discover(){
        return view('client.modules.user.discover');
    }
    public function wallet(){
        return view('client.modules.user.wallet');
    }
    public function order(){
        return view('client.modules.user.order');
    }
    public function inbox(){
        return view('client.modules.user.inbox');
    }
    public function loginhistory(){
        return view('client.modules.user.loginhistory');
    }

}
