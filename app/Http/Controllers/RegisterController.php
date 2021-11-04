<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller {
    
    public function create() {
        
        return view('auth.register');
    }

    public function store() {


        $this->validate(request(), [
            'name' => 'required',
            'password' => 'required',
            'dni' => 'required|confirmed',
            'email' => 'required|email',
        ]);

        $user = User::create(request(['name', 'password', 'dni', 'email']));

        auth()->login($user);
        return redirect()->to('/');


    }
}
