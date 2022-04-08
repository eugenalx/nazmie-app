<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function showRegistrationForm(){
       return view("/authPages.register");
   }

   public function create(){
        return view("/authPages.register");
    }

    public function store(){
        
        //creating user
        $attributes = request()->validate([
            "firstName" =>'required | min:3 | max:255',
            "lastName" =>'required | min:3 | max:255',
            "username" =>'required | min:3 | max:255 | unique:users,username',
            "email" =>'required | email | max:255 | unique:users,email',
            "password" =>'required | confirmed | min:8 | max:255',
        ]);


         $user = User::create($attributes);

        auth()->login($user);

         return redirect("/")->with("succes", 'Your account has been created');

    }
}
