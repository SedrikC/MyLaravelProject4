<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use App\option;
use App\Ressource;
use App\teilnahme;
use App\User;
use App\Veranstaltungen;
use App\comments;
use App\poll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Like;


class RessourceController extends Controller
{
    public function suchen (Request $request){
        $Veranstaltungsname = $request->input('Veranstaltungsname');
        $Veranstaltungsort = $request->input('Veranstaltungsort');
        $Genre = $request->input('Genre');
        $Veranstalter = $request->input('Veranstalter');

        $result = Veranstaltungen::where('Name', 'LIKE', '%'.$Veranstaltungsname.'%')->where('Ort', 'LIKE', '%'.$Veranstaltungsort.'%')
            ->where('Genre', 'LIKE', '%'.$Genre.'%')->where('Veranstalter', 'LIKE', '%'.$Veranstalter.'%')->get();

        return view('Vsuchen')->with('Vsuchen',$result);
    }

    public function ajaxsuche (Request $request){
        $Veranstaltungsname = $request->input('Veranstaltungsname');
        $Veranstaltungsort = $request->input('Veranstaltungsort');
        $Genre = $request->input('Genre');
        $Veranstalter = $request->input('Veranstalter');

        $result = Veranstaltungen::where('Name', 'LIKE', '%'.$Veranstaltungsname.'%')->where('Ort', 'LIKE', '%'.$Veranstaltungsort.'%')
            ->where('Genre', 'LIKE', '%'.$Genre.'%')->where('Veranstalter', 'LIKE', '%'.$Veranstalter.'%')->get();

        $html = '<table class="table">
                    <tbody>';

        foreach ($result as $r){
            $tr = '     <tr>
                        <td></td><td><a href="/Veranstaltung/'. $r->id.'"<h1 class="VerName"> '. $r->Name .'</h1></a></td>
                        <td></td>
                        <td></td>
                        </tr>
                        <tr>
                        <td class="VerInfo"> Veranstaltungsort: ' . $r->Ort . '</td>
                        <td class="VerInfo">Veranstalter: '. $r->Veranstalter .'</td>
                        <td class="VerInfo">Genre: '. $r->Genre  .'</td>
                        <td class="VerInfo">Datum: '. $r->Datum .'</td>
                        </tr>';
            $html .= $tr;
        }
        $html .= '</tbody></table>';

        return $html;
    }
    public function my_veranstaltungen (Request $request){



        $Veranstalter = Auth::user()->name;

        $result = Veranstaltungen::where('Veranstalter', 'LIKE', $Veranstalter)->get();

        return view('meine_veranstaltungen')->with('Vsuchen',$result);

    }

    public function admin () {
        return view('Admin');
    }
    public function admin_veranstaltungen(){
        $result = Veranstaltungen::all();

        return view('admin_veranstaltungen')->with('Vsuchen',$result);
    }
    public function admin_user() {
        $result = User::all();

        return view('Admin_user')->with('Daten', $result);
    }
    public function admin_veranstaltungen_loeschen(Request $request){
        $VerID = $request->input('VerID');
        $Ver = Veranstaltungen::where('id', $VerID);
        $Ver->delete();
        $result = Veranstaltungen::all();

        return view('admin_veranstaltungen')->with('Vsuchen',$result);
      //  return \Redirect::route('admin_veranstaltungen');
      //  return view('admin_veranstaltungen');

    }

    public function admin_user_loeschen(Request $request){
        $UserID = $request->input('UserID');
        $User = User::where('id', $UserID);
        $User->delete();
        $result = User::all();

        return view('Admin_user')->with('Daten', $result);
        //return \Redirect::route('admin_user');
       // return view('Admin_user');


    }

    public function Veranstaltung($id){
        $Veranstaltungen = Veranstaltungen::where('id', $id)->get();

        $Comment = comments::where('Veranstaltungsid',$id)->get();

        $Poll = poll::where('VerID', $id)->get();

        $Teilnahme = teilnahme::where('VeranstaltungsID', $id)->where('antwort', 0)->get();
        $Absagen = teilnahme::where('VeranstaltungsID', $id)->where('antwort', 1)->get();

        $Option = option::where('VerID', $id)->get();

        $Like1 = like::where('VeranstaltungID', $id)->where('OptionID', 1)->get();
        $Like2 = like::where('VeranstaltungID', $id)->where('OptionID', 2)->get();
        $Like3 = like::where('VeranstaltungID', $id)->where('OptionID', 3)->get();
        $Like4 = like::where('VeranstaltungID', $id)->where('OptionID', 4)->get();
        $Like5 = like::where('VeranstaltungID', $id)->where('OptionID', 5)->get();

        $User= Auth::user();
        $Username = $User->name;

        $CheckLike = like::where('VeranstaltungID', $id)->where('Username', $Username)->get();

        $CheckTeilnahme = teilnahme::where('VeranstaltungsID', $id)->where('name', $Username)->get();


        return view('Veranstaltung')->with('Events', $Veranstaltungen)
            ->with('Comment', $Comment)
            ->with('id', $id)
            ->with('Poll', $Poll)
            ->with('Teilnahme', $Teilnahme)
            ->with('Absagen', $Absagen)
            ->with('Option', $Option)
            ->with('Like1', $Like1)
            ->with('Like2', $Like2)
            ->with('Like3', $Like3)
            ->with('Like4', $Like4)
            ->with('Like5', $Like5)
            ->with('Username', $Username)
            ->with('CheckLike', $CheckLike)
            ->with('CheckTeilnahme', $CheckTeilnahme);
    }
public function delete_Veranstaltung(Request $request){
        $VerID = $request->input('VerID');
        $Ver = Veranstaltungen::where('id', $VerID);
        $Ver->delete();

    return \Redirect::route('my_veranstaltungen');


}
    public function index()
    {
    $rs = Ressource::all();
    return view('Vsuchen')->with('Ressource', $rs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ressource = new Ressource;
        $ressource->Name = $request->Name;

        $ressource->save();
        return $this->index();
    }
/**
        $query = $request->input('suchen');
        $veranstaltungsname = Veranstaltungen::where('Name', 'LIKE', '%'.$query.'%')->get();

        return view('Vsuchen')->with('Vsuchen',$veranstaltungsname);

    public function store(Request $request) {
        $currency = new Currency;
        $currency->currency_iso = $request->currency_iso;
        $currency->eur_fxrate = $request->eur_fxrate;
        $currency->save();

        // shorter: $currency = Currency::create($request->all());
        return $this->index();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function show(Ressource $ressource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function edit(Ressource $ressource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ressource $ressource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ressource  $ressource
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ressource $ressource)
    {

    }
}
