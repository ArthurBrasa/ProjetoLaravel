<nav class="navbar bg-navbar-primary fixed-top height-nav" aria-label="Dark
                offcanvas
                navbar">
                <div class="container-fluid">
                    <a class="navbar-brand text-color-primary fw-bold" href="#">Blog Geek</a>
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
                                id="offcanvasNavbarDarkLabel fw-bold">
                                @auth
                                    {{Auth::user()->name}}
                                @endauth
                                @guest
                                    Blog Geek
                                @endguest
                            </h5>
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
                                        href=" {{route('store')}} ">Loja</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active fs-5"
                                        aria-current="page"
                                        href=" {{route('home')}} ">News</a>
                                </li>
                                @auth
                                <li class="nav-item">
                                    <a class="nav-link fs-5" href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                @endauth
                                
                                @guest
                                <li class="nav-item fs-5">
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                </li>
                                @endguest
                                
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