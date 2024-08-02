<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylessheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapise" id="navbar">
                <a href="/" class="navbar-brand">
                <img src="/img/hdcevents_logo.svg" alt="HDC Events">
                </a>
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">cadastrar</a>
                     </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">entrar</a>
                    </li>
                        
                </ul>
            </div>
        </nav>
    </header> 
    @yield('content')
    <footer>
        <p>CRUD &copy; 2024</p>
    </footer>


    <!-- COMENTARIO  -->
    </body>
</html>
