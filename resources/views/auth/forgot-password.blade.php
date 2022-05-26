   
@extends('layouts/layout')



@section('content')


<body>
    

 <form class="formulariorecuperar" method="POST" action="{{ route('password.email') }}">

 <h1>RECUPERAR CONTRASEÑA</h1>
        <div class="parraforecuperar">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente diguita tu dirección de correo electrónico y te enviaremos un enlace de restablecimiento de contraseña que te permitirá crear una nueva..') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

       
            @csrf

            <!-- Email Address -->
            <div class="casillarecuperar">
              

        <input placeholder="Correo" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="botonrecuperar1">
                    {{ __('restablecer contraseña') }}
                </button>
            </div>
        </form>
   

        @endsection('')
