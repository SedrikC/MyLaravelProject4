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
        $id= Auth::user()->id;
        $firstName =$req->input('firstName');
        $lastName = $req->input('lastName');
        $mobile = $req->input('mobile');
        $geburtsdatum = $req->input('geburtsdatum');
        $geschlecht = $req->input('geschlecht');
        $ort = $req->input('ort');
        $plz =$req->input('plz');
        $strasse = $req->input('strasse');
        $email = $req->input('email');

        $data = array('firstName'=>$firstName, "lastName"=>$lastName,"mobile"=>$mobile, "geburtsdatum"=>$geburtsdatum, "geschlecht"=>$geschlecht, "ort"=>$ort, "plz"=>$plz, "strasse"=>$strasse, "email"=>$email);

        DB::table('mein_profils')
            ->where('id',$id)
            ->update($data);

        return view('profile');
    }


    function insert_veranstaltungen1(Request $req){
        $Name =$req->input('Name');
        $Ort = $req->input('Ort');
        $datum = $req->input('datum');
        $Genre = $req->input('Genre');
        $Veranstalter = $req->input('Veranstalter');
//
        $data = array('Name'=>$Name, "Ort"=>$Ort,"datum"=>$datum, "Veranstalter"=>$Veranstalter, 'Genre'=>$Genre);

        DB::table('veranstaltungen')->insert($data);

        return view('Verstellen');
    }



}
