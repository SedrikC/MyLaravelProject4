<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Support\Facades\Auth;


class BesucherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('guest');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */




    public function Kontakt(){
        return view('Kontakt');
    }
    public function datenschutz(){
        return view('Datenschutz');
    }
    public function impressum(){
        return view('Impressum');
    }
    public function index()
    {
        return view('EasyPlanHome');
    }

  //  public function login(){
  //      return view('login');
  //  }
}
