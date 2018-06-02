<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Sodium\increment;
use App\poll;
use App\option;
use Auth;
use DB;
class PollController extends Controller
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
        $poll = new poll;
        $poll->titel = $request->input('titel');
        $User =Auth::user();
        $poll->User = $User->name;
        $poll->VerID = $request->input('VerID');
        $poll->pollid = DB::table('poll')->increment('pollid');

        $option1 = new option;
        $option1->Name = $request->input('option1');

        $option2 = new option;
        $option2->Name = $request->input('option2');

        $option3 = new option;
        $option3->Name = $request->input('option3');

        $option4 = new option;
        $option4->Name = $request->input('option4');

        $option5 = new option;
        $option5->Name = $request->input('option5');

        $poll->save();
        $poll->options()->save($option1);
        $poll->options()->save($option2);
        $poll->options()->save($option3);
        $poll->options()->save($option4);
        $poll->options()->save($option5);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
