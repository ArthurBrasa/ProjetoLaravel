<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
            crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom')}}">

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
            defer></script>
    </head>
    <body>
        <header>
            <nav class="navbar bg-navbar-primary fixed-top height-nav" aria-label="Dark
                offcanvas
                navbar">
                <div class="container-fluid">
                    <a class="navbar-brand text-color-primary fw-bold" href="#">Blog
                        Geek</a>
                    <button class="navbar-toggler" type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbarDark"
                        aria-controls="offcanvasNavbarDark">
                        <span class="">
                            <i class="bi bi-list text-white fs-1"></i>
                        </span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark
                        bg-offcanvas" tabindex="-1"
                        id="offcanvasNavbarDark"
                        aria-labelledby="offcanvasNavbarDarkLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title"
                                id="offcanvasNavbarDarkLabel fw-bold">Blog Geek</h5>
                            <button type="button" class="btn-close
                                btn-close-white"
                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end
                                flex-grow-1
                                pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active fs-5"
                                        aria-current="page"
                                        href=" {{route('home')}} ">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active fs-5"
                                        aria-current="page"
                                        href="#">Loja</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active fs-5"
                                        aria-current="page"
                                        href="#">News</a>
                                </li>
                                <li class="nav-item fs-5">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#"
                                    role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another
                                            action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something
                                            else here</a></li>
                                </ul>
                            </li> -->
                            </ul>
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search"
                                    placeholder="O que é anime?"
                                    aria-label="Search">
                                <button class="btn btn-outline-light"
                                    type="submit">Pesquisar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

        </header>
        <div class="height-nav"></div>

        <section class="vh-100">

            @yield('content')

        </section>


        <div class="container-fluid">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5
                my-5 p-0">
                <div class="d-flex w-100 ">
                    <div class="col mb-3">
                        <a href="/" class="d-flex align-items-center mb-3
                            link-dark text-decoration-none">
                            <svg class="bi me-2" width="40" height="32"><use
                                    xlink:href="#bootstrap"></use></svg>
                        </a>
                        <p class="text-muted ps-3 ms-3">&copy; Todos os Direitos Reservados
                            2023-2023</p>
                    </div>

                    <div class="col mb-3">

                    </div>

                    <div class="col mb-3">
                        <h5>Loja</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">Home</a></li>
                        </ul>
                    </div>

                    <div class="col mb-3">
                        <h5>News</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">Home</a></li>
                        </ul>
                    </div>

                    <div class="col mb-3">
                        <h5>Contatos</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-muted">Home</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container border-bottom w-75">

                </div>
                <div class="d-flex justify-content-around w-100 pt-3 align-items-center">
                    <div class="text-muted">
                        Arthur Brasa
                    </div>
                    <div>
                        <i class="bi bi-instagram fs-2"></i>
                        <i class="bi bi-github fs-2"></i>
                        <i class="bi bi-linkedin fs-2"></i>
                    </div>
                </div>
            </footer>
        </div>


    </body>
</html>