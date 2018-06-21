<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class admin
{

    public function handle($request, Closure $next)
    {
        //Role_id holen
        $role_id2 = Auth::user()->role_id;


        if($role_id2 == '1'){

            //wenn das statement nich richtig ist, geht es zu dem alten zutück glaub
            // also muss hier role id ==2 rein
            //return back()->withInput();
            return  redirect('/home');
        }

        return $next($request);
    }
}
