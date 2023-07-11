<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register.create');
    }

    public function store(){
      $attributes=request()->validate([
            'name'=>'required|max:30',
            'email'=>'required|unique:users,email',
            'password'=>'required',

        ]);
    $user= User::create($attributes);
       auth()->login($user);
       redirect('/');
    }
}
