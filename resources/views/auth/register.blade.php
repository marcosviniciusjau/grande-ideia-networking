    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>@yield('title')</title>
            <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

            <link rel="stylesheet" href="/css/styles.css">
            <script src="/javascript/scripts.js"></script>
        </head>
        <body>
          <header>
   <nav class="navbar navbar-expand-lg bg-body-tertiary" id="nav">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
       <img src="/img/ideia.png" alt="grandeideia" id="navbar_img">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/"> Grande Ideia Networking</a>
        </li>
     
      </ul>
      <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                @auth
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Meus eventos</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST" id="logout">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                @endguest
            </ul>
    </div>
  </div>
</nav>
</header>

            <main>
                <div class="container-fluid">
                    <div class="row">
                        @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                        @endif
                        @yield('content')
                    </div>
                </div>
           </main>
        <footer>
        <p>
<p>Copyright &copy; Grande Ideia Networking</p></p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </body>
    </html>
<title>Grande Ideia-Cadastrar</title>
<link rel="icon" href="/img/icon.png" type="image/icon type">
  
<x-guest-layout>
    <x-authentication-card>
     <x-slot name="logo">
        <aside class="imagem">
         <img src="/img/ideia.png" alt="grandeideia" width="200px" id="ideia">
        </aside>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="cadastrar">
            @csrf
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap');
    *{
        font-family: 'Lato', sans-serif;
        font-weight:bold;
    }

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap');
    *{
        font-family: 'Lato', sans-serif;
        font-weight:bold;
    }


  aside.imagem {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-left: 400px;
    }

    .cadastrar {
    display: flex;
    flex-direction: column;
    align-items: center;
    }

    .register{
        width: 232px;
        line-height:48px;
        font-family: 'Lato', sans-serif;
        font-size:medium;
        border-radius:6px;
        background-color:#f2a340;
        border-color:#f2a340;
        text-decoration:none;
        
    }
    #name,#email,#password,#password_confirmation{
        line-height:2.5rem;
        width:270px;
        border-radius: 4px;
        font-size:medium;
    }

    </style>
           <div>

            <div>
                <x-label for="name" value="{{ __('Nome') }}" />
                  <br>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
  <br>
            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                  <br>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
  <br>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Senha') }}" />
                  <br>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
  <br>
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirme a Senha') }}" />
                  <br>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
  <br>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Já Cadastrado?') }}
                </a>
  <br>  <br>
                <x-button class="ms-4" class="register">
                    {{ __('Cadastrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
