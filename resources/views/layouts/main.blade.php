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
 <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/img/ideia.png" alt="grandeideia" id="navbar_img"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         
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