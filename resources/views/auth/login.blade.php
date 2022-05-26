@extends('layouts/layout')



@section('content')


<body>
    


        <form class="formulariologin" method="POST" action="{{route('login')}}">
            @csrf
<h1>INICIA SESIÓN</h1>
            <!-- Email Address -->
            <div class="casillalogin">
              

         <input   placeholder="Correo"  id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus/>

                {{$errors->first('email')}}
            </div>

            <!-- Password -->
            <div class="casillalogin">
              

                <input placeholder="Contraseña"  id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                                {{$errors->first('password')}}
            </div>

            <!-- Remember Me -->
            <div  class="casillarecuerdo">
                <label for="remember_me" class="">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                </label>
            </div>
<div class="botoneslogin">


<div class="">
                @if (Route::has('password.request'))
                    <a class="botonlogin1" href="{{ route('password.request') }}">
                        {{ __('¿olvidaste tu contraseña?') }}
                    </a>
                @endif

                <button class=" botonlogin2">
                    {{ __('Iniciar sesión') }}
                </button>
                </div>
            </div>
        </form>
  
      

                            
      @endsection('')
