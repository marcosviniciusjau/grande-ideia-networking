<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
               <center><img src="/img/ideia.png" alt="grandeideia" width="200px"></center>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="login">
            @csrf
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap');
    *{
        font-family: 'Lato', sans-serif;
        font-weight:bold;
    }
    body{
        background-image:url("./img/fundo_login.png");
        background-repeat: no-repeat;
        background-size:cover;
    }
    .login{
        margin-left:450px;
    }
    .entrar{
        font-family: 'Lato', sans-serif;
        font-size:medium;
        width:30%;
        height:30%;
        border-radius:50px;
        background-color:#f2a340;
        border-color:#f2a340;
        text-decoration:none;
    }
    #name,#email,#password,#password_confirmation{
        line-height:1.5rem;
        border-radius: 4px;
        
    }

    </style>
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <br>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                 <br>
            </div>

            <div class="mt-4">
                 <br>
                <x-label for="password" value="{{ __('Senha') }}" />
                   <br>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                 <br>
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
                </label>
            </div>
 <br>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                @endif
                   <br>
                   <br>

                <x-button class="entrar">
                 
                    {{ __('Entrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
