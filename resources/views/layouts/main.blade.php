    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>@yield('title')</title>
            <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="/css/styles.css">
            <script src="/javascript/scripts.js"></script>
        </head>
        <body>
            
        @yield('content')
        <footer>
        <p>HDC Events &copy;2023</p>
        </footer>
        </body>
    </html>