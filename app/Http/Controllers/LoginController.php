<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function validationRegister(Request $request)
    {
        // Está validado desde el front también
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect(route('login'));
    }

    public function validationLogin(Request $request)
    {
        // Falta la validación de los datos
        $credetials = [
            "email" => $request->email,  // Como dato, Laravel utiliza el email para iniciar la sesión
            "password" => $request->password,
        ];

        
        if($request->has('remember')){
            $remember = true;
        } else {
            $remember = false;
        }

        if(Auth::attempt($credetials, $remember)) {
            
            $request->session()->regenerate();
            return redirect(route('privada'));
        } else {
            return redirect(route('privada')); //Buscar como añadir mensajes
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
