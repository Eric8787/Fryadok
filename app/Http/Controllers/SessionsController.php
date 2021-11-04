<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller{
    
    public function create() {

        return view('auth.login');
    }

    public function store() {


        if(auth()->attempt(request(['name', 'password', 'dni'])) == false) {
            return back()->withErrors([
                'message' => 'Tu nombre de usuario, Contraseña y DNI, son incorrectos, PORFAVOR INTENTELO DE NUEVO',
            ]);
        }
        return redirect()->to('/');
    }
    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
