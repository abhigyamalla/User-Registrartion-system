<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{


    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (auth()->attempt($attributes)) {
            return redirect('/');
        }
    
   
        return back()->withInput()
        ->withErrors(['email'=>"no email found or check your password"]);
    }
    
    public function create(){
        return view('sessions.create');
    }

    public function destroy(){
        auth()->logout();

        return redirect('/');
    }
}
