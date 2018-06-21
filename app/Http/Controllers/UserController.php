<?php namespace App\Http\Controllers;



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\User;



class UserController extends Controller
{

    public function index(){
        return view('Profile', array('user' => Auth::user()));
    }
    public function update_avatar(Request $request){

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
           // Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatar/' . $filename ) );
            if(!Storage::disk('public_uploads')->putFileAs('/', $avatar, $filename)) {
                return false;
            }
            //Image::make($avatar)->save( public_path('/uploads/avatar/' . $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile');
    }

    public function profil($name){
        $Profil =User::where('name', $name)->get();
        return view('UserProfil')->with('Daten', $Profil);
    }
}