<?php

namespace App\Http\Controllers;

use App\MyProfile;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function insert(Request $req){

        $id= Auth::id();
        $name = Auth::user()->name;
        $password = Auth::user()->password;
        $email = Auth::user()->email;

        $firstName =$req->input('firstName');
        $lastName = $req->input('lastName');
        $mobile = $req->input('mobile');
        $geburtsdatum = $req->input('geburtsdatum');
        $geschlecht = $req->input('geschlecht');
        $ort = $req->input('ort');
        $plz =$req->input('plz');
        $strasse = $req->input('strasse');
       // $email = $req->input('email');

        $data = array('password'=>$password, 'name'=>$name,'firstName'=>$firstName, "lastName"=>$lastName,
            "mobile"=>$mobile, "geburtsdatum"=>$geburtsdatum,
            "geschlecht"=>$geschlecht, "ort"=>$ort, "plz"=>$plz,
            "strasse"=>$strasse, "email"=>$email);


            DB::table('users')
              ->where('id',$id)
                ->update($data);


        return view('profile');
    }


    function insert_veranstaltungen1(Request $req){

        $Name =$req->input('Name');
        $Ort = $req->input('Ort');
        $User = Auth::user();
        $Veranstalter = $User->name;

        $req->session()->put('Name', $Name);
        $req->session()->put('Ort', $Ort);
        $req->session()->put('Veranstalter', $Veranstalter);

        return view('Verstellen2');
    }

    function insert_veranstaltungen2(Request $req){

        $datum = $req->input('datum');
        $Genre = $req->input('Genre');

       $Name = $req->session()->get('Name');
       $Ort = $req->session()->get('Ort');
       $Veranstalter = $req->session()->get('Veranstalter');

        $data = array('Name'=>$Name, "Ort"=>$Ort,"datum"=>$datum, "Veranstalter"=>$Veranstalter, 'Genre'=>$Genre);

        DB::table('veranstaltungen')->insert($data);

        return \Redirect::route('suchen');
    }



}
