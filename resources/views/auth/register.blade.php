
   
@extends('layouts/layout')



@section('content')

<body>
<div>

<form class="formularioregister" method="POST" action="{{ route('register') }}">
      <h1>REGISTRA TU USUARIO</h1>    

@csrf

        
            <!-- Nombre -->
            <div class="casillaregister">
           

                <input id="nombre" placeholder="nombre" class="" type="text" name="nombre" :value="old('nombre')" required autofocus >
     {{$errors->first('nombre')}}
            </div>
            <!-- apellid0 -->

            <div class="casillaregister">
              

                <input  id="apellido" placeholder="apellido" class="" type="text" name="apellido" :value="old('apellido')" required autofocus >
                {{$errors->first('apellido')}}
            </div>

            <!-- tipo de documento -->

            <div class="casillaregister">
               

<input id="tipodocumento" placeholder="tipo de documento" class="" type="text" name="tipodocumento" :value="old('tipodocumento')" required autofocus >
                {{$errors->first('tipodocumento')}}
            </div>
   <!-- numero documento -->
   <div class="casillaregister">
           

                <input id="numerodocumento" placeholder="numero de documento" class="" type="text" name="numerodocumento" :value="old('numerodocumento')" required autofocu>
                {{$errors->first('numerodocumento')}}
            </div>



            <!-- telefono -->
            <div class="casillaregister">
             

                <input id="telefono" placeholder="telefono" class="" type="text" name="telefono" :value="old('telefono')" required autofocus >
                {{$errors->first('telefono')}}
            </div>



            <!-- Email Address -->
            <div class="casillaregister">
           

                <input id="email" placeholder="correo" class="" type="email" name="email" :value="old('email')" required >
                {{$errors->first('email')}}
            </div>

            <!-- Password -->
            <div class="casillaregister">
            

                <input id="password" placeholder="contraseña" class=""
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                                {{$errors->first('password')}}
            </div>

            <!-- Confirm Password -->
            <div class="casillaregister">
            

                <input id="password_confirmation" placeholder="confirmar contraseña" class=""
                                type="password"
                                name="password_confirmation" required >
                                {{$errors->first('password_confirmation')}}
            </div>

           
        
               <div class="botones">
               <a class="botonregister1" href="{{ route('login') }}" > {{ __('¿Ya tienes cuenta?') }}</a>
                  
<button  class="botonregister2"   > {{ __('Registrate') }}</button> 
               </div>
 

        </form>

        </div>
        <br>
     <br>
     <br>
   


     

        
                       
      @endsection('')
