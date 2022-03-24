<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller {
    
    public function create() {
        
        return view('auth.login');
    }

    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'Correo incorrecto o Contraseña',
            ]);

        } else {

            if(auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->to('/estudiante');
            }
        }
        return redirect()->to('/estudiante');
    }

    public function edit() {
        
        return view('auth.login');
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}