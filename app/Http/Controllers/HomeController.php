<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Profil');
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

  //  public function login(){
  //      return view('login');
  //  }
}
