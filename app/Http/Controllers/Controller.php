<?php

namespace App\Http\Controllers;

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
        $role_id = Auth::user()->role_id;
        //wenn nichts geändert wurde nimmt es die old_xxx werte
        $old_firstName = Auth::user()->firstName;
        $old_lastName = Auth::user()->lastName;
        $old_mobile = Auth::user()->mobile;
        $old_geburtsdatum = Auth::user()->geburtsdatum;
        $old_geschlecht = Auth::user()->geschlecht;
        $old_strasse = Auth::user()->strasse;
        $old_ort = Auth::user()->ort;
        $old_plz = Auth::user()->plz;


        $firstName =$req->input('firstName');
        if(empty($firstName)){
            $firstName = $old_firstName;
        }
        $lastName = $req->input('lastName');
        if(empty($lastName)){
            $lastName = $old_lastName;
        }
        $mobile = $req->input('mobile');
        if(empty($mobile)){
            $mobile = $old_mobile;
        }
        $geburtsdatum = $req->input('geburtsdatum');
        if(empty($geburtsdatum)){
            $geburtsdatum = $old_geburtsdatum;
        }
        $geschlecht = $req->input('geschlecht');
        if(empty($geschlecht)){
            $geschlecht = $old_geschlecht;
        }
        $ort = $req->input('ort');
        if(empty($ort)){
            $ort = $old_ort;
        }
        $plz =$req->input('plz');
        if(empty($plz)){
            $plz = $old_plz;
        }
        $strasse = $req->input('strasse');
        if(empty($strasse)){
            $strasse = $old_strasse;
        }
       // $email = $req->input('email');

        $data = array('password'=>$password,'role_id'=>$role_id, 'name'=>$name,'firstName'=>$firstName, "lastName"=>$lastName,
            "mobile"=>$mobile, "geburtsdatum"=>$geburtsdatum,
            "geschlecht"=>$geschlecht, "ort"=>$ort, "plz"=>$plz,
            "strasse"=>$strasse, "email"=>$email);


            DB::table('users')
              ->where('id',$id)
                ->update($data);


        return view('Profil_bearbeiten_erfolgreich');
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
