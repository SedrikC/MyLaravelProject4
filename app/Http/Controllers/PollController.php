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
        $VerID = $request->input('VerID');
        $poll->titel = $request->input('titel');
        $User =Auth::user();
        $poll->User = $User->name;
        $poll->VerID = $request->input('VerID');
        $poll->save();

        $option1 = new option;
        $option1->Name = $request->input('option1');
        $option1->VerID = $request->input('VerID');
        $option1->option = 1;
        $option1->save();

        $option2 = new option;
        $option2->Name = $request->input('option2');
        $option2->VerID = $request->input('VerID');
        $option2->option = 2;
        $option2->save();

        if(empty($request->input('option3'))){
            $option3 = new option;
            $option3->Name = '';
            $option3->VerID = $request->input('VerID');
            $option3->option = 3;
            $option3->save();
        }else {
            $option3 = new option;
            $option3->Name = $request->input('option3');
            $option3->VerID = $request->input('VerID');
            $option3->option = 3;
            $option3->save();
        }

        if (empty($request->input('option4'))){
            $option4 = new option;
            $option4->Name = '';
            $option4->VerID = $request->input('VerID');
            $option4->option = 4;
            $option4->save();
        }else {
            $option4 = new option;
            $option4->Name = $request->input('option4');
            $option4->VerID = $request->input('VerID');
            $option4->option = 4;
            $option4->save();
        }

        if(empty($request->input('option5'))){
            $option5 = new option;
            $option5->Name = '';
            $option5->VerID = $request->input('VerID');
            $option5->option = 5;
            $option5->save();
        }else {
            $option5 = new option;
            $option5->Name = $request->input('option5');
            $option5->VerID = $request->input('VerID');
            $option5->option = 5;
            $option5->save();
        }

        return \Redirect::route('Veranstaltung', $VerID);
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
