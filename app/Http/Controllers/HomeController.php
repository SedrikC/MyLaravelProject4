<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('EasyPlanHome');
    }

    public function erstellen(){
        return view('Verstellen');
    }
    public function erstellen2(){
        return view('Verstellen2');
    }
    public function profil(){
        $UserID =Auth::id();
        $Profil =User::where('id', $UserID)->get();
        return view('Profil')->with('Daten', $Profil);
    }
    public function datenschutz(){
        return view('Datenschutz');
    }
    public function Einstellungen(){
        return view('Einstellungen');
    }
    public function Kontakt(){
        return view('Kontakt');
    }
    public function test(){
        return view('Veranstaltung');
    }
    public function CreatePoll($id){
        return view('Pollerstellen')->with('id', $id);
    }
    public function meine_veranstaltungen (){

        return view('meine_veranstaltungen');
    }

  //  public function login(){
  //      return view('login');
  //  }
}
