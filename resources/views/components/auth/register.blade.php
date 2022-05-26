<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="nombre" :value="__('nombre')" />

                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
            </div>

              <!-- LastName -->
              <div>
                <x-label for="apellido" :value="__('apellido')" />

                <x-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus />
            </div>
                 <!-- typedocument -->
                 <div>
                    <x-label for="tipodocumento" :value="__('tipodocumento')" />
    
                    <x-input id="tipodocumento" class="block mt-1 w-full" type="text" name="tipodocumento" :value="old('tipo de documento')" required autofocus />
                </div>


                        <!-- typedocument -->
                        <div>
                            <x-label for="numerodocumento" :value="__('numerodocumento')" />
            
                            <x-input id="numerodocumento" class="block mt-1 w-full" type="text" name="numerodocumento" :value="old('numero de documento')" required autofocus />
                        </div>

                             <!-- telefono -->
                             <div>
                                <x-label for="telefono" :value="__('telefono')" />
                
                                <x-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus />
                            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('correo')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('confirmar contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('ya tienes un usuario?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registro') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
