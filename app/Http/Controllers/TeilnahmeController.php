<?php

namespace App\Http\Controllers;

use App\teilnahme;
use Illuminate\Http\Request;
use Auth;
use DB;

class TeilnahmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       $antwort = $request->input('answer');
        $User =Auth::user();
        $Name = $User->name;
        $VerID = $request->input('VerID');

        $data = array('Name'=>$Name, 'VeranstaltungsID'=>$VerID, 'antwort'=>$antwort);

        DB::table('teilnahme')->insert($data);

        return view('Veranstaltung')->with('id', $VerID);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\teilnahme  $teilnahme
     * @return \Illuminate\Http\Response
     */
    public function show(teilnahme $teilnahme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\teilnahme  $teilnahme
     * @return \Illuminate\Http\Response
     */
    public function edit(teilnahme $teilnahme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\teilnahme  $teilnahme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, teilnahme $teilnahme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\teilnahme  $teilnahme
     * @return \Illuminate\Http\Response
     */
    public function destroy(teilnahme $teilnahme)
    {
        //
    }
}
