<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\http\Request;
use Auth;
use Image;

class UserController extends Controller
{

    public function profile(){
        return view('profile', array('user' => Auth::user()));
    }
}