<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>perso</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-danger navbar-dark ">
            <!-- Container wrapper -->
            <div class="container-fluid">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">Brand</a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <!-- Link -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>

                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-mdb-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <!-- Icons -->
                    <ul class="navbar-nav d-flex flex-row me-1">
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>

                    <!-- Search -->
                    <form class="w-auto">
                        <input type="search" class="form-control" placeholder="Type query" aria-label="Search">
                    </form>

                </div>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>

    <section>

        <h1>mes info:</h1>

        <p>Mon prenom c'est {{$prenom}}</p>
        <p>Mon nom c'est {{$nom}}</p>
        <p>Mon age c'est {{$age}}</p>

        @foreach ($lists as  $key => $list)
            <p>j'aime le {{$list}}</p>
        @endforeach
        
    </section>

    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</body>

</html>
