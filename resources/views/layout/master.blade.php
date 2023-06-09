<!DOCTYPE html>
<html>


<head>
    <title>ProyectoWeb</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/docs/5.3/assets/js/color-modes.js"></script>
    <style>
        #fondo{
            background-image: URL('images/fondo.jpg');
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 1;
        }
    </style>
    @section('style')
    @show

    @section('script')
    @show
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div >
                <!-- Compañia -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link mb-0 h1" href="/" style="color: white; font-size: large;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 h1" href="https://www.pokemon.com/es" target="_blank" style="color: white; font-size: large;">Sitio Oficial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 h1" href="https://www.youtube.com/@PokemonOficialES" target="_blank" style="color: white; font-size: large;">Youtube</a>
                </li>
            </ul>

        </div>
    </nav>

    <div class="container-fluid" id="fondo">
        
        <!--principal-->
        <div id="Principal">
            <main>
                @yield('content')
            </main>
        </div>
    </div>

    <footer class="d-flex flex-wrap bg-dark justify-content-between align-items-center py-3 sticky-buttom">
        <p class="col-md-4 mb-0 text-body-secondary" style="color: White;">© 2023 PokemonCompany, Inc</p>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: White;">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: White;">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: White;">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: White;">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: White;">About</a></li>
        </ul>
    </footer>

</body>
</html>
