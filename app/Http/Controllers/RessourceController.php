<?php

namespace App\Http\Controllers;

use App\option;
use App\Ressource;
use App\teilnahme;
use App\Veranstaltungen;
use App\comments;
use App\poll;
use Illuminate\Http\Request;

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

    public function Veranstaltung($id){
        $Veranstaltungen = Veranstaltungen::where('id', $id)->get();

        $Comment = comments::where('Veranstaltungsid',$id)->get();

        $Poll = poll::where('VerID', $id)->get();

        $Teilnahme = teilnahme::where('VeranstaltungsID', $id)->where('antwort', 0)->get();
        $Absagen = teilnahme::where('VeranstaltungsID', $id)->where('antwort', 1)->get();

        $Option = option::where('pollid', 1)->get();

        return view('Veranstaltung')->with('Events', $Veranstaltungen)
            ->with('Comment', $Comment)
            ->with('id', $id)
            ->with('Poll', $Poll)
            ->with('Teilnahme', $Teilnahme)
            ->with('Absagen', $Absagen)
            ->with('Option', $Option);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $rs = Ressource::all();
    return view('Vsuchen')->with('Ressourve', $rs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }
}
