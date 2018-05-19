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

    public function suchen(){
        return view('Vsuchen');
    }

    public function erstellen(){
        return view('Verstellen');
    }
    public function profil(){
        return view('Profil');
    }
    public function upload(){
        return view('Profil_upload');
    }
  //  public function login(){
  //      return view('login');
  //  }
}
