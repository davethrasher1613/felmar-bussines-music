<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:3'],
            'apellido' => ['required', 'string', 'min:3'],

            'tipodocumento'=>['required', 'string', 'max:4'],
            'numerodocumento'=>['required',  'min:10','numeric','unique:users'],
            'telefono'=>['required', 'min:10','numeric'],
            'email' => ['required', 'string', 'email','min:(3)-> numbers', 'max:255', 'unique:users'],
            
            'password' => ['required','min:8', 'confirmed',
            Rules\Password::min(3)->letters()
            ->numbers()
             ->symbols(), Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nombre' => $request->nombre,
            'apellido'=>$request->apellido,
            'tipodocumento'=>$request->tipodocumento,
            'numerodocumento'=>$request->numerodocumento,
            'telefono'=>$request->telefono,
            'email' => $request->email,
            'password' => Hash::make($request->password),
       
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
